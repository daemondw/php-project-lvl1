<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Game\play;

const EXPLANATION = 'What number is missing in the progression?';
const LENGTH_PROGRESSION = 10;

function progressionGame()
{
    $createGameData = function () {

        $beginOfProgression = rand(1, 100);
        $stepOfProgression = rand(1, 50);
        $progression = getProgression(LENGTH_PROGRESSION, $beginOfProgression, $stepOfProgression);
        $missingNumber = rand(0, count($progression) - 1);
        
        $rightAnswer = $progression[$missingNumber];
        $progression[$missingNumber] = '..';
        $question = implode(' ', $progression);
       
        return [$rightAnswer, $question];
    };

    play($createGameData, EXPLANATION);
}

function getProgression($length, $begin, $step)
{
    $result = [];
    for ($i = 0; $i < $length; $i += 1) {
        $begin += $step;
        $result[] = $begin;
    }
    return $result;
}
