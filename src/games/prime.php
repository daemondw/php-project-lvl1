<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Game\goGame;

const EXPLANATION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function goPrime()
{
    $createData = function () {
        $randNum = rand(1, 1087);

        $gues = "$randNum";
        $rightAnswer = pri($randNum) ? "yes" : "no";

        return [$rightAnswer, $gues];
    };
    goGame($createData, EXPLANATION);
}
function pri($someNum)
{
    for ($i = 2; $i <= sqrt($someNum); $i += 1) {
        if ($someNum % $i == 0) {
            return false;
        }
    }
    return true;
}
