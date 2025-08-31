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

        try {
            UpdateStatsJob::dispatch();
            $this->info('Stats update job has been queued successfully!');

            $this->info('You can check the queue status with: php artisan queue:work --once');
            $this->info('Or check logs in storage/logs/laravel.log');

        } catch (\Exception $e) {
            $this->error('Failed to dispatch job: '.$e->getMessage());

            return Command::FAILURE;
        }

        return Command::SUCCESS;
    }
}
