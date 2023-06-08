<?php

namespace App\Providers;

use App\Data\DokterHewan;
use Illuminate\Support\ServiceProvider;

class DokterHewanProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(DokterHewan::class, function () {
            return new DokterHewan("Fulan bin Fulan", 10);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
