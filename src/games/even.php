<?php

namespace BrainGames\Games\Even;

use function BrainGames\Game\play;

const EXPLANATION = 'Answer "yes" if number even otherwise answer "no".';

function goEven()
{
    $createData = function () {
        $gues = rand(0, 99);
        $rightAnswer = isEven($gues) ? 'yes' : 'no';
        return [$rightAnswer, $gues];
    };
    play($createData, EXPLANATION);
}

function isEven($num)
{
    return $num % 2 === 0;
}
