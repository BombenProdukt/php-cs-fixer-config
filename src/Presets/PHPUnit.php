<?php

declare(strict_types=1);

namespace PreemStudio\PhpCsFixer\Presets;

use PreemStudio\PhpCsFixer\Contracts\Preset;

final class PHPUnit implements Preset
{
    public function name(): string
    {
        return 'PHPUnit';
    }

    public function rules(): array
    {
        return [
            'php_unit_data_provider_static' => true,
            'php_unit_dedicate_assert' => [
                'target' => 'newest',
            ],
            'php_unit_dedicate_assert_internal_type' => [
                'target' => 'newest',
            ],
            'php_unit_expectation' => [
                'target' => 'newest',
            ],
            'php_unit_fqcn_annotation' => true,
            'php_unit_internal_class' => [
                'types' => [
                    'abstract',
                    'final',
                    'normal',
                ],
            ],
            'php_unit_method_casing' => [
                'case' => 'snake_case',
            ],
            'php_unit_mock' => [
                'target' => 'newest',
            ],
            'php_unit_mock_short_will_return' => true,
            'php_unit_namespaced' => [
                'target' => 'newest',
            ],
            'php_unit_no_expectation_annotation' => [
                'target' => 'newest',
                'use_class_const' => true,
            ],
            'php_unit_set_up_tear_down_visibility' => true,
            'php_unit_size_class' => false,
            'php_unit_strict' => false,
            'php_unit_test_annotation' => [
                'style' => 'prefix',
            ],
            'php_unit_test_case_static_method_calls' => [
                'call_type' => 'self',
                'methods' => [],
            ],
            'php_unit_test_class_requires_covers' => true,
        ];
    }

    public function targetPhpVersion(): int
    {
        return 80200;
    }
}
