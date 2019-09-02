<?php

namespace BrainGames\Games\Progres;

use function BrainGames\Game\play;

const EXPLANATION = 'What number is missing in the progression?';

function goProg()
{
    $createData = function () {
        $firstArrayElement = rand(1, 100);
        $stepProgression = rand(1, 50);
        $arr = generateArray($firstArrayElement, $stepProgression);
        $randNum = rand(0, count($arr) - 1);
        
        $rightAnswer = $arr[$randNum];
        $arr[$randNum] = '..';
        $gues = implode(' ', $arr);
       
        return [$rightAnswer, $gues];
    };
    play($createData, EXPLANATION);
}
function generateArray($first, $step)
{
    $result = [];

    for ($i = 0; $i < 10; $i += 1) {
        $first += $step;
        $result[] = $first;
    }
    return $result;
}
