# PHP-CS-Fixer Configuration

[![Latest Version on Packagist](https://img.shields.io/packagist/v/preemstudio/php-cs-fixer-config.svg?style=flat-square)](https://packagist.org/packages/preemstudio/php-cs-fixer-config)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/preemstudio/php-cs-fixer-config/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/preemstudio/php-cs-fixer-config/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/preemstudio/php-cs-fixer-config/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/preemstudio/php-cs-fixer-config/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/preemstudio/php-cs-fixer-config.svg?style=flat-square)](https://packagist.org/packages/preemstudio/php-cs-fixer-config)

Provides a configuration factory and multiple rule sets for friendsofphp/php-cs-fixer.

## Installation

You can install the package via composer:

```bash
composer require preemstudio/php-cs-fixer-config
```

## Usage

```php
// .php-cs-fixer.php
<?php

use PreemStudio\PhpCsFixer\ConfigurationFactory;
use PreemStudio\PhpCsFixer\Presets\Standard;

$config = ConfigurationFactory::fromPreset(new Standard());
$config->getFinder()->in(__DIR__);

return $config;
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

If you've found a bug regarding security please mail [security@preem.studio](mailto:security@preem.studio) instead of using the issue tracker.

## Credits

- [Preem Studio](https://github.com/PreemStudio)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
