# PostgreSQL parser

[![Latest Version on Packagist](https://img.shields.io/packagist/v/free-id/postgresql.svg?style=flat-square)](https://packagist.org/packages/free-id/postgresql)
[![Tests](https://github.com/free-id/postgresql/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/free-id/postgresql/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/free-id/postgresql.svg?style=flat-square)](https://packagist.org/packages/free-id/postgresql)

## Installation

You can install the package via composer:

```bash
composer require free-id/postgresql
```

## Usage

```php
use FreeId\Postgresql\Parser;

$parser = new Parser();
echo $parser->find();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/free-id/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Vitaly Kuzyaev](https://github.com/vitkuz573)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.