<?php

namespace Otnansirk\Xendit;

use Illuminate\Support\ServiceProvider;
use Xendit\Configuration;


class XenditServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Xendit', \Otnansirk\Xendit\Services\Xendit::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Configuration::setXenditKey(config("xendit.private_key"));
        
        $this->publishes([
            __DIR__ . '/../config/xendit.php' => config_path('xendit.php'),
        ]);
    }
}