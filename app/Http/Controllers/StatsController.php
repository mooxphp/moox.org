<?php

namespace App\Http\Controllers;

use App\Jobs\UpdateStatsJob;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;

class StatsController extends Controller
{
    public function index(): JsonResponse
    {
        $stats = $this->getStats();

        return response()->json($stats);
    }

    public function update(): JsonResponse
    {
        UpdateStatsJob::dispatch();

        return response()->json([
            'message' => 'Stats update job dispatched',
            'status' => 'queued',
        ]);
    }

    private function getStats(): array
    {
        if (Storage::disk('local')->exists('stats.json')) {
            $jsonData = Storage::disk('local')->get('stats.json');
            $stats = json_decode($jsonData, true);

            if (json_last_error() === JSON_ERROR_NONE) {
                return $stats;
            }
        }

        return [
            'downloads' => 0,
            'packages' => 0,
            'contributors' => 0,
            'stargazers' => 0,
            'last_updated' => null,
        ];
    }
}
