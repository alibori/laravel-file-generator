<?php

declare(strict_types=1);

namespace Alibori\LaravelFileGenerator\Commands\Generators;

use Illuminate\Console\GeneratorCommand;

class ResponseClassGeneratorCommand extends GeneratorCommand
{
    protected $name = 'make:response';

    protected $description = 'Create a new response class';

    protected function getStub(): string
    {
        if (file_exists(base_path('stubs/laravel-file-generator/response.php.stub'))) {
            return base_path('stubs/laravel-file-generator/response.php.stub');
        }

        return __DIR__.'/stubs/response.php.stub';
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return config('file-generator.response.namespace');
    }

    public function handle(): bool
    {
        parent::handle();

        $this->generateResponse();

        return true;
    }

    protected function generateResponse(): void
    {
        // Get the fully qualified class name (FQN)
        $class = $this->qualifyClass($this->getNameInput());

        // get the destination path, based on the default namespace
        $path = $this->getPath($class);

        $content = file_get_contents($path);

        file_put_contents($path, $content);
    }
}
