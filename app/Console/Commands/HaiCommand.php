<?php


namespace App\Console\Commands;

use App\Data\TamanBermain;
use Illuminate\Console\Command;

class HaiCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hai';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Give Hi to user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->comment("Hi...");
    }
}
