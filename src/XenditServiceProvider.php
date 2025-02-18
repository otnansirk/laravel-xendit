<?php

namespace Otnansirk\Dana;

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
        $this->app->bind('XenditInvoice', \Otnansirk\Xendit\Services\Invoice::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        Configuration::setXenditKey("YOUR_API_KEY_HERE");
        
        $this->publishes([
            __DIR__ . '/../config/xendit.php' => config_path('xendit.php'),
        ]);
    }
}