<?php

declare(strict_types=1);

use Alibori\LaravelFileGenerator\Commands\LaravelFileGeneratorCommand;
use Alibori\LaravelFileGenerator\Enums\FileTypesEnum;
use Illuminate\Support\Facades\File;

it('can generate a repository class with its interface', function (): void {
    // destination path of the Foo classES
    $fooClass = app_path('Repositories/MyFooClass.php');
    $fooInterface = app_path('Repositories/MyFooClassInterface.php');

    // make sure we're starting from a clean state
    if (File::exists($fooClass)) {
        unlink($fooClass);
    }

    if (File::exists($fooInterface)) {
        unlink($fooInterface);
    }

    $this->assertFalse(File::exists($fooClass));
    $this->assertFalse(File::exists($fooInterface));

    // Run the make command
    $this->artisan(LaravelFileGeneratorCommand::class, [
        'type' => FileTypesEnum::REPOSITORY,
        'name' => 'MyFooClass',
    ]);

    // Assert a new file is created
    $this->assertTrue(File::exists($fooClass));
    $this->assertTrue(File::exists($fooInterface));
});
