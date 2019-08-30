<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Game\goGame;

const EXPLANATION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function goPrime()
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