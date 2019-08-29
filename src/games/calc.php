<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Game\goGame;

const EXPLANATION = 'What is the result of the expression?';

const COUNT_SYMBOLS = ['+', '-', '*'];

function goCalc()
{
    $createData = function () {
        $number1 = rand(0, 50);
        $number2 = rand(0, 50);
        $randSymbol = COUNT_SYMBOLS[array_rand(COUNT_SYMBOLS)];

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

    goGame($createData, EXPLANATION);
}
