<?php

namespace FizzBuzz\App;

use FizzBuzz\Core\NumberConverter;

class FizzBuzzSequencePrinter
{
    public function __construct(
        protected NumberConverter $fizzBuzz,
        protected OutputInterface $output,
    ) {
    }

    public function printRange(int $begin, int $end): void
    {
        for ($i = $begin; $i <= $end; $i++) {
            $formattedText = sprintf("%d %s\n", $i, $this->fizzBuzz->convert($i));
            $this->output->write($formattedText);
        }
    }
}
