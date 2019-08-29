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

        if ($randSymbol == '+') {
            $rightAnswer = $number1 + $number2;
        } elseif ($randSymbol == '-') {
            $rightAnswer = $number1 - $number2;
        } else ($randSymbol == '*') {
            $rightAnswer = $number1 * $number2;
        }

        return [$rightAnswer, $gues];
    };
    goGame($createData, EXPLANATION);
}
