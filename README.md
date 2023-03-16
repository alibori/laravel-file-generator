# Laravel File Generator Package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/alibori/laravel-file-generator.svg?style=flat-square)](https://packagist.org/packages/alibori/laravel-file-generator)
[![run-tests](https://github.com/alibori/laravel-file-generator/actions/workflows/run-tests.yml/badge.svg)](https://github.com/alibori/laravel-file-generator/actions/workflows/run-tests.yml)
[![PHPStan](https://github.com/alibori/laravel-file-generator/actions/workflows/phpstan.yml/badge.svg)](https://github.com/alibori/laravel-file-generator/actions/workflows/phpstan.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/alibori/laravel-file-generator.svg?style=flat-square)](https://packagist.org/packages/alibori/laravel-file-generator)

Package to create custom files that doesn't have default stub.

## Installation

You can install the package via composer:

```bash
composer require alibori/laravel-file-generator
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="file-generator-config"
```

This is the contents of the published config file:

```php
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
```

Optionally, you can publish the stubs using

```bash
php artisan vendor:publish --tag="file-generator-stubs"
```

## Usage

```php
php artisan laravel-file-generator:generate {type} {name}
```

### Available types

- `service`
- `repository` (This will make an interface too).

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Axel Libori Roch](https://github.com/alibori)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
