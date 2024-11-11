# An easy way to add custom fields to a Filament Resource

[![Latest Version on Packagist](https://img.shields.io/packagist/v/uccellolabs/filament-custom-fields.svg?style=flat-square)](https://packagist.org/packages/uccellolabs/filament-custom-fields)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/uccellolabs/filament-custom-fields/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/uccellolabs/filament-custom-fields/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/uccellolabs/filament-custom-fields/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/uccellolabs/filament-custom-fields/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/uccellolabs/filament-custom-fields.svg?style=flat-square)](https://packagist.org/packages/uccellolabs/filament-custom-fields)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require uccellolabs/filament-custom-fields
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-custom-fields-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-custom-fields-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-custom-fields-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentCustomFields = new Uccello\FilamentCustomFields();
echo $filamentCustomFields->echoPhrase('Hello, Uccello!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jonathan SARDO](https://github.com/sardoj)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
