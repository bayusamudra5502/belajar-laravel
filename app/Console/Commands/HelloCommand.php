<?php

namespace App\Console\Commands;

use App\Data\TamanBermain;
use Illuminate\Console\Command;

class HelloCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hello {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Give Hello to user';

    /**
     * Execute the console command.
     */
    public function handle(TamanBermain $taman)
    {
        $name = $this->argument('name');
        $park_name = $taman->get_name();

        $this->comment("Hello $name, welcome to $park_name");
    }
}
