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

Optionally, you can publish the stubs using

```bash
php artisan vendor:publish --tag="file-generator-stubs"
```

## Usage

```php
php artisan file-generator:generate {type} {name}
```

### Available types

- `service`
- `repository` (This will make an interface too).
- `action`
- `response`

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Axel Libori Roch](https://github.com/alibori)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
