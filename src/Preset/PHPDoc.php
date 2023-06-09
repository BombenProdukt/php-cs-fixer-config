<?php

declare(strict_types=1);

namespace BombenProdukt\PhpCsFixer\Preset;

final class PHPDoc implements PresetInterface
{
    public function name(): string
    {
        return 'PHPDoc';
    }

    public function rules(): array
    {
        return [
            'phpdoc_add_missing_param_annotation' => [
                'only_untyped' => true,
            ],
            'phpdoc_align' => [
                'align' => 'vertical',
                'tags' => [
                    'method',
                    'param',
                    'property',
                    'property-read',
                    'property-write',
                    'return',
                    'throws',
                    'type',
                    'var',
                ],
            ],
            'phpdoc_annotation_without_dot' => true,
            'phpdoc_indent' => true,
            'phpdoc_inline_tag_normalizer' => true,
            'phpdoc_line_span' => [
                'const' => 'multi',
                'method' => 'multi',
                'property' => 'multi',
            ],
            'phpdoc_no_access' => true,
            'phpdoc_no_alias_tag' => [
                'replacements' => [
                    'link' => 'see',
                    'property-read' => 'property',
                    'property-write' => 'property',
                    'type' => 'var',
                ],
            ],
            'phpdoc_no_empty_return' => true,
            'phpdoc_no_package' => true,
            'phpdoc_no_useless_inheritdoc' => true,
            'phpdoc_order' => [
                'order' => [
                    'deprecated',
                    'internal',
                    'covers',
                    'uses',
                    'dataProvider',
                    'param',
                    'throws',
                    'return',
                ],
            ],
            'phpdoc_order_by_value' => [
                'annotations' => [
                    'author',
                    'covers',
                    'coversNothing',
                    'dataProvider',
                    'depends',
                    'group',
                    'internal',
                    'method',
                    'mixin',
                    'property',
                    'property-read',
                    'property-write',
                    'requires',
                    'throws',
                    'uses',
                ],
            ],
            'phpdoc_return_self_reference' => [
                'replacements' => [
                    '$self' => 'self',
                    '$static' => 'static',
                    '@self' => 'self',
                    '@static' => 'static',
                    '@this' => '$this',
                    'this' => '$this',
                ],
            ],
            'phpdoc_scalar' => true,
            'phpdoc_separation' => [
                'groups' => [
                    ['deprecated', 'link', 'see', 'since'],
                    ['author', 'copyright', 'license'],
                    ['category', 'package', 'subpackage'],
                    ['property', 'property-read', 'property-write'],
                    ['param', 'return'],
                ],
                'skip_unlisted_annotations' => false,
            ],
            'phpdoc_single_line_var_spacing' => true,
            'phpdoc_summary' => false,
            'phpdoc_tag_casing' => [
                'tags' => [
                    'inheritDoc',
                ],
            ],
            'phpdoc_tag_type' => [
                'tags' => [
                    'inheritdoc' => 'inline',
                ],
            ],
            'phpdoc_to_comment' => false,
            'phpdoc_to_param_type' => false,
            // Causes issues with Laravel because it doesn't support scalar types for everything.
            // 'phpdoc_to_property_type' => [
            //     'scalar_types' => true,
            // ],
            'phpdoc_to_return_type' => false,
            'phpdoc_trim' => true,
            'phpdoc_trim_consecutive_blank_line_separation' => true,
            'phpdoc_types' => [
                'groups' => [
                    'alias',
                    'meta',
                    'simple',
                ],
            ],
            'phpdoc_types_order' => [
                'null_adjustment' => 'always_first',
                'sort_algorithm' => 'alpha',
            ],
            'phpdoc_var_annotation_correct_order' => true,
            'phpdoc_var_without_name' => true,
        ];
    }

    public function targetPhpVersion(): int
    {
        return 80200;
    }
}
