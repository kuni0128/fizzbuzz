<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Math.php';
require_once __DIR__ . '/../src/MathUtil.php';

class MathUtilTest extends TestCase
{
    public function testSaturate(): void
    {
        $math = $this->createMock(Math::class);
        $math->expects($this->atLeastOnce())
            ->method('max')
            ->with($this->equalTo(2), $this->equalTo(1))
            ->willReturn(2);

        $math->expects($this->atLeastOnce())
            ->method('min')
            ->with($this->equalTo(2), $this->equalTo(3))
            ->willReturn(2);
        $mathUtil = new MathUtil($math);

        $actual = $mathUtil->saturate(2, 1, 3);
        $this->assertEquals(2, $actual);

        // // 範囲内ならそのまま
        // $this->assertEquals(2, $mathUtil->saturate(2, 1, 3));

        // // 範囲外なら上限値/下限値になる
        // $this->assertEquals(1, $mathUtil->saturate(0, 1, 3));
        // $this->assertEquals(3, $mathUtil->saturate(4, 1, 3));

        // // 下限値/上限値と同じ値は範囲内である
        // $this->assertEquals(1, $mathUtil->saturate(1, 1, 3));
        // $this->assertEquals(3, $mathUtil->saturate(3, 1, 3));
    }
}
