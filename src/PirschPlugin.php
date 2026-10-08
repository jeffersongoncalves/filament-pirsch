<?php

namespace JeffersonGoncalves\Filament\Pirsch;

use JeffersonGoncalves\Filament\Pirsch\Pages\ManagePirschSettings;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin;

class PirschPlugin extends AbstractAnalyticsPlugin
{
    public function getId(): string
    {
        return 'filament-pirsch';
    }

    protected function getSettingsPageClass(): ?string
    {
        return ManagePirschSettings::class;
    }
}
