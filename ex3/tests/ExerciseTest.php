<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ExerciseTest extends TestCase
{
    public function testIsBalanced(): void
    {
        $this->assertSame(true, Exercise::isBalanced(""));
        $this->assertSame(false, Exercise::isBalanced("("));
    }
}