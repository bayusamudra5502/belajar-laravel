<?php

namespace App\Providers;

use App\Data\TamanBermain;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class TamanBermainProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(TamanBermain::class, function () {
            return new TamanBermain("Taman Kucing");
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }

    public function provides()
    {
        return [TamanBermain::class];
    }
}
