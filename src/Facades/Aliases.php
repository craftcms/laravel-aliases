<?php

namespace Craft\Aliases\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @mixin \Yiisoft\Aliases\Aliases
 */
class Aliases extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Yiisoft\Aliases\Aliases::class;
    }
}
