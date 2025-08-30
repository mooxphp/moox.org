# Moox Statistics System Setup

## Overview

This system automatically fetches statistics from various APIs and displays them on the welcomev2 page.

## Required Environment Variables

Add the following to your `.env` file:

```env
GITHUB_TOKEN=your_github_personal_access_token_here
```

## GitHub Token Setup

1. Go to GitHub Settings > Developer settings > Personal access tokens
2. Generate a new token with the following scopes:
    - `repo` (for private repositories)
    - `read:org` (for organization repositories)

## Installation

1. The system is already set up with the following components:

    - `StatsService` - Fetches data from APIs
    - `UpdateStatsJob` - Background job for updates
    - `StatsController` - API endpoints
    - Console command for manual updates

2. Run the initial stats update:

```bash
php artisan stats:update
```

3. The scheduler will automatically update stats every hour

## Manual Updates

To manually update statistics:

```bash
php artisan stats:update
```

## API Endpoints

-   `GET /api/stats` - Get current statistics
-   `POST /api/stats/update` - Trigger manual update

## Data Sources

-   **Downloads**: Packagist (moox/_, adrolli/_) + VS Code Marketplace
-   **Packages**: GitHub (mooxphp/\* repositories)
-   **Contributors**: GitHub (mooxphp/moox repository)
-   **Stargazers**: GitHub (sum of all mooxphp/\* repositories)

## File Storage

Statistics are stored in `storage/app/stats.json` and updated automatically.
