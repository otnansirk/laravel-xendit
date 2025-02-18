<?php

return [

    "version"            => "2.0",

    "env"                => env('XENDIT_ENV', 'development'),

    "active"             => env('XENDIT_ACTIVE', false),

    /**
     * True for production
     * false for sandbox mode
     *
     */
    "is_production"      => (env('XENDIT_ENV', 'development') == 'production') ? true : false,

    /**
     * for the API url value
     *
     */
    "api_url"            => env('XENDIT_API_URL', 'https://api.xendit.co'),

    /**
     * for the WEB url value
     *
     */
    "web_url"            => env('XENDIT_WEB_URL', 'https://xendit.co'),

    /**
     * for clientId value
     * example = 212640060018011593493
     *
     */
    "merchant_id"        => env("XENDIT_MARCHANT_ID", ""),

    /**
     * for clientId value
     * example = 2018122812174155520063
     *
     */
    "client_id"          => env("XENDIT_CLIENT_ID", ""),

    /**
     * for clientSecret value
     * example = 3f5798274c9b427e9e0aa2c5db0a6454
     *
     */
    "client_secret"      => env("XENDIT_CLIENT_SECRET", ""),

    /**
     * for oauthRedirectUrl value
     * Put your redirect url for OAuth flow/account binding, to redirect the authCode
     * example = https://api.merchant.com/oauth-callback
     *
     */
    "oauth_redirect_url" => 'https://api.merchant.com/oauth-callback',

    /**
     * For date format
     */
    "date_format"        => "Y-m-d\TH:i:sP",

    /**
     * For expired date after. Unit is minutes
     */
    "expired_after"      => 60,
    // Equivalent to 1 hours

    /**
     * For get notif every status order is changed
     */
    "order_notify_url"   => env("XENDIT_ORDER_NOTIFY_URL", ""),

    /**
     * For get redirect user to merchant website
     */
    "pay_return_url"     => env("XENDIT_PAY_RETURN_URL", ""),

];