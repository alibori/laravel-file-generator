<?php

namespace Alibori\LaravelFileGenerator\Commands\Generators;

use Illuminate\Console\GeneratorCommand;

class ServiceClassGeneratorCommand extends GeneratorCommand
{
    protected $name = 'make:service';

    protected $description = 'Create a new service class';

    protected $type = 'Foo';

    protected function getStub(): string
    {
        return __DIR__ . '../..../resources/stubs/service.php.stub';
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return config('file-generator.service.namespace');
    }

    public function handle()
    {
        parent::handle();

        $this->doOtherOperations();
    }

    protected function doOtherOperations()
    {
        // Get the fully qualified class name (FQN)
        $class = $this->qualifyClass($this->getNameInput());

        // get the destination path, based on the default namespace
        $path = $this->getPath($class);

        $content = file_get_contents($path);

        // Update the file content with additional data (regular expressions)

        file_put_contents($path, $content);
    }
}
