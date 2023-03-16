<?php

declare(strict_types=1);

namespace Alibori\LaravelFileGenerator\Commands;

use Alibori\LaravelFileGenerator\Enums\FileTypesEnum;
use Illuminate\Console\Command;

class LaravelFileGeneratorCommand extends Command
{
    public $signature = 'laravel-file-generator:generate {type} {name}';

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
            case FileTypesEnum::service:
                $this->call('make:service', ['name' => $name]);
                break;
            default:
                $this->error('Invalid type');
                return self::FAILURE;
        }

        $this->comment('All done');

        return self::SUCCESS;
    }
}
