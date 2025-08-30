<p align="center">
    <br>
  	<img src="https://raw.githubusercontent.com/mooxphp/moox/main/packages/brand/public/logo/moox-logo.png" width="200" alt="Moox Logo">
    <br>
</p><br>

# moox.org

The Moox Website on [Moox.org](https://moox.org).

More information about Moox in the [Moox Monorepo](https://github.com/mooxphp/moox).

## Stats

```bash
# Manually fetch
php artisan stats:update
php artisan queue:work --once --queue=stats

# then schedule
php artisan schedule:work
```

More information about [configuring stats](STATS_SETUP.md).
