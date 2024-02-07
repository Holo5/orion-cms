<?php

return [
    'navigations' => [
        'Dashboard' => 'Dashboard',
        'Hotel' => 'Hotel',
        'Website' => 'Website',
        'Help Center' => 'Helpcentrum',
        'Administration' => 'Administratie',
        'User Management' => 'Gebruikersbeheer',
        'Profile Management' => 'Profile Management',
        'Shop' => 'Shop',
        'Logs' => 'Logs',
    ],

    'resources' => [
        'dashboard' => [
            'navigation_label' => 'Dashboard'
        ],
        'achievements' => [
            'navigation_label' => 'Beheer Prestaties',
            'label' => 'Prestatie',
            'plural' => 'Prestaties',
        ],
        'emulator-settings' => [
            'navigation_label' => 'Emulatorinstellingen',
            'label' => 'Instelling',
            'plural' => 'Emulatorinstellingen',
        ],
        'article' => [
            'navigation_label' => 'Beheer Artikelen',
            'label' => 'Artikel',
            'plural' => 'Artikelen',
        ],
        'cms-settings' => [
            'navigation_label' => 'CMS-instellingen',
            'label' => 'Instelling',
            'plural' => 'CMS-instellingen',
        ],
        'help-questions-categories' => [
            'navigation_label' => 'Beheer Categorieën',
            'label' => 'Categorie',
            'plural' => 'Vraagcategorieën',
        ],
        'help-questions' => [
            'navigation_label' => 'Beheer Vragen',
            'label' => 'Vraag',
            'plural' => 'Vragen',
        ],
        'tags' => [
            'navigation_label' => 'Beheer Tags',
            'label' => 'Tag',
            'plural' => 'Tags',
        ],
        'bans' => [
            'navigation_label' => 'Beheer Verbanningen',
            'label' => 'Verbanning',
            'plural' => 'Verbanningen',
        ],
        'users' => [
            'navigation_label' => 'Beheer Gebruikers',
            'label' => 'Gebruiker',
            'plural' => 'Gebruikers',
        ],
        'badge-resource' => [
            'navigation_label' => 'Beheer Badges',
            'label' => 'Badge',
            'plural' => 'Badges',
        ],
        'home-items' => [
            'navigation_label' => 'Beheer Home Items',
            'label' => 'Home Item',
            'plural' => 'Home Items',
        ],
        'home-categories' => [
            'navigation_label' => 'Beheer Home Categorieën',
            'label' => 'Home Categorie',
            'plural' => 'Home Categorieën',
        ],
        'navigations' => [
            'navigation_label' => 'Beheer Navigaties',
            'label' => 'Navigatie',
            'plural' => 'Navigaties',
        ],
        'teams' => [
            'navigation_label' => 'Beheer Teams',
            'label' => 'Team',
            'plural' => 'Teams',
        ],
        'shop-products' => [
            'navigation_label' => 'Beheer Producten',
            'label' => 'Product',
            'plural' => 'Producten',
        ],
        'shop-categories' => [
            'navigation_label' => 'Beheer Categorieën',
            'label' => 'Categorie',
            'plural' => 'Categorieën',
        ],
        'shop-orders' => [
            'navigation_label' => 'Manage Orders',
            'label' => 'Order',
            'plural' => 'Orders',
        ],
        'command-logs' => [
            'navigation_label' => 'Manage Command Logs',
            'label' => 'Command Log',
            'plural' => 'Command Logs',
        ],
        'wordfilter' => [
            'navigation_label' => 'Manage Word Filter',
            'label' => 'Word Filter',
            'plural' => 'Word Filters',
        ],
        'writeable-boxes' => [
            'navigation_label' => 'Beheer Schrijfbare Boxen',
            'label' => 'Schrijfbare Box',
            'plural' => 'Schrijfbare Boxen',
        ],

        // Relations
        'settings' => [
            'navigation_label' => 'Instellingen',
            'label' => 'Instelling',
            'plural' => 'Instellingen',
        ],
        'badges' => [
            'navigation_label' => 'Badges',
            'label' => 'Badge',
            'plural' => 'Badges',
        ],
        'product-item' => [
            'navigation_label' => 'Items',
            'label' => 'Item',
            'plural' => 'Items',
        ],
    ],

    'common' => [
        'All' => 'Alle',
        'Yes' => 'Ja',
        'No' => 'Nee',
        'Sucessfull' => 'Succesvol',
        'Never' => 'Nooit',
        'Account' => 'Account',
        'IP' => 'IP',
        'Machine' => 'Machine',
        'Super' => 'Super',
        'Male' => 'Man',
        'Female' => 'Vrouw',
        'Credits' => 'Credits',
        'Duckets' => 'Duckets',
        'Diamonds' => 'Diamanten',
        'Points' => 'Punten',
        'Update' => 'Update',
        'Create' => 'Create',
        'Open link' => 'Open link',
        'Sticker' => 'Sticker',
        'Widget' => 'Widget',
        'Note' => 'Note',
        'Background' => 'Background',
        'Metrics' => 'Metrics',
    ],

    'helpers' => [
        'achievement_points' => 'Punten voor het behalen van een prestatie',
        'achievement_progress_needed' => 'Voortgang nodig om de prestatie te voltooien',
        'help_questions_category_icon' => 'Je kunt hier elke afbeeldingslink gebruiken. We raden aan om een afbeelding met een formaat van 20x20 te gebruiken.',
        'change_username_description' => 'Sta deze gebruiker toe om zijn gebruikersnaam te wijzigen (binnen de client)',
        'change_password_description' => 'Laat leeg om het huidige wachtwoord te behouden',
        'badge_code_helper' => 'Voer de code in en klik op het vergrootglas naast het veld. Als het embleem bestaat, wordt het automatisch ingevuld.',
        'home_item_limit_helper' => 'Buy limit for this item. Leave blank for unlimited.',
        'limit_per_user_helper' => 'Purchase limit per user, or leave blank for unlimited.',
        'sales_count_helper' => 'Total sales for this item. (This information is automatically updated)',
        'badge_item_data_helper' => 'Enter the badge code below.',
        'furniture_item_data_helper' => "Enter the furniture 'item_name' below. (This data can be found in the 'items_base' table in the database)",
        'room_item_data_helper' => 'Enter the room ID below.',
        'currency_item_data_helper' => 'Enter the currency name below. Can be one of: credits, duckets, diamonds or points',
        'empty_item_data_helper' => 'Select an item type to view the necessary information.',
    ],

    'tabs' => [
        'Home' => 'Home',
        'Main' => 'Hoofd',
        'Configurations' => 'Configuraties',
        'General Information' => 'Algemene Informatie',
        'Currencies' => 'Valuta',
        'Security' => 'Beveiliging',
        'Change Username' => 'Gebruikersnaam Wijzigen',
        'Change Email' => 'E-mail Wijzigen',
        'Change Password' => 'Wachtwoord Wijzigen',
        'Change Rank' => 'Rang Wijzigen',
        'Account Data' => 'Accountgegevens',
        'Extra Settings' => 'Extra Instellingen',
        'Metrics' => 'Metrics',
    ],

    'inputs' => [
        'key' => 'Sleutel',
        'value' => 'Waarde',
        'comment' => 'Opmerking',
        'name' => 'Naam',
        'level' => 'Niveau',
        'email' => 'E-mail',
        'category' => 'Categorie',
        'visible' => 'Zichtbaar',
        'reward_type' => 'Beloningstype',
        'reward_amount' => 'Beloningsbedrag',
        'points' => 'Punten',
        'progress_needed' => 'Benodigde voortgang',
        'fixed' => 'Vast',
        'allow_comments' => 'Reacties toestaan',
        'title' => 'Titel',
        'description' => 'Omschrijving',
        'image' => 'Afbeelding',
        'icon' => 'Pictogram',
        'content' => 'Inhoud',
        'is_promotion' => 'Is dit artikel een promotie?',
        'promotion_ends_at' => 'Promotie eindigt op',
        'categories' => 'Categorieën',
        'background_color' => 'Achtergrondkleur',
        'expires_at' => 'Verloopt op',
        'reason' => 'Reden',
        'type' => 'Type',
        'username' => 'Gebruikersnaam',
        'motto' => 'Motto',
        'gender' => 'Geslacht',
        'created_at' => 'Aangemaakt op',
        'last_login' => 'Laatste login',
        'last_online' => 'Laatst online',
        'ip_register' => 'Registratie-IP',
        'ip_current' => 'Huidige IP',
        'referral_code' => 'Verwijzingscode',
        'referrer_code' => 'Verwijzer Code',
        'allow_change_username' => 'Gebruikersnaam wijzigen toestaan',
        'new_password' => 'Nieuw wachtwoord',
        'new_password_confirmation' => 'Bevestig nieuw wachtwoord',
        'rank' => 'Rang',
        'badge_code' => 'Badge code',
        'achievement_score' => 'Prestatiescore',
        'respects_received' => 'Ontvangen respect',
        'can_trade' => 'Kan handelen?',
        'block_following' => 'Volgen blokkeren',
        'block_friendrequests' => 'Vriendverzoeken blokkeren',
        'block_roominvites' => 'Kameruitnodigingen blokkeren',
        'max_rooms' => 'Maximale kamers',
        'max_friends' => 'Maximale vrienden',
        'old_chat' => 'Oude chat',
        'block_camera_follow' => 'Camera volgen blokkeren',
        'ignore_bots' => 'Bots negeren',
        'ignore_pets' => 'Huisdieren negeren',
        'badge_code' => 'Embleem code',
        'badge_title' => 'Embleem titel',
        'badge_description' => 'Embleem beschrijving',
        'badge_image' => 'Embleem afbeelding',
        'price' => 'Price',
        'currency_type' => 'Currency Type',
        'limit' => 'Limit',
        'slug' => 'Slug',
        'order' => 'Order',
        'new_tab' => 'New Tab',
        'label' => 'Label',
        'team_id' => 'Team',
        'is_hidden' => 'Is Hidden?',
        'is_featured' => 'Is Featured?',
        'limit_per_user' => 'Limit Per User',
        'sales_count' => 'Sales Count',
        'item_data' => 'Item Data',
        'quantity' => 'Quantity',
        'is_active' => 'Is Active?',
        'item_is_active' => 'Can this item be displayed and sent to other users through a purchase?',
        'order_id' => 'Order ID',
        'status' => 'Status',
        'paypal_fee' => 'PayPal Fee',
        'details' => 'Details',
        'is_delivered' => 'Is Delivered?',
        'replacement' => 'Replacement',
        'hideable' => 'Hideable',
        'reportable' => 'Reportable',
        'mute_time' => 'Mute Time',
        'page_target' => 'Page Target',
    ],

    'columns' => [
        'id' => 'ID',
        'badge' => 'Badge',
        'name' => 'Naam',
        'level' => 'Niveau',
        'category' => 'Categorie',
        'visible' => 'Zichtbaar',
        'key' => 'Sleutel',
        'value' => 'Waarde',
        'title' => 'Titel',
        'image' => 'Afbeelding',
        'by' => 'Door',
        'fixed' => 'Vast',
        'allow_comments' => 'Reacties toestaan',
        'comment' => 'Opmerking',
        'order' => 'Volgorde',
        'icon' => 'Pictogram',
        'questions_count' => 'Gekoppelde Vragen',
        'background_color' => 'Achtergrondkleur',
        'avatar' => 'Avatar',
        'username' => 'Gebruikersnaam',
        'reason' => 'Reden',
        'type' => 'Type',
        'banned_at' => 'Verbannen Op',
        'expires_at' => 'Verloopt Op',
        'email' => 'E-mail',
        'motto' => 'Motto',
        'created_at' => 'Aangemaakt Op',
        'online' => 'Online?',
        'badge_code' => 'Badge Code',
        'equipped' => 'Uitgerust?',
        'achievement_score' => 'Prestatiescore',
        'respects_received' => 'Ontvangen Respect',
        'online_time' => 'Online Tijd',
        'can_trade' => 'Kan Handelen?',
        'can_change_name' => 'Kan Naam Wijzigen?',
        'price' => 'Price',
        'slug' => 'Slug',
        'new_tab' => 'New Tab',
        'is_featured' => 'Is Featured?',
        'sales_count' => 'Sales Count',
        'type' => 'Type',
        'item_data' => 'Item Data',
        'quantity' => 'Quantity',
        'order_id' => 'Order ID',
        'is_delivered' => 'Is Delivered?',
        'command' => 'Command',
        'success' => 'Success',
        'executed_at' => 'Executed At',
        'replacement' => 'Replacement',
        'hideable' => 'Hideable',
        'reportable' => 'Reportable',
        'mute_time' => 'Mute Time',
        'page_target' => 'Page Target',
    ],

    'options' => [
        'badge' => 'Badge',
        'furniture' => 'Furniture',
        'room' => 'Room',
        'currency' => 'Currency',
        'completed' => 'Completed',
        'pending' => 'Pending',
        'cancelled' => 'Cancelled',
        'yes' => 'Yes',
        'no' => 'No',
        'staff' => 'Staff',
        'shop' => 'Shop',
        'teams' => 'Teams',
    ],

    'widgets' => [
        'pending_orders' => 'Pending Orders',
        'completed_orders' => 'Completed Orders',
        'canceled_orders' => 'Canceled Orders',
        'were_canceled' => 'were cancelered.',
        'are_pending_payment' => 'are pending payment.',
        'were_completed' => 'have been paid and completed.',
    ],

    'filters' => [
        'success' => 'Success',
        'page_target' => 'Page Target',
        'visible' => 'Visible',
    ],

    'notifications' => [
        'badge_code_required' => 'Je moet een embleemcode invoeren!',
        'badge_found' => 'Embleem gevonden!',
        'badge_updated' => 'Embleem bijgewerkt!',
        'badge_update_failed' => 'Embleem bijwerken mislukt!',
        'create_badge' => 'Enter the data below to create a new badge!',
        'badge_texts_required' => 'You need to enter the badge texts.',
    ]
];
