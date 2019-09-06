<?php

namespace BrainGames\Games\Progres;

use function BrainGames\Game\play;

const EXPLANATION = 'What number is missing in the progression?';

function progressionGame()
{
    $createData = function () {
        $first_array_alement = rand(1, 100);
        $step_progression = rand(1, 50);
        $arr = generateProgression($first_array_alement, $step_progression);
        $rand_number = rand(0, count($arr) - 1);
        
        $right_answer = $arr[$rand_number];
        $arr[$rand_number] = '..';
        $question_for_player = implode(' ', $arr);
       
        return [$right_answer, $question_for_player];
    };

    play($createData, EXPLANATION);
}

function generateProgression($first, $step)
{
    $result = [];

    for ($i = 0; $i < 10; $i += 1) {
        $first += $step;
        $result[] = $first;
    }
    return $result;
}
