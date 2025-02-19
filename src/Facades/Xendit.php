<?php
namespace Otnansirk\Xendit\Facades;


use Illuminate\Support\Facades\Facade;

class Xendit extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Xendit';
    }
}