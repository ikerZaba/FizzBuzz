<?php
namespace Deg540\PHPTestingBoilerplate\Main;

use Deg540\PHPTestingBoilerplate\FizzBuzz;

$fizzbuzz = new FizzBuzz();

for($int=1;$int<=100;$int++){
    echo $fizzbuzz->convert($int);
}