<?php

return
[
    'landing_page' => env('LANDING_PAGE', ''),
    'company_page' => env('COMPANY_PAGE', ''),
    'logo' => env('LOGO_URL', ''),
    'front_languages' => env('FRONT_LANGUAGES', 'EN,English,IT,Italian,FR,French,DE,German,ES,Spanish,RU,Russian,PT,Portuguese,TR,Turkish,ar,Arabic'),
    'landing_page_functions' => env('LANDING_PAGE_FUNCTIONS', 'feature'),
    'landing_page_titles' => env('LANDING_PAGE_TITLES', 'Features'),
    'app_locale' => env('APP_LOCALE', 'EN'),
    'show_demo_credentials' => env('SHOW_DEMO_CREDENTIALS', false),
    'is_demo' => env('IS_DEMO', false),
    'enable_pricing' => env('ENABLE_PRICING', true),
    'pricing_enabled' => env('ENABLE_PRICING', true),
    'subscription_processor' => env('SUBSCRIPTION_PROCESSOR', 'stripeh'),
    'local_transfer_info' => env('LOCAL_TRANSFER_INFO'),
    'local_transfer_account' => env('LOCAL_TRANSFER_ACCOUNT'),
    'free_pricing_id' => env('FREE_PRICING_ID', '1'),
    'ignore_subdomains' => explode(',', env('IGNORE_SUBDOMAINS', 'www')),
    'hide_company_profile' => env('HIDE_COMPANY_PROFILE', false),
    'vendor_entity_name' => env('VENDOR_ENTITY_NAME', 'Company'),
    'vendor_entity_name_plural' => env('VENDOR_ENTITY_NAME_PLURAL', 'Companies'),
    'url_route' => env('URL_ROUTE', 'company'),
    'url_route_plural' => env('URL_ROUTE_PLURAL', 'companies'),
    'wildcard_domain_ready' => env('WILDCARD_DOMAIN_READY', false),
    'cashier_currency' => env('CASHIER_CURRENCY', 'usd'),
    'site_currency' => env('CASHIER_CURRENCY', 'usd'),
    'currency' => env('CASHIER_CURRENCY', 'usd'),
    'convert' => env('CURRENCY_CONVERT', true),
    'share_this_property' => env('SHARE_THIS_PROPERTY', ''),
    'app_code_name' => env('APP_CODE_NAME', ''),
    'apps_available' => env('AVAILABLE_APPS', ''),
    'admin_companies_enabled' => env('ADMIN_COMPANIES_ENABLED', true),
    'stripe_secret' => env('STRIPE_SECRET', ''),
    'stripe_key' => env('STRIPE_KEY', ''),
    'ownerAdmin' => env('OWNER_ADMIN', 'default'),
    'model_for_payment' => env('MODEL_FOR_PAYMENT', 'none'),
    'show_company_page' => env('SHOW_COMPANY_PAGE', true),
    'show_company_logo' => env('SHOW_COMPANY_LOGO', true),
    'do_convertion' => env('DO_CONVERTION', true),
    'enable_login_as_client' => env('ENABLE_LOGIN_AS_CLIENT', false),
    'enable_login_as_company' => env('ENABLE_LOGIN_AS_COMPANY', true),
    'hide_share_link' => ENV('HIDE_SHARE_LINK', false),
    'limit_items_name' => env('LIMIT_ITEMS_NAME', 'Limit items'),
    'limit_views_name' => env('LIMIT_VIEWS_NAME', 'Limit views'),
    'limit_orders_name' => env('LIMIT_ORDERS_NAME', 'Limit orders'),
    'limit_items_show' => env('LIMIT_ITEMS_SHOW', true),
    'limit_views_show' => env('LIMIT_VIEWS_SHOW', false),
    'limit_orders_show' => env('LIMIT_ORDERS_SHOW', false),

    'demo_val1' => env('DEMO_VAL1', null),
    'demo_val2' => env('DEMO_VAL2', null),
    'demo_val3' => env('DEMO_VAL3', null),
    'demo_val4' => env('DEMO_VAL4', null),

    'task_1' => env('TASK_1', null),
    'task_1_docs' => env('TASK_1_DOCS', null),
    'task_1_info' => env('TASK_1_INFO', ''),
    'task_2' => env('TASK_2', null),
    'task_2_docs' => env('TASK_2_DOCS', null),
    'task_2_info' => env('TASK_2_INFO', ''),
    'task_3' => env('TASK_3', null),
    'task_3_docs' => env('TASK_3_DOCS', null),
    'task_3_info' => env('TASK_3_INFO', ''),
    'task_4' => env('TASK_4', null),
    'task_4_docs' => env('TASK_4_DOCS', null),
    'task_4_info' => env('TASK_4_INFO', ''),
    'task_5' => env('TASK_5', null),
    'task_5_docs' => env('TASK_5_DOCS', null),
    'task_5_info' => env('TASK_5_INFO', ''),
    'task_6' => env('TASK_6', null),
    'task_6_docs' => env('TASK_6_DOCS', null),
    'task_6_info' => env('TASK_6_INFO', ''),

    'paginate' => env('PAGINATE_COUNT', 10),

    'use_s3_as_storage' => (env('STORAGE_TYPE', 'public_uploads') == 's3'),
    'disable_landing_page' => env('DISABLE_LANDING', false),
    'hideApps' => env('HIDE_APPS', false),

    'forceUserToPay' => env('FORCE_USERS_TO_PAY', false),
    'document_repository' => env('DOCUMENT_REPOSITORY', 'Modules\Privacygen\Models\Document'),
    "apps_link" => env('APPS_GIST_LINK', 'https://gist.githubusercontent.com/dimovdaniel/b1621923f8bb30327a6a53a7d6562216/raw/apps.json'),
    'enable_credits' => env('ENABLE_CREDITS', true),
    'enable_multi_organizations' => env('ENABLE_MULTI_ORGANIZATIONS', true),
    'icon_type' => env('ICON_TYPE', 'nucleo'),
    'icon_size' => env('ICON_SIZE', '24px'),

];
