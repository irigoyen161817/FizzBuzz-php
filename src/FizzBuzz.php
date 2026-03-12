<?php

namespace Deg540\CleanCodeKata9;

class FizzBuzz
{
    public function handle(int $number): string{
        if ($number === 3) return "Fizz";
        return $number;
    }
}