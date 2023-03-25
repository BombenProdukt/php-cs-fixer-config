<?php

declare(strict_types=1);

namespace PreemStudio\PhpCsFixer;

use PhpCsFixer\Config;
use PhpCsFixer\ConfigInterface;
use PhpCsFixer\Finder;
use PreemStudio\PhpCsFixer\Contracts\Preset;

final class ConfigurationFactory
{
    protected static $notName = [
        // These are auto-generated files and should not be modified.
        '_ide_helper_actions.php',
        '_ide_helper_models.php',
        '_ide_helper.php',
        '.phpstorm.meta.php',
        '*.blade.php',
        // These are important files that should not be modified due to type conflicts.
        'AppServiceProvider.php',
        'Authenticate.php',
        'AuthServiceProvider.php',
        'BroadcastServiceProvider.php',
        'EncryptCookies.php',
        'EventServiceProvider.php',
        'FortifyServiceProvider.php',
        'Handler.php',
        'JetstreamServiceProvider.php',
        'Kernel.php',
        'PreventRequestsDuringMaintenance.php',
        'RedirectIfAuthenticated.php',
        'RouteServiceProvider.php',
        'TrimStrings.php',
        'TrustHosts.php',
        'TrustProxies.php',
        'ValidateSignature.php',
        'VerifyCsrfToken.php',
    ];

    protected static $exclude = [
        'bootstrap/cache',
        'build',
        'node_modules',
        'storage',
    ];

    public static function fromRules(array $rules): ConfigInterface
    {
        return (new Config())
            ->setFinder(self::finder())
            ->setRules($rules)
            ->setRiskyAllowed(true)
            ->setUsingCache(true);
    }

    public static function fromPreset(Preset $preset, array $overrideRules = []): ConfigInterface
    {
        if (\PHP_VERSION_ID < $preset->targetPhpVersion()) {
            throw new \RuntimeException(\sprintf(
                'Current PHP version "%s" is less than targeted PHP version "%s".',
                \PHP_VERSION_ID,
                $preset->targetPhpVersion(),
            ));
        }

        return (new Config($preset->name()))
            ->setFinder(self::finder())
            ->setRules(\array_merge($preset->rules(), $overrideRules))
            ->setRiskyAllowed(true)
            ->setUsingCache(true);
    }

    public static function finder(): Finder
    {
        return Finder::create()
            ->notName(self::$notName)
            ->exclude(self::$exclude)
            ->ignoreDotFiles(true)
            ->ignoreVCS(true);
    }
}
