<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ExerciseTest extends TestCase
{
    public function testIsPrimeNumber()
    {
        $this->assertSame(true, Exercise::isPrimeNumber(2));
        $this->assertSame(false, Exercise::isPrimeNumber(4));
    }

    public function testGetPrimeFactors()
    {
        $this->assertSame([2], Exercise::getPrimeFactors(4));
    }
}