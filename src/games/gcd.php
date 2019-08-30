<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Game\goGame;

const EXPLANATION = 'Find the greatest common divisor of given numbers.';

function goGcd()
{
    $createData = function () {
        $number1 = rand(1, 100);
        $number2 = rand(1, 500);

        $gues = "$number1 $number2";

        $rightAnswer = gcd($number1, $number2);
       
        return [$rightAnswer, $gues];
    };
    goGame($createData, EXPLANATION);
}
function gcd($num1, $num2)
{
    $less = $num1 < $num2 ? $num1 : $num2;
    while ($less > 0) {
        if ($num1 % $less == 0 && $num2 % $less == 0) {
            return $less;
        }
        $less -= 1;
    }
    return $less;
}
