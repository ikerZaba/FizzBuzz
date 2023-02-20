<?php

namespace Deg540\PHPTestingBoilerplate;

class FizzBuzz
{

    public function convert(int $numberToConvert): string
    {
        if ($numberToConvert%3==0 && $numberToConvert%5==0){
            return 'fizzbuzz';
        }
        elseif ($numberToConvert%3==0){
            return 'fizz';
        }
        elseif ($numberToConvert%5==0){
            return 'buzz';
        }
        return $numberToConvert;

    }
}