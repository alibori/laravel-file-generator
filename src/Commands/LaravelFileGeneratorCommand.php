<?php

declare(strict_types=1);

namespace Alibori\LaravelFileGenerator\Commands;

use Alibori\LaravelFileGenerator\Commands\Generators\ActionClassGeneratorCommand;
use Alibori\LaravelFileGenerator\Commands\Generators\RepositoryClassGeneratorCommand;
use Alibori\LaravelFileGenerator\Commands\Generators\RepositoryInterfaceClassGeneratorCommand;
use Alibori\LaravelFileGenerator\Commands\Generators\ResponseClassGeneratorCommand;
use Alibori\LaravelFileGenerator\Commands\Generators\ServiceClassGeneratorCommand;
use Alibori\LaravelFileGenerator\Enums\FileTypesEnum;
use Illuminate\Console\Command;

class LaravelFileGeneratorCommand extends Command
{
    public $signature = 'file-generator:generate {type} {name}';

    public $description = 'Command to generate a specific file type';

    public function handle(): int
    {
        $type = $this->argument('type');
        $name = $this->argument('name');

        if ( ! $type) {
            $this->error('You must provide a type');
            return self::FAILURE;
        }

        if ( ! $name) {
            $this->error('You must provide a name');
            return self::FAILURE;
        }

        switch ($type) {
            case FileTypesEnum::SERVICE:
                $this->call(ServiceClassGeneratorCommand::class, ['name' => $name]);
                break;
            case FileTypesEnum::REPOSITORY:
                $this->call(RepositoryInterfaceClassGeneratorCommand::class, ['name' => $name.'Interface']);
                $this->call(RepositoryClassGeneratorCommand::class, ['name' => $name]);
                break;
            case FileTypesEnum::ACTION:
                $this->call(ActionClassGeneratorCommand::class, ['name' => $name]);
                break;
            case FileTypesEnum::RESPONSE:
                $this->call(ResponseClassGeneratorCommand::class, ['name' => $name]);
                break;
            default:
                $this->error('Invalid type');
                return self::FAILURE;
        }

        $this->comment('Your file has been generated successfully!');

        return self::SUCCESS;
    }
}
