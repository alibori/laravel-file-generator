<?php

declare(strict_types=1);

namespace Alibori\LaravelFileGenerator\Commands\Generators;

use Illuminate\Console\GeneratorCommand;

class ServiceClassGeneratorCommand extends GeneratorCommand
{
    protected $name = 'make:service';

    protected $description = 'Create a new service class';

    protected function getStub(): string
    {
        if (file_exists(base_path('stubs/laravel-file-generator/service.php.stub'))) {
            return base_path('stubs/laravel-file-generator/service.php.stub');
        }

        return __DIR__.'/stubs/service.php.stub';
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return config('file-generator.service.namespace');
    }

    public function handle(): bool
    {
        parent::handle();

        $this->doOtherOperations();

        return true;
    }

    protected function doOtherOperations()
    {
        // Get the fully qualified class name (FQN)
        $class = $this->qualifyClass($this->getNameInput());

        // get the destination path, based on the default namespace
        $path = $this->getPath($class);

        $content = file_get_contents($path);

        file_put_contents($path, $content);
    }
}
