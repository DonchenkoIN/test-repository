<?php

namespace DonchenkoIn\TestPackage\Providers;

use DonchenkoIn\TestPackage\Services\TestService;
use Illuminate\Support\ServiceProvider;

class TestRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(TestService::class, TestService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}