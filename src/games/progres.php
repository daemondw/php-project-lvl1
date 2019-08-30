<?php

namespace BrainGames\Games\Progres;

use function BrainGames\Game\goGame;

const EXPLANATION = 'What number is missing in the progression?';

function goProg()
{
    $createData = function () {
        $randNum = rand(0, 9);
        $arr = [5, 7, 9, 11, 13, 15, 17, 19, 21, 23,];
        $rightAnswer = $arr[$randNum];
        $arr[$randNum] = '..';
        $str = implode(' ', $arr);

        $gues = "$str";
       
        return [$rightAnswer, $gues];
    };
    goGame($createData, EXPLANATION);
}
