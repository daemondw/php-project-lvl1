<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Game\play;

const EXPLANATION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function primeGame()
{
    $createData = function () {
        $question_for_player = rand(1, 1087);
        
        $right_answer = isPrime($question_for_player) ? "yes" : "no";

        return [$right_answer, $question_for_player];
    };
    play($createData, EXPLANATION);
}

function isPrime($num)
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i += 1) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
