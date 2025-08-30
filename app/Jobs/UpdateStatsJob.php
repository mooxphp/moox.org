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

    public function __construct()
    {
        $this->onQueue('stats');
    }

    public function handle(StatsService $statsService): void
    {
        try {
            $stats = $statsService->getStats();

            $jsonData = json_encode($stats, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

            Storage::disk('local')->put('stats.json', $jsonData);

            Log::info('Stats updated successfully', [
                'downloads' => $stats['downloads'],
                'packages' => $stats['packages'],
                'contributors' => $stats['contributors'],
                'stargazers' => $stats['stargazers'],
            ]);

        } catch (\Exception $e) {
            Log::error('Failed to update stats: '.$e->getMessage());
            throw $e;
        }
    }
}
