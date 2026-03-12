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
    public function givenOneNumberReturnsSameNumber(): void{
        $fizzBuzz = new FizzBuzz();

        $fizzBuzzResult = $fizzBuzz->handle(1);

        $this->assertEquals("1", $fizzBuzzResult);
    }

    /**
     * @test
     */
    public function givenNumberIsThreeReturnsFizz(): void{
        $fizzBuzz = new FizzBuzz();

        $fizzBuzzResult = $fizzBuzz->handle(3);

        $this->assertEquals("Fizz", $fizzBuzzResult);
    }

    /**
     * @test
     */
    public function givenNumberIsSixReturnsFizz(): void{
        $fizzBuzz = new FizzBuzz();

        $fizzBuzzResult = $fizzBuzz->handle(6);

        $this->assertEquals("Fizz", $fizzBuzzResult);
    }
}