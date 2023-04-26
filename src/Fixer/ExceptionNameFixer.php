<?php

declare(strict_types=1);

namespace BombenProdukt\PhpCsFixer\Fixer;

use PhpCsFixer\AbstractFixer;
use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
use SplFileInfo;

final class ExceptionNameFixer extends AbstractFixer
{
    private const SUFFIX = 'Exception';

    public function getName(): string
    {
        return 'BombenProdukt/exception_name_fixer';
    }

    public function getDefinition(): FixerDefinitionInterface
    {
        return new FixerDefinition(
            'Exception classes should have suffix "Exception".',
            [],
        );
    }

    public function isCandidate(Tokens $tokens): bool
    {
        return $tokens->isAllTokenKindsFound([\T_CLASS, \T_EXTENDS, \T_STRING]);
    }

    public function applyFix(SplFileInfo $file, Tokens $tokens): void
    {
        foreach ($tokens as $index => $token) {
            if (!$token->isGivenKind(\T_EXTENDS)) {
                continue;
            }

            $parentClassIndex = $tokens->getNextMeaningfulToken($index);
            $parentClassToken = $tokens[$parentClassIndex];

            if (!\str_ends_with($parentClassToken->getContent(), self::SUFFIX)) {
                continue;
            }

            $classNameIndex = $tokens->getPrevMeaningfulToken($index);
            $classNameToken = $tokens[$classNameIndex]->getContent();

            if (\str_ends_with($classNameToken, self::SUFFIX)) {
                continue;
            }

            $tokens[$classNameIndex] = new Token([\T_STRING, $classNameToken.self::SUFFIX]);
        }
    }
}
