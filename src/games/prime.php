<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Game\goGame;

const EXPLANATION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function goPrime()
{
    $createData = function () {
        $gues = rand(1, 1087);
        
        $rightAnswer = getPrime($gues) ? "yes" : "no";

        return [$rightAnswer, $gues];
    };
    goGame($createData, EXPLANATION);
}
function getPrime($num)
{
    if ($gues < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i += 1) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
