<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class StatsService
{
    private string $githubToken;

    private array $packagistVendors = ['moox', 'adrolli'];

    private string $githubOrg = 'mooxphp';

    private string $vscodeExtensionId = 'adrolli.tallui-laravel-livewire-tailwind';

    public function __construct()
    {
        $this->githubToken = config('services.github.token');
    }

    public function getStats(): array
    {
        return [
            'downloads' => $this->getTotalDownloads(),
            'packages' => $this->getTotalPackages(),
            'contributors' => $this->getTotalContributors(),
            'stargazers' => $this->getTotalStargazers(),
            'last_updated' => now()->toISOString(),
        ];
    }

    private function getTotalDownloads(): int
    {
        $total = 0;

        foreach ($this->packagistVendors as $vendor) {
            $total += $this->getPackagistDownloads($vendor);
        }

        $total += $this->getVscodeDownloads();

        return $total;
    }

    private function getPackagistDownloads(string $vendor): int
    {
        try {
            Log::info("Fetching Packagist downloads for vendor: {$vendor}");

            $response = Http::get("https://packagist.org/packages/list.json?vendor={$vendor}");

            if ($response->successful()) {
                $packageNames = $response->json('packageNames', []);
                Log::info("Found {$vendor} packages: ".count($packageNames));

                $total = 0;

                foreach ($packageNames as $packageName) {
                    Log::info("Fetching package: {$packageName}");

                    $packageResponse = Http::get("https://packagist.org/packages/{$packageName}.json");

                    if ($packageResponse->successful()) {
                        $packageData = $packageResponse->json('package', []);
                        $downloads = $packageData['downloads']['total'] ?? 0;
                        $total += $downloads;
                        Log::info("Package {$packageName}: {$downloads} downloads");
                    } else {
                        Log::warning("Failed to fetch package {$packageName}: ".$packageResponse->status());
                    }
                }

                Log::info("Total downloads for {$vendor}: {$total}");

                return $total;
            } else {
                Log::error("Packagist API failed for vendor {$vendor}: ".$response->status());
            }
        } catch (\Exception $e) {
            Log::error("Failed to fetch Packagist downloads for vendor {$vendor}: ".$e->getMessage());
        }

        return 0;
    }

    private function getVscodeDownloads(): int
    {
        try {
            Log::info('Fetching VS Code downloads for extension: '.$this->vscodeExtensionId);

            $response = Http::post('https://marketplace.visualstudio.com/_apis/public/gallery/extensionquery', [
                'filters' => [
                    [
                        'criteria' => [
                            ['filterType' => 7, 'value' => $this->vscodeExtensionId],
                        ],
                    ],
                ],
                'flags' => 0x1,
            ]);

            if ($response->successful()) {
                $data = $response->json();
                Log::info('VS Code API response: '.json_encode($data));

                $extensions = $data['results'][0]['extensions'] ?? [];

                if (! empty($extensions)) {
                    $extension = $extensions[0];
                    $downloads = $extension['statistics'][0]['value'] ?? 0;
                    Log::info("VS Code extension downloads: {$downloads}");

                    return $downloads;
                }
            } else {
                Log::error('VS Code API failed: '.$response->status().' - '.$response->body());
            }
        } catch (\Exception $e) {
            Log::error('Failed to fetch VS Code downloads: '.$e->getMessage());
        }

        return 0;
    }

    private function getTotalPackages(): int
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => "token {$this->githubToken}",
                'Accept' => 'application/vnd.github.v3+json',
            ])->get("https://api.github.com/orgs/{$this->githubOrg}/repos", [
                'type' => 'all',
                'per_page' => 100,
            ]);

            if ($response->successful()) {
                return count($response->json());
            }
        } catch (\Exception $e) {
            Log::error('Failed to fetch GitHub packages: '.$e->getMessage());
        }

        return 0;
    }

    private function getTotalContributors(): int
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => "token {$this->githubToken}",
                'Accept' => 'application/vnd.github.v3+json',
            ])->get("https://api.github.com/repos/{$this->githubOrg}/moox/contributors", [
                'per_page' => 100,
            ]);

            if ($response->successful()) {
                return count($response->json());
            }
        } catch (\Exception $e) {
            Log::error('Failed to fetch GitHub contributors: '.$e->getMessage());
        }

        return 0;
    }

    private function getTotalStargazers(): int
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => "token {$this->githubToken}",
                'Accept' => 'application/vnd.github.v3+json',
            ])->get("https://api.github.com/orgs/{$this->githubOrg}/repos", [
                'type' => 'all',
                'per_page' => 100,
            ]);

            if ($response->successful()) {
                $repos = $response->json();
                $total = 0;

                foreach ($repos as $repo) {
                    $total += $repo['stargazers_count'] ?? 0;
                }

                return $total;
            }
        } catch (\Exception $e) {
            Log::error('Failed to fetch GitHub stargazers: '.$e->getMessage());
        }

        return 0;
    }
}
