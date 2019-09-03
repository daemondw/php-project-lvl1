<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Game\play;

const EXPLANATION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function goPrime()
{
    $createData = function () {
        $gues = rand(1, 1087);
        
        $rightAnswer = isPrime($gues) ? "yes" : "no";

        return [$rightAnswer, $gues];
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
