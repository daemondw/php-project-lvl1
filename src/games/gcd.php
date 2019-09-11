<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Game\play;

const EXPLANATION = 'Find the greatest common divisor of given numbers.';

function gcdGame()
{
    $createGameData = function () {
        $number1 = rand(1, 100);
        $number2 = rand(1, 500);

        $question = "$number1 $number2";

        $rightAnswer = getGcd($number1, $number2);
       
        return [$rightAnswer, $question];
    };
    play($createGameData, EXPLANATION);
}
function getGcd($num1, $num2)
{
    $min = $num1 < $num2 ? $num1 : $num2;
    while ($min > 0) {
        if ($num1 % $min == 0 && $num2 % $min == 0) {
            return $min;
        }
        $min -= 1;
    }
    return $min;
}
