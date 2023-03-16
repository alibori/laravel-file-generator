# Laravel File Generator Package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/alibori/laravel-file-generator.svg?style=flat-square)](https://packagist.org/packages/alibori/laravel-file-generator)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/alibori/laravel-file-generator/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/alibori/laravel-file-generator/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/alibori/laravel-file-generator/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/alibori/laravel-file-generator/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/alibori/laravel-file-generator.svg?style=flat-square)](https://packagist.org/packages/alibori/laravel-file-generator)

Package to create custom files that doesn't have default stub.

## Installation

You can install the package via composer:

```bash
composer require alibori/laravel-file-generator
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-file-generator-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the stubs using

```bash
php artisan vendor:publish --tag="laravel-file-generator-stubs"
```

## Usage

```php
$laravelFileGenerator = new Alibori\LaravelFileGenerator();
echo $laravelFileGenerator->echoPhrase('Hello, Alibori!');
```

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
