<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class AppStartCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:start {--d|debug} {--i|interactive} {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Example of issue';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(): void
    {
        $this->info('debug: ' . ($this->option('debug') ? 'true' : 'false'));
        $this->info('verbose: ' . ($this->option('verbose')  ? 'true' : 'false'));
        $this->info('interactive: ' . ($this->option('interactive')  ? 'true' : 'false'));
        $this->info('name: ' . $this->argument('name'));
    }
}
