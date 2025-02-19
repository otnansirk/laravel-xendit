<?php

return [

    /**
     * True for production
     * false for sandbox mode
     *
     */
    "env" => env('XENDIT_ENV', 'development'),

    /**
     * for the API url value
     *
     */
    "api_url" => env('XENDIT_API_URL', 'https://api.xendit.co'),

    /**
     * for the WEB url value
     *
     */
    "web_url" => env('XENDIT_WEB_URL', 'https://xendit.co'),

    /**
     * for public key
     *
     */
    "public_key" => env("XENDIT_PUBLIC_KEY", ""),

    /**
     * for private key
     *
     */
    "private_key" => env("XENDIT_PRIVATE_KEY", ""),

    /**
     * For date format
     */
    "date_format"        => "Y-m-d\TH:i:sP",

    /**
     * For expired date after. Unit is minutes
     */
    "expired_after"      => 60, // Equivalent to 1 hours
];
