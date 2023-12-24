<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Math.php';

class MathTest extends TestCase
{
    public function testMinMax(): void
    {
        $math = new Math();

        $expectedMin = 1;
        $actualMin = $math->min(1, 2);
        $this->assertEquals($expectedMin, $actualMin);

        $expectedMax = 2;
        $actualMax = $math->max(1, 2);
        $this->assertEquals($expectedMax, $actualMax);
    }
}
