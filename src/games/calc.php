<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Game\play;

const EXPLANATION = 'What is the result of the expression?';
const MATH_SIGNS = ['+', '-', '*'];

function calcGame()
{
    $createGameData = function () {
        $number1 = rand(0, 50);
        $number2 = rand(0, 50);
        $sign = MATH_SIGNS[arra_rand(MATH_SIGNS)];

        $question = "$number1 $sign $number2";

        switch ($sign) {
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
        return [$rightAnswer, $question];
    };

    play($createGameData, EXPLANATION);
}
