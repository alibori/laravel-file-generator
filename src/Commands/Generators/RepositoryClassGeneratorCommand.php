<?php

declare(strict_types=1);

namespace Alibori\LaravelFileGenerator\Commands\Generators;

use Illuminate\Console\GeneratorCommand;

class RepositoryClassGeneratorCommand extends GeneratorCommand
{
    protected $name = 'make:repository-class';

    protected $description = 'Create a new repository class';

    protected function getStub(): string
    {
        if (file_exists(base_path('stubs/laravel-file-generator/repository.php.stub'))) {
            return base_path('stubs/laravel-file-generator/repository.php.stub');
        }

        return __DIR__.'/stubs/repository.php.stub';
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return config('file-generator.repository.namespace');
    }

    public function handle(): bool
    {
        parent::handle();

        $this->generateRepository();

        return true;
    }

    protected function generateRepository(): void
    {
        // Get the fully qualified class name (FQN)
        $class = $this->qualifyClass($this->getNameInput());

        // get the destination path, based on the default namespace
        $path = $this->getPath($class);

        $content = file_get_contents($path);

        file_put_contents($path, $content);
    }
}
