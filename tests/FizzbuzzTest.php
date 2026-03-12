<?php

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\FizzBuzz;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function givenOneNumberNotSatisfyingFizzOrFuzzReturnsSameNumber(): void{
        $fizzBuzz = new FizzBuzz();

        $fizzBuzzResult = $fizzBuzz->handle(1);

        $this->assertEquals("1", $fizzBuzzResult);
    }

    /**
     * @test
     */
    public function givenNumberDivisibleByThreeReturnsFizz(): void{
        $fizzBuzz = new FizzBuzz();

        $fizzBuzzResult = $fizzBuzz->handle(3);

        $this->assertEquals("Fizz", $fizzBuzzResult);
    }
}