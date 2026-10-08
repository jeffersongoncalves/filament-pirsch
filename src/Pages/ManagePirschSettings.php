<?php

namespace JeffersonGoncalves\Filament\Pirsch\Pages;

use Filament\Forms\Components\TextInput;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use JeffersonGoncalves\Pirsch\Settings\PirschSettings;

class ManagePirschSettings extends SettingsPage
{
    protected static string $settings = PirschSettings::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-chart-bar';

    public static function getNavigationLabel(): string
    {
        return __('filament-pirsch::pages.navigation_label');
    }

    public static function getNavigationGroup(): string|\UnitEnum|null
    {
        return __('filament-pirsch::pages.navigation_group');
    }

    public function getTitle(): string
    {
        return __('filament-pirsch::pages.title');
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->columns(null)
            ->schema([
                Section::make(__('filament-pirsch::pages.sections.pirsch.heading'))
                    ->description(__('filament-pirsch::pages.sections.pirsch.description'))
                    ->schema([
                        TextInput::make('identification_code')
                            ->label(__('filament-pirsch::pages.fields.identification_code.label'))
                            ->helperText(__('filament-pirsch::pages.fields.identification_code.helper'))
                            ->placeholder('AbCdEf0123456789AbCdEf0123456789')
                            ->regex('/^[a-z0-9]+$/i')
                            ->maxLength(64)
                            ->nullable(),
                    ]),
            ]);
    }
}
