<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Game\play;

const EXPLANATION = 'Find the greatest common divisor of given numbers.';

function showGreatestCommonDevisor()
{
    $createData = function () {
        $number1 = rand(1, 100);
        $number2 = rand(1, 500);

        $gues = "$number1 $number2";

        $rightAnswer = getGreatestCommonDevisor($number1, $number2);
       
        return [$rightAnswer, $gues];
    };
    play($createData, EXPLANATION);
}
function getGreatestCommonDevisor($num1, $num2)
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
