<?php

declare(strict_types=1);

namespace Tests\Feature;

it('should be true', static function (): void {
    expect(true)->toBeTrue();
});

it('should be false', static function (): void {
    expect(false)->toBeFalse();
});
