<?php

namespace Dualznz\LaravelPlex\Facades;

/*
 * Class Facade
 * @package Dualznz\LaravelPlex
 */

use Illuminate\Support\Facades\Facade;

class Plex extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'Dualznz\LaravelPlex\PlexFacadeAccessor';
    }
}
