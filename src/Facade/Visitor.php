<?php

namespace torgodly\Visitor\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Class viewer
 *
 * @package torgodly\Visitor\Facade
 */
class Visitor extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'torgodly-visitor';
    }
}
