<?php

namespace FizzBuzz\Core;

use PHPUnit\Framework\TestCase;

class NumberConverterTest extends TestCase
{
    public function testConvert()
    {
        $fizzBuzz = new NumberConverter();
        $this->assertEquals('1', $fizzBuzz->convert(1));
        $this->assertEquals('2', $fizzBuzz->convert(2));
        $this->assertEquals('Fizz', $fizzBuzz->convert(3));
        $this->assertEquals('4', $fizzBuzz->convert(4));
        $this->assertEquals('Buzz', $fizzBuzz->convert(5));
        $this->assertEquals('Fizz', $fizzBuzz->convert(6));
        $this->assertEquals('7', $fizzBuzz->convert(7));
        $this->assertEquals('8', $fizzBuzz->convert(8));
        $this->assertEquals('Fizz', $fizzBuzz->convert(9));
        $this->assertEquals('Buzz', $fizzBuzz->convert(10));
        $this->assertEquals('11', $fizzBuzz->convert(11));
        $this->assertEquals('Fizz', $fizzBuzz->convert(12));
        $this->assertEquals('13', $fizzBuzz->convert(13));
        $this->assertEquals('14', $fizzBuzz->convert(14));
        $this->assertEquals('FizzBuzz', $fizzBuzz->convert(15));
    }
}
