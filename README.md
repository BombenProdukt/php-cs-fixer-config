<p align="center">
    <a href="https://preem.studio" target="_blank">
        <img src="https://raw.githubusercontent.com/PreemStudio/assets/main/logo-text.svg" width="400" alt="Preem Studio Logo" />
    </a>
</p>

<p align="center">
    <a href="https://github.com/PreemStudio/php-cs-fixer-config/actions">
        <img src="https://badge.sh/github/check-runs/PreemStudio/php-cs-fixer-config" alt="Checks" />
    </a>
    <a href="https://packagist.org/packages/preemstudio/php-cs-fixer-config">
        <img src="https://badge.sh/packagist/downloads/PreemStudio/php-cs-fixer-config" alt="Downloads" />
    </a>
    <a href="https://packagist.org/packages/preemstudio/php-cs-fixer-config">
        <img src="https://badge.sh/packagist/version/PreemStudio/php-cs-fixer-config" alt="Version" />
    </a>
    <a href="https://packagist.org/packages/preemstudio/php-cs-fixer-config">
        <img src="https://badge.sh/packagist/license/PreemStudio/php-cs-fixer-config" alt="License" />
    </a>
</p>

## About PHP-CS-Fixer Configuration

This project was created by, and is maintained by [Preem Studio](https://github.com/PreemStudio), and is a package that provides a configuration factory and multiple presets for `friendsofphp/php-cs-fixer`. Be sure to browse through the [changelog](CHANGELOG.md), [code of conduct](.github/CODE_OF_CONDUCT.md), [contribution guidelines](.github/CONTRIBUTING.md), [license](LICENSE), and [security policy](.github/SECURITY.md).

## Installation

> **Note**
> This package requires [PHP](https://www.php.net/) 8.2 or later, and it supports [Laravel](https://laravel.com/) 10 or later.

To get the latest version, simply require the project using [Composer](https://getcomposer.org/):

```bash
$ composer require preemstudio/php-cs-fixer-config
```

## Usage

```php
// .php-cs-fixer.php
<?php

use PreemStudio\PhpCsFixer\ConfigurationFactory;
use PreemStudio\PhpCsFixer\Presets\Standard;

$header = <<<EOF
Copyright (c) 2023 Preem Studio

For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.
EOF;

$config = ConfigurationFactory::fromPreset(new Standard($header));
$config->getFinder()->in(__DIR__);

return $config;
```
