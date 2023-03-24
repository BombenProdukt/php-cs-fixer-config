<?php

declare(strict_types=1);

namespace PreemStudio\PhpCsFixer\Presets;

use PreemStudio\PhpCsFixer\Contracts\Preset;

final class Doctrine implements Preset
{
    /**
     * A list of tags that should be ignored by fixers related to Doctrine.
     *
     * @see https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/v3.1.0/doc/rules/doctrine_annotation/doctrine_annotation_array_assignment.rst
     * @see https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/v3.1.0/doc/rules/doctrine_annotation/doctrine_annotation_braces.rst
     * @see https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/v3.1.0/doc/rules/doctrine_annotation/doctrine_annotation_indentation.rst
     * @see https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/v3.1.0/doc/rules/doctrine_annotation/doctrine_annotation_spaces.rst
     */
    protected const DOCTRINE_IGNORED_TAGS = [
        'abstract',
        'access',
        'after',
        'afterClass',
        'api',
        'author',
        'backupGlobals',
        'backupStaticAttributes',
        'before',
        'beforeClass',
        'category',
        'code',
        'codeCoverageIgnore',
        'codeCoverageIgnoreEnd',
        'codeCoverageIgnoreStart',
        'copyright',
        'covers',
        'coversDefaultClass',
        'coversNothing',
        'dataProvider',
        'depends',
        'deprec',
        'deprecated',
        'encode',
        'enduml',
        'example',
        'exception',
        'expectedException',
        'expectedExceptionCode',
        'expectedExceptionMessage',
        'expectedExceptionMessageRegExp',
        'filesource',
        'final',
        'fix',
        'FIXME',
        'fixme',
        'global',
        'group',
        'ignore',
        'ingroup',
        'inheritdoc',
        'inheritDoc',
        'internal',
        'large',
        'license',
        'link',
        'magic',
        'medium',
        'method',
        'name',
        'noinspection',
        'override',
        'package',
        'package_version',
        'param',
        'preserveGlobalState',
        'private',
        'property',
        'property-read',
        'property-write',
        'requires',
        'return',
        'runInSeparateProcess',
        'runTestsInSeparateProcesses',
        'see',
        'since',
        'small',
        'source',
        'startuml',
        'static',
        'staticvar',
        'staticVar',
        'subpackage',
        'SuppressWarnings',
        'template',
        'test',
        'testdox',
        'throw',
        'throws',
        'ticket',
        'toc',
        'todo',
        'TODO',
        'tutorial',
        'usedBy',
        'uses',
        'uses',
        'var',
        'version',
    ];

    public function name(): string
    {
        return 'Doctrine';
    }

    public function rules(): array
    {
        return [
            'doctrine_annotation_array_assignment' => [
                'ignored_tags' => self::DOCTRINE_IGNORED_TAGS,
                'operator' => ':',
            ],
            'doctrine_annotation_braces' => [
                'ignored_tags' => self::DOCTRINE_IGNORED_TAGS,
                'syntax' => 'without_braces',
            ],
            'doctrine_annotation_indentation' => [
                'ignored_tags' => self::DOCTRINE_IGNORED_TAGS,
                'indent_mixed_lines' => false,
            ],
            'doctrine_annotation_spaces' => [
                'after_argument_assignments' => false,
                'after_array_assignments_colon' => true,
                'after_array_assignments_equals' => false,
                'around_commas' => true,
                'around_parentheses' => true,
                'before_argument_assignments' => false,
                'before_array_assignments_colon' => false,
                'before_array_assignments_equals' => false,
                'ignored_tags' => self::DOCTRINE_IGNORED_TAGS,
            ],
        ];
    }

    public function targetPhpVersion(): int
    {
        return 80200;
    }
}
