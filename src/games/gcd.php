<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Game\goGame;

const EXPLANATION = 'Find the greatest common divisor of given numbers.';

function goGcd()
{
    $createData = function () {
        $number1 = rand(0, 100);
        $number2 = rand(0, 100);

        $gues = "$number1 $number2";

        $rightAnswer = gcd($number1, $number2);
       
        return [$rightAnswer, $gues];
    };
    goGame($createData, EXPLANATION);
}

function gcd($num1, $num2)
{
    $lessNum = $num1 < $num2 ? $num1 : $num2;
    $result = 0;

    while ($num1 % $lessNum == 0 && $num2 % $lessNum == 0) {
        if ($num1 % $lessNum == 0 && $num2 % $lessNum == 0) {
            $result = $lessNum;
        }
        $lessNum -= 1;
    }
    return ($result);
}
