<?php

namespace BrainGames\Games\Progres;

use function BrainGames\Game\goGame;

const EXPLANATION = 'What number is missing in the progression?';

function goProg()
{
    $createData = function () {
        $randNum = rand(0, count($arr) - 1);
        $firstArrayElement = rand(1, 100);
        $stepProgression = rand(1, 50);
        $arr = generateArray();

        $rightAnswer = $arr[$randNum];
        $arr[$randNum] = '..';
        $gues = implode(' ', $arr);

        // $gues = "$str";
       
        return [$rightAnswer, $gues];
    };
    goGame($createData, EXPLANATION);
}
function generateArray($firstArrayElement, $stepProgression)
{
    $result = [$firstArrayElement];

    for ($i = 0; $i < 10; $i += 1) {
        $firstArrayElement += $stepProgression;
        $result[] = $firstArrayElement;
    }
    return $result;
}
