<?php

namespace Craft\Aliases\Tests;

use Craft\Aliases\AliasesServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            AliasesServiceProvider::class,
        ];
    }
}
