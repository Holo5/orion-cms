<?php

namespace App\Providers;

use App\Services\ProfileService;
use App\Services\SettingsService;
use App\Enums\ArticleReactionType;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Srmklive\PayPal\Services\PayPal;
use Illuminate\Support\ServiceProvider;
use App\Services\Parsers\ExternalTextsParser;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(ExternalTextsParser::class, fn () => new ExternalTextsParser());
        $this->app->singleton(SettingsService::class, fn () => new SettingsService());
        $this->app->singleton(ProfileService::class, fn () => new ProfileService());
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->bootGlobalViewHelpers();

        if (App::isProduction() && config('hotel.force_https')) {
            URL::forceScheme('https');
        }

        $this->bindPaypalInstance();
        $this->bootDashboardSettings();
    }

    private function bindPaypalInstance(): void
    {
        $this->app->bind(PayPal::class, function() {
            $provider = new PayPal(config('paypal'));
            $provider->getAccessToken();

            return $provider;
        });
    }

    /**
     * Bootstrap the global view variables.
     */
    private function bootGlobalViewHelpers(): void
    {
        View::share('fromClient', request()->has('fromClient'));
        View::share('unsupportedFlashClient', request()->has('unsupported_flash'));

        View::share('availableLanguages', config('hotel.cms.available_languages'));
        View::share('articleReactions', collect(ArticleReactionType::cases()));
    }

    /**
     * Bootstrap the dashboard settings.
     */
    private function bootDashboardSettings(): void
    {
        //
    }
}
