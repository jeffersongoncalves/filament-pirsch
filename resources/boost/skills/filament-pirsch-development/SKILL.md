---
name: filament-pirsch-development
description: Build and work with the Filament Pirsch plugin — settings page and script injection in Filament panels.
---

# Filament Pirsch Development

## When to use this skill

- Adding or changing the Pirsch integration of a Filament panel
- Customizing the Pirsch settings page
- Debugging a missing Pirsch script in a panel

## Package Overview

- **Package**: `jeffersongoncalves/filament-pirsch` (branch `2.x`)
- **Namespace**: `JeffersonGoncalves\Filament\Pirsch`
- **Dependencies**: `jeffersongoncalves/filament-analytics-core:^2.0`, `jeffersongoncalves/laravel-pirsch:^1.0`

## Setup

```php
use JeffersonGoncalves\Filament\Pirsch\PirschPlugin;

$panel->plugins([
    PirschPlugin::make(),                        // settings page + script injection
    // PirschPlugin::make()->settingsPage(false), // script injection only
]);
```

```bash
php artisan vendor:publish --tag=pirsch-settings-migrations
php artisan migrate
```

## Settings Fields

| Field | Component |
|-------|-----------|
| `identification_code` | TextInput |

## Troubleshooting

- **Script missing**: the settings are incomplete — `app(\JeffersonGoncalves\Pirsch\Settings\PirschSettings::class)->isConfigured()`.
- **Settings page errors**: the `pirsch` settings group is missing — publish and run the migrations.
