<?php

declare(strict_types=1);

namespace Alibori\LaravelFileGenerator;

use Alibori\LaravelFileGenerator\Commands\Generators\ServiceClassGeneratorCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Alibori\LaravelFileGenerator\Commands\LaravelFileGeneratorCommand;

class LaravelFileGeneratorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-file-generator')
            ->hasConfigFile('file-generator')
            ->hasCommand(LaravelFileGeneratorCommand::class)
            ->hasCommands(ServiceClassGeneratorCommand::class);
    }

    public function packageRegistered(): void
    {
        $this->publishes([
            __DIR__.'/../resources/stubs/' => app_path('stubs/laravel-file-generator'),
        ], 'laravel-file-generator-stubs');
    }
}
