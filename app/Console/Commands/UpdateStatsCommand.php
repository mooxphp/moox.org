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

        \Log::info('UpdateStatsCommand: Starting command execution');

        try {
            \Log::info('UpdateStatsCommand: About to dispatch job');
            UpdateStatsJob::dispatch();
            \Log::info('UpdateStatsCommand: Job dispatched successfully');

            $this->info('Stats update job has been queued successfully!');

            $this->info('You can check the queue status with: php artisan queue:work --once');
            $this->info('Or check logs in storage/logs/laravel.log');

        } catch (\Exception $e) {
            \Log::error('UpdateStatsCommand: Failed to dispatch job', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            $this->error('Failed to dispatch job: '.$e->getMessage());

            return Command::FAILURE;
        }

        return Command::SUCCESS;
    }
}
