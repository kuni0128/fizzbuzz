<?php

namespace FizzBuzz\Core;

use PHPUnit\Framework\TestCase;

class NumberConverterTest extends TestCase
{
    public function testConvertWithEmptyRule()
    {
        $fizzBuzz = new NumberConverter([]);
        $this->assertEquals('', $fizzBuzz->convert(1));
    }

    public function testConvertWithSingleRule()
    {
        $fizzBuzz = new NumberConverter([$this->createMockRule(expectedNumber: 1, replacement: 'Replaced')]);
        $this->assertEquals('Replaced', $fizzBuzz->convert(1));
    }

    public function testConvertWithFizzBuzzRules()
    {
        $fizzBuzz = new NumberConverter([
            $this->createMockRule(expectedNumber: 1, replacement: 'Fizz'),
            $this->createMockRule(expectedNumber: 1, replacement: 'Buzz')
        ]);
        $this->assertEquals('FizzBuzz', $fizzBuzz->convert(1));
    }

    private function createMockRule(
        int $expectedNumber,
        string $replacement
    ) {
        $rule = $this->createMock(ReplaceRuleInterface::class);
        $rule->expects($this->atLeastOnce())
            ->method('replace')
            ->with($expectedNumber)
            ->willReturn($replacement);
        return $rule;
    }
}
