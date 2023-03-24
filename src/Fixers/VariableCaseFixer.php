<?php

declare(strict_types=1);

namespace PreemStudio\PhpCsFixer\Fixers;

use Illuminate\Support\Str;
use PhpCsFixer\AbstractFixer;
use PhpCsFixer\Fixer\ConfigurableFixerInterface;
use PhpCsFixer\FixerConfiguration\FixerConfigurationResolver;
use PhpCsFixer\FixerConfiguration\FixerConfigurationResolverInterface;
use PhpCsFixer\FixerConfiguration\FixerOptionBuilder;
use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
use SplFileInfo;

final class VariableCaseFixer extends AbstractFixer implements ConfigurableFixerInterface
{
    public function getName(): string
    {
        return 'PreemStudio/variable_case';
    }

    public function isCandidate(Tokens $tokens): bool
    {
        return $tokens->isAnyTokenKindsFound([\T_VARIABLE, \T_STRING_VARNAME]);
    }

    public function applyFix(SplFileInfo $file, Tokens $tokens): void
    {
        $caseMethod = $this->configuration['case'];

        foreach ($tokens as $index => $token) {
            if ((\T_VARIABLE === $token->getId()) || (\T_STRING_VARNAME === $token->getId())) {
                $tokens[$index] = new Token([$token->getId(), Str::$caseMethod($token->getContent())]);
            }
        }
    }

    public function getDefinition(): FixerDefinitionInterface
    {
        return new FixerDefinition('Enforce specific casing for variable names, following configuration.', []);
    }

    protected function createConfigurationDefinition(): FixerConfigurationResolverInterface
    {
        return new FixerConfigurationResolver([
            (new FixerOptionBuilder('case', 'Apply various types of string casing to variables.'))
                ->setAllowedValues(['camel', 'kebab', 'snake', 'studly', 'title'])
                ->setDefault('camel')
                ->getOption(),
        ]);
    }
}
