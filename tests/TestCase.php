<?php

namespace CraftCms\Aliases\Tests;

use CraftCms\Aliases\AliasesServiceProvider;
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
