<?php

namespace App\Jobs;

use App\Services\StatsService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class UpdateStatsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 1;

    public int $timeout = 60;

    public function __construct()
    {
        $this->onQueue('default');
    }

    public function handle(StatsService $statsService): void
    {
        Log::info('UpdateStatsJob started', [
            'queue' => 'default',
            'attempt' => $this->attempts(),
            'max_tries' => $this->tries,
        ]);

        try {
            Log::info('Calling StatsService->getStats()');
            $stats = $statsService->getStats();
            Log::info('StatsService returned data', ['stats_keys' => array_keys($stats)]);

            $jsonData = json_encode($stats, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
            Log::info('JSON data created', ['size' => strlen($jsonData)]);

            Storage::disk('local')->put('stats.json', $jsonData);
            Log::info('Stats file written to storage');

            Log::info('Stats updated successfully', [
                'downloads' => $stats['downloads'],
                'packages' => $stats['packages'],
                'contributors' => $stats['contributors'],
                'stargazers' => $stats['stargazers'],
            ]);

        } catch (\Exception $e) {
            Log::error('Failed to update stats: '.$e->getMessage(), [
                'exception' => $e->getTraceAsString(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);
            throw $e;
        }
    }
}
