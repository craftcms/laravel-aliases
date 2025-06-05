<?php

namespace Craft\Aliases\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Craft\Aliases\Aliases
 */
class Aliases extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Craft\Aliases\Aliases::class;
    }
}
