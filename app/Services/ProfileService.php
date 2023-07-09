<?php

namespace App\Services;

use App\Models\User;
use App\Models\Home\HomeItem;
use App\Services\RconService;
use App\Models\Home\UserHomeItem;
use Illuminate\Support\Facades\DB;

class ProfileService
{
    public function checkPurchasePossibility(User $user, HomeItem $item, array $data, int $totalPrice): void
    {
        if ($item->limit && $item->exceededPurchaseLimit()) {
            throw new \Exception(__('This item exceeded the purchase limit.'));
        }

        if ($item->limit && (($item->total_bought + $data['quantity']) > $item->limit)) {
            throw new \Exception(__("You can't buy more than :max of this item.", ['max' => $item->limit - $item->total_bought]));
        }

        if ($totalPrice > $user->currency($item->currency_type)) {
            throw new \Exception(__("You don't have enough :c to buy this item.", ['c' => strtolower(__($item->currency_type->name))]));
        }
    }

    public function buyItemForUser(User $user, HomeItem $item, array $data, int $totalPrice): bool
    {
        if (!$user->online) {
            DB::transaction(function () use ($user, $item, $data, $totalPrice) {
                $user->discountCurrency($item->currency_type, $totalPrice);
                $user->giveHomeItem($item, $data['quantity']);
            });

            return true;
        }

        if (!config('hotel.rcon.enabled')) {
            throw new \Exception(__('RCON is not enabled!'));
        }

        $rcon = app(RconService::class);

        $rcon->sendSafely(
            'giveCurrency',
            [$user, $item->currency_type?->value, $user->fresh()->currency($item->currency_type) - $totalPrice],
            fn () => throw new \Exception(__('An error occurred while connecting with RCON'))
        );

        $user->giveHomeItem($item, $data['quantity']);
    }

    public function saveItems(User $user, array $data): void
    {
        if (isset($data['backgroundId']) && $background = $user->inventoryHomeItems()->find($data['backgroundId'])) {
            $user->changeProfileBackground($background);
        }

        if (!isset($data['items']) || count($data['items']) < 1) return;

        $itemsCollection = collect($data['items']);
        $allItemsInstance = $user->homeItems()
            ->whereIn('id', $itemsCollection->pluck('id'))
            ->get();

        DB::transaction(function () use ($itemsCollection, $allItemsInstance) {
            $allItemsInstance->each(function (UserHomeItem $item) use ($itemsCollection) {
                $itemData = $itemsCollection->where('id', $item->id)->first();

                $item->placed = 1;
                $item->x = (int) $itemData['x'] ?? $item->x;
                $item->y = (int) $itemData['y'] ?? $item->y;
                $item->z = (int) $itemData['z'] ?? $item->z;
                $item->is_reversed = (bool) $itemData['is_reversed'] ?? $item->is_reversed;
                $item->theme = (bool) $itemData['theme'] ?? $item->theme;

                if (!$item->isDirty()) return;

                $item->save();
            });
        });
    }

    public function getLatestPurchaseItemIds(User $user, HomeItem $item, int $quantity): array
    {
        $query = "SELECT hi.id, hi.type, hi.name, hi.image, uhi.home_item_id, JSON_ARRAYAGG(uhi.id) AS item_ids
            FROM (
                SELECT home_item_id, id
                FROM user_home_items
                WHERE user_id = ?
                AND user_id IS NOT NULL
                AND placed = ?
                AND home_item_id = ?
                ORDER BY id DESC
                LIMIT ?
            ) AS uhi
        JOIN home_items hi ON hi.id = uhi.home_item_id
        GROUP BY hi.id, hi.type, hi.name, hi.image";

        $query = DB::select($query, [$user->id, 0, $item->id, $quantity]);

        return array_map(function ($item) {
            return [
                'home_item_id' => $item->home_item_id,
                'item_ids' => json_decode($item->item_ids),
                'home_item' => [
                    'id' => $item->id,
                    'type' => $item->type,
                    'name' => $item->name,
                    'image' => $item->image,
                ],
            ];
        }, $query);
    }
}
