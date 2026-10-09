<div class="filament-hidden">

![Filament Pirsch](https://raw.githubusercontent.com/jeffersongoncalves/filament-pirsch/1.x/art/jeffersongoncalves-filament-pirsch.png)

</div>

# Filament Pirsch

[![Buy Me A Coffee](https://img.shields.io/badge/Buy%20Me%20A%20Coffee-support-FFDD00?style=flat-square&logo=buy-me-a-coffee&logoColor=black)](https://buymeacoffee.com/jeffersongoncalves)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-pirsch.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-pirsch)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-pirsch/fix-php-code-style-issues.yml?branch=1.x&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-pirsch/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3A1.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-pirsch.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-pirsch)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-pirsch.svg?style=flat-square)](LICENSE.md)

Filament plugin for [Pirsch](https://pirsch.io) — cookie-free, privacy-friendly web analytics made in Germany — with a settings page powered by [Spatie Laravel Settings](https://github.com/spatie/laravel-settings). Manage Pirsch from the Filament admin panel; the script is injected into the `<head>` of every panel page.

Built on top of [jeffersongoncalves/laravel-pirsch](https://github.com/jeffersongoncalves/laravel-pirsch).

## Compatibility

| Branch | Filament | Package version |
|--------|----------|-----------------|
| 1.x | 3.x | `^1.0` |
| 2.x | 4.x | `^2.0` |
| 3.x | 5.x | `^3.0` |

## Installation

```bash
composer require jeffersongoncalves/filament-pirsch:"^1.0"
```

Publish the settings migrations and run them:

```bash
php artisan vendor:publish --tag=pirsch-settings-migrations
php artisan migrate
```

## Usage

```php
use JeffersonGoncalves\Filament\Pirsch\PirschPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            PirschPlugin::make(),
        ]);
}
```

The plugin registers a **Pirsch** settings page and injects the script into the `<head>` of every panel page once the settings are complete.

| Field | Label |
|-------|-------|
| `identification_code` | Identification code |

### Disable the Settings Page

```php
PirschPlugin::make()
    ->settingsPage(false),
```

To render the script outside Filament, add `@include('pirsch::script')` to your own layout.

### Navigation group

Put the settings page in one of your panel's own navigation groups (a string or a closure):

```php
PirschPlugin::make()
    ->navigationGroup(fn (): string => __('admin.navigation.settings')),
```

## Requirements

- PHP 8.2 or higher
- Filament 3.x

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jefferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
