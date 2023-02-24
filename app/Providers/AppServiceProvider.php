<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Foundation\Vite;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Filament::registerScripts([app(Vite::class)('resources/filament/filament-turbo.js')]);
        Filament::registerScripts([app(Vite::class)('resources/filament/filament-stimulus.js')]);
    }
}
