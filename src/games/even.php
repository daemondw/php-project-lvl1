<?php

namespace BrainGames\Games\Even;

use function BrainGames\Game\goGame;

const EXPLANATION = 'Answer "yes" if number even otherwise answer "no".';

function goEven()
{
    $createData = function () {
        $gues = rand(0, 99);
        $rightAnswer = even($gues) ? 'yes' : 'no';
        return [$rightAnswer, $gues];
    };
    goGame($createData, EXPLANATION);
}
function even($num)
{
    return $num % 2 === 0;
}
