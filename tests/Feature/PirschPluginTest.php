<?php

use Filament\Facades\Filament;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Foundation\Auth\User;
use JeffersonGoncalves\Filament\Pirsch\Pages\ManagePirschSettings;
use JeffersonGoncalves\Filament\Pirsch\PirschPlugin;
use JeffersonGoncalves\Pirsch\Settings\PirschSettings;
use Livewire\Livewire;

beforeEach(function () {
    Filament::setCurrentPanel(Filament::getPanel('test'));
    $this->actingAs((new User)->forceFill(['id' => 1, 'name' => 'Admin', 'email' => 'admin@example.com']));
});

it('registers the settings page on the panel', function () {
    expect(Filament::getPanel('test')->getPages())->toContain(ManagePirschSettings::class)
        ->and(PirschPlugin::make()->getId())->toBe('filament-pirsch');
});

it('uses translated labels', function () {
    expect(ManagePirschSettings::getNavigationLabel())->toBe('Pirsch');

    app()->setLocale('pt_BR');

    expect((new ManagePirschSettings)->getTitle())->toBe('Configurações do Pirsch');
});

it('saves the settings from the page', function () {
    Livewire::test(ManagePirschSettings::class)
        ->fillForm(['identification_code' => 'AbCdEf0123456789AbCdEf0123456789'])
        ->call('save')
        ->assertHasNoFormErrors();

    expect(app(PirschSettings::class)->refresh()->isConfigured())->toBeTrue()
        ->and(app(PirschSettings::class)->refresh()->identification_code)->toBe('AbCdEf0123456789AbCdEf0123456789');
});

it('rejects an invalid value', function () {
    Livewire::test(ManagePirschSettings::class)
        ->fillForm(['identification_code' => '"><script>alert(1)</script>'])
        ->call('save')
        ->assertHasFormErrors(['identification_code']);
});

it('injects the Pirsch script into the panel once configured', function () {
    $settings = app(PirschSettings::class);
    $settings->identification_code = 'AbCdEf0123456789AbCdEf0123456789';
    $settings->save();

    expect((string) FilamentView::renderHook(PanelsRenderHook::HEAD_START))->toContain('api.pirsch.io');
});
