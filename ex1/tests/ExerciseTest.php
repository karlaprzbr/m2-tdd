<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ExerciseTest extends TestCase
{
    public function testIsLeap(): void
    {
        $this->assertSame(true, Exercise::isLeap(1600));
        $this->assertSame(false, Exercise::isLeap(2021));
    }
}