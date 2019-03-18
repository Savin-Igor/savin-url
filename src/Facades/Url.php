<?php

namespace Savin\Url\Facades;

use Illuminate\Support\Facades\Facade;

class Url extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'savin.url';
    }
}
