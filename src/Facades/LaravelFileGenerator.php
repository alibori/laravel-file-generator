<?php

declare(strict_types=1);

namespace Alibori\LaravelFileGenerator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Alibori\LaravelFileGenerator\LaravelFileGenerator
 */
class LaravelFileGenerator extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Alibori\LaravelFileGenerator\LaravelFileGenerator::class;
    }
}
