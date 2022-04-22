<?php

namespace JamesHarley\FilamentRedirects;

use Filament\PluginServiceProvider;
use JamesHarley\FilamentRedirects\Resources\RedirectResource\RedirectResource;
use Spatie\LaravelPackageTools\Package;

class FilamentRedirectsServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-redirects';

    protected array $resources = [
        RedirectResource::class,
    ];

    public function configurePackage(Package $package): void
    {
        $this->packageConfiguring($package);

        $package
            ->name(static::$name)
            ->hasCommands($this->getCommands())
            ->hasMigration('create_redirects_table');

        $this->packageConfigured($package);
    }
}
