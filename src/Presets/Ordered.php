<?php

declare(strict_types=1);

namespace PreemStudio\PhpCsFixer\Presets;

use PreemStudio\PhpCsFixer\Contracts\Preset;

final class Ordered implements Preset
{
    public function name(): string
    {
        return 'Ordered';
    }

    public function rules(): array
    {
        return [
            'ordered_class_elements' => [
                'order' => [
                    'use_trait',
                    'case',
                    'constant_public',
                    'constant_protected',
                    'constant_private',
                    'property_public',
                    'property_protected',
                    'property_private',
                    'construct',
                    'destruct',
                    'magic',
                    'phpunit',
                    'method_public',
                    'method_protected',
                    'method_private',
                ],
                'sort_algorithm' => 'none',
            ],
            'ordered_imports' => [
                'imports_order' => [
                    'class',
                    'const',
                    'function',
                ],
                'sort_algorithm' => 'alpha',
            ],
            'ordered_interfaces' => [
                'direction' => 'ascend',
                'order' => 'alpha',
            ],
            'ordered_traits' => false,
        ];
    }

    public function targetPhpVersion(): int
    {
        return 80200;
    }
}
