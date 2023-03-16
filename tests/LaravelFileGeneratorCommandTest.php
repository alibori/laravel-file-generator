<?php

declare(strict_types=1);

use Alibori\LaravelFileGenerator\Commands\LaravelFileGeneratorCommand;
use Alibori\LaravelFileGenerator\Enums\FileTypesEnum;
use Symfony\Component\Console\Command\Command as CommandAlias;

it('cannot call command with invalid file type', function (): void {
    $this->artisan(LaravelFileGeneratorCommand::class, ['type' => 'invalid', 'name' => 'Test'])
        ->expectsOutput('Invalid type')
        ->assertExitCode(CommandAlias::FAILURE);
});

it('cannot call command without name', function (): void {
    $this->artisan(LaravelFileGeneratorCommand::class, ['type' => FileTypesEnum::service, 'name' => ''])
        ->expectsOutput('You must provide a name')
        ->assertExitCode(CommandAlias::FAILURE);
});
