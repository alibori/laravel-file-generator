<?php

declare(strict_types=1);

namespace Alibori\LaravelFileGenerator;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Alibori\LaravelFileGenerator\Commands\LaravelFileGeneratorCommand;

class LaravelFileGeneratorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-file-generator')
            ->hasConfigFile()
            ->hasCommand(LaravelFileGeneratorCommand::class);
    }

    public function packageRegistered(): void
    {
        $this->publishes([
            __DIR__.'/../resources/stubs/' => app_path('stubs/laravel-file-generator'),
        ], 'laravel-file-generator-stubs');
    }
}
