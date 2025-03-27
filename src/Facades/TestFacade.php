<?php

namespace DonchenkoIn\TestPackage\Facades;

use DonchenkoIn\TestPackage\Services\TestService;
use Illuminate\Support\Facades\Facade;

class TestFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return TestService::class;
    }
}