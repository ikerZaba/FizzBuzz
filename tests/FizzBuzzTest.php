<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function convierteAFizzSiEsMultiplo3()
    {
        $fizzbuzz = new FizzBuzz();

        $convertedNumber = $fizzbuzz->convert(3);

        $this->assertEquals('fizz', $convertedNumber);
    }

    /**
     * @test
     */
    public function convierteABuzzSiEsMultiplo5()
    {
        $fizzbuzz = new FizzBuzz();

        $convertedNumber = $fizzbuzz->convert(5);

        $this->assertEquals('buzz', $convertedNumber);
    }

    /**
     * @test
     */
    public function convierteAFizzBuzzSiEsMultiplo5Y3()
    {
        $fizzbuzz = new FizzBuzz();

        $convertedNumber = $fizzbuzz->convert(15);

        $this->assertEquals('fizzbuzz', $convertedNumber);
    }

    /**
     * @test
     */
    public function NoConvierteSiNoEsMultiplo5Ni3()
    {
        $fizzbuzz = new FizzBuzz();

        $convertedNumber = $fizzbuzz->convert(13);

        $this->assertEquals('13', $convertedNumber);
    }
}