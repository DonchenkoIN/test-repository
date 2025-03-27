<?php

namespace DonchenkoIn\TestPackage\Tests;

use DonchenkoIn\TestPackage\Providers\TestRepositoryServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            TestRepositoryServiceProvider::class
        ];
    }
}