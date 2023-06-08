<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Data\Kucing;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('meong {n=1 : Number of Meong}', function (Kucing $kucing, int $n) {
    $bar = $this->output->createProgressBar($n);

    $bar->start();
    for($i = 0; $i < $n; $i++) {
        $this->comment($kucing->bunyi());
        $bar->advance();
    }
    $bar->finish();

    $this->info("\n\nAuthors:");
    $this->table(
        ['Name', 'Email'],
        [
            ["Hana", "hana@informatika.org"],
            ["Bayu", "bayu@informatika.org"],
        ]
    );
});
