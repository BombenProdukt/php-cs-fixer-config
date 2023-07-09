## About PHP-CS-Fixer Configuration

This project was created by, and is maintained by [Brian Faust](https://github.com/faustbrian), and is a package that provides a configuration factory and multiple presets for `friendsofphp/php-cs-fixer`. Be sure to browse through the [changelog](CHANGELOG.md), [code of conduct](.github/CODE_OF_CONDUCT.md), [contribution guidelines](.github/CONTRIBUTING.md), [license](LICENSE), and [security policy](.github/SECURITY.md).

## Installation

> **Note**
> This package requires [PHP](https://www.php.net/) 8.2 or later, and it supports [Laravel](https://laravel.com/) 10 or later.

To get the latest version, simply require the project using [Composer](https://getcomposer.org/):

```bash
$ composer require bombenprodukt/php-cs-fixer-config
```

## Usage

```php
// .php-cs-fixer.php
<?php

use BombenProdukt\PhpCsFixer\ConfigurationFactory;
use BombenProdukt\PhpCsFixer\Preset\Standard;

$header = <<<EOF
Copyright (c) 2023 BombenProdukt

For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.
EOF;

$config = ConfigurationFactory::fromPreset(new Standard($header));
$config->getFinder()->in(__DIR__);

return $config;
```
