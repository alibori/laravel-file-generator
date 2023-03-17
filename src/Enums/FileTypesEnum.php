<?php

declare(strict_types=1);

namespace Alibori\LaravelFileGenerator\Enums;

enum FileTypesEnum
{
    public const SERVICE = 'service';
    public const REPOSITORY = 'repository';
    public const ACTION = 'action';
    public const RESPONSE = 'response';
}
