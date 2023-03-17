<?php

declare(strict_types=1);

namespace Alibori\LaravelFileGenerator\Commands\Generators;

use Illuminate\Console\GeneratorCommand;

class ActionClassGeneratorCommand extends GeneratorCommand
{
    protected $name = 'make:action';

    protected $description = 'Create a new action class';

    protected function getStub(): string
    {
        if (file_exists(base_path('stubs/laravel-file-generator/action.php.stub'))) {
            return base_path('stubs/laravel-file-generator/action.php.stub');
        }

        return __DIR__.'/stubs/action.php.stub';
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return config('file-generator.action.namespace');
    }

    public function handle(): bool
    {
        parent::handle();

        $this->generateAction();

        return true;
    }

    protected function generateAction(): void
    {
        // Get the fully qualified class name (FQN)
        $class = $this->qualifyClass($this->getNameInput());

        // get the destination path, based on the default namespace
        $path = $this->getPath($class);

        $content = file_get_contents($path);

        file_put_contents($path, $content);
    }
}
