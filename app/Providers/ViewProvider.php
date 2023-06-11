<?php

namespace App\Providers;

use App\View\Composers\MeongComposer;
use App\View\Creators\MeongCreator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::share("version", "ALPHA 0.1.0");
        View::composer("meong.*", MeongComposer::class);
        View::creator("meong.*", MeongCreator::class);
    }
}
