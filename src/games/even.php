<?php

namespace BrainGames\Games\Even;

use function BrainGames\Game\play;

const EXPLANATION = 'Answer "yes" if number even otherwise answer "no".';

function evenGame()
{
    $createGameData = function () {
        $question = rand(0, 99);
        $rightAnswer = isEven($question) ? 'yes' : 'no';
        return [$rightAnswer, $question];
    };
    play($createGameData, EXPLANATION);
}

function isEven($num)
{
    return $num % 2 === 0;
}
