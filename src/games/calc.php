<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Game\play;

const EXPLANATION = 'What is the result of the expression?';
const MATH_SIGNS = ['+', '-', '*'];

function calculate()
{
    $createData = function () {
        $number1 = rand(0, 50);
        $number2 = rand(0, 50);
        $randSymbol = MATH_SIGNS[array_rand(MATH_SIGNS)];

        $gues = "$number1 $randSymbol $number2";

        switch ($randSymbol) {
            case '+':
                $rightAnswer = $number1 + $number2;
                break;
            case '-':
                $rightAnswer = $number1 - $number2;
                break;
            case '*':
                $rightAnswer = $number1 * $number2;
                break;
        }
        return [$rightAnswer, $gues];
    };

    play($createData, EXPLANATION);
}
