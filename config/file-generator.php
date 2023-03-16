<?php

declare(strict_types=1);

// config for Alibori/LaravelFileGenerator
return [
    /**
     * Part that contains the info for the Service classes
     */
    'service' => [
        /**
         * The path where the Service classes will be created
         */
        'path' => app_path('Services'),

        /**
         * The namespace of the Service classes
         */
        'namespace' => 'App\Services',
    ],
];
