<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Game\play;

const EXPLANATION = 'What is the result of the expression?';
const MATH_SIGNS = ['+', '-', '*'];

function calcGame()
{
    $createData = function () {
        $number1 = rand(0, 50);
        $number2 = rand(0, 50);
        $sign = MATH_SIGNS[rand(0, 2)];

        $question_for_player = "$number1 $sign $number2";

        switch ($sign) {
            case '+':
                $right_answer = $number1 + $number2;
                break;
            case '-':
                $right_answer = $number1 - $number2;
                break;
            case '*':
                $right_answer = $number1 * $number2;
                break;
        }
        return [$right_answer, $question_for_player];
    };

    play($createData, EXPLANATION);
}
