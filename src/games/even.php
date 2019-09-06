<?php

namespace BrainGames\Games\Even;

use function BrainGames\Game\play;

const EXPLANATION = 'Answer "yes" if number even otherwise answer "no".';

function evenGame()
{
    $createData = function () {
        $question_for_player = rand(0, 99);
        $right_answer = isEven($question_for_player) ? 'yes' : 'no';
        return [$right_answer, $question_for_player];
    };
    play($createData, EXPLANATION);
}

function isEven($num)
{
    return $num % 2 === 0;
}
