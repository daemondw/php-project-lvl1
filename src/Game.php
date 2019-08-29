<?php

namespace BrainGames\Game;

use function \cli\line;
use function \cli\prompt;

const MAX_TRY = 3;

function goGame($getInfo, $instr)
{
    line('Welcome to the Brain Game!');
    line($instr . PHP_EOL);

    $name = prompt('May I have your name?');
    line("Hello, ${name}!" . PHP_EOL);

    for ($i = 0; $i < MAX_TRY; $i += 1) {
        [$rightAnswer, $gues] = $getInfo();

        line("Question: {$gues}");
        $answer = prompt('Your answer');

        if ($rightAnswer == $answer) {
            line("Correct!");
        } else {
            line("'${answer}' is wrong answer ;(. Correct answer was '${rightAnswer}'.");
            line("Let's try again, ${name}!");
            exit();
        }
    }

    line("Congratulations, ${name}!");
}
