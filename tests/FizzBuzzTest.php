<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function devFizzSiEsMultiplo3()
    {
        $fizzbuzz = new FizzBuzz();
        $convertedNumber = $fizzbuzz->convert(3);

        $this->assertEquals('fizz', $convertedNumber);
    }
}