<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Math.php';

class MathTest extends TestCase
{
    public function testMin(): void
    {
        $math = new Math();
        $this->assertEquals(0, $math->min(0, 1));
        $this->assertEquals(0, $math->min(1, 0));
        $this->assertEquals(-1, $math->min(0, -1));
        $this->assertEquals(-1, $math->min(-1, 0));
        $this->assertEquals(0, $math->min(0, 0));
        $this->assertEquals(0, $math->min(0, PHP_INT_MAX));
        $this->assertEquals(PHP_INT_MIN, $math->min(0, PHP_INT_MIN));
    }

    public function testMax(): void
    {
        $math = new Math();

        $expectedMax = 2;
        $actualMax = $math->max(1, 2);
        $this->assertEquals($expectedMax, $actualMax);
    }
}
