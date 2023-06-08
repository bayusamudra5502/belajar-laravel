<?php

namespace App\Providers;

use App\Data\Kucing;
use App\Data\RumahHewan;
use App\Data\RumahKucing;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class RumahHewanProvider extends ServiceProvider
{
    public array $bindings = [
        RumahHewan::class => RumahKucing::class
    ];

    public array $singletons = [];
}
