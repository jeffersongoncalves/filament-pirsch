## Filament Pirsch

Filament plugin for Pirsch with a settings page powered by Spatie Laravel Settings. The script is injected at `PanelsRenderHook::HEAD_START` of every panel page once the settings are complete.

### Installation

@verbatim
<code-snippet name="Install the plugin" lang="bash">
composer require jeffersongoncalves/filament-pirsch:"^3.0"
php artisan vendor:publish --tag=pirsch-settings-migrations
php artisan migrate
</code-snippet>
@endverbatim

### Register Plugin

@verbatim
<code-snippet name="Register in PanelProvider" lang="php">
use JeffersonGoncalves\Filament\Pirsch\PirschPlugin;

$panel->plugins([
    PirschPlugin::make(),
]);
</code-snippet>
@endverbatim

### Architecture
- `PirschPlugin` extends `JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin` and registers `ManagePirschSettings` (disable with `->settingsPage(false)`)
- `PirschServiceProvider` extends `AbstractAnalyticsServiceProvider` and injects the `pirsch::script` view from `jeffersongoncalves/laravel-pirsch`
- `ManagePirschSettings` is a `SettingsPage` bound to `JeffersonGoncalves\Pirsch\Settings\PirschSettings`
- Translations live under `filament-pirsch::pages.*`
