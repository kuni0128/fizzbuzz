<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Math.php';
require_once __DIR__ . '/../src/MathUtil.php';

class MathUtilTest extends TestCase
{
    public function testSaturate(): void
    {
        $mathStub = $this->createMock(Math::class);
        $mathStub->method('max')->willReturn(2);
        $mathStub->method('min')->willReturn(2);

        $mathUtil = new MathUtil($mathStub);
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
