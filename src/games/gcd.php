<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Game\play;

const EXPLANATION = 'Find the greatest common divisor of given numbers.';

function gcdGame()
{
    $createData = function () {
        $number1 = rand(1, 100);
        $number2 = rand(1, 500);

        $question_for_player = "$number1 $number2";

        $right_answer = getGcdGame($number1, $number2);
       
        return [$right_answer, $question_for_player];
    };
    play($createData, EXPLANATION);
}
function getGcdGame($num1, $num2)
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
