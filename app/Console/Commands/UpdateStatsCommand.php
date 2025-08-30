<?php

namespace App\Console\Commands;

use App\Jobs\UpdateStatsJob;
use Illuminate\Console\Command;

class UpdateStatsCommand extends Command
{
    protected $signature = 'stats:update';

    protected $description = 'Update statistics from external APIs';

    public function handle(): int
    {
        $this->info('Dispatching stats update job...');

        UpdateStatsJob::dispatch();

        $this->info('Stats update job has been queued successfully!');

        return Command::SUCCESS;
    }
}
