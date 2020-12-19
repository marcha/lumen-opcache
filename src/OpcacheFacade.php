<?php

namespace Marcha\Opcache;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Marcha\Opcache\OpcacheClass
 */
class OpcacheFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return OpcacheClass::class;
    }
}
