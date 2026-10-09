# Changelog

All notable changes to `filament-pirsch` will be documented in this file.

## 2.1.0 - 2026-10-09

`Plugin::make()->navigationGroup(string|Closure)` puts the settings page in one of your panel's own navigation groups (requires filament-analytics-core 2.1). Without it the translated group is kept.

## 2.0.0 - 2026-10-08

First release for Filament 4.x.

Pirsch for Filament on top of [laravel-pirsch](https://github.com/jeffersongoncalves/laravel-pirsch):

- Script injected at `PanelsRenderHook::HEAD_START` once the settings are complete
- Settings page with validation
- `->settingsPage(false)` for injection only
- Translations in 19 languages
