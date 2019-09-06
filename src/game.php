<?php

namespace BrainGames\Game;

use function \cli\line;
use function \cli\prompt;

const ROUNDS_COUNT = 3;

function play($getInfo, $instr)
{
    line('Welcome to the Brain Game!');
    line($instr . PHP_EOL);

    $name = prompt('May I have your name?');
    line("Hello, ${name}!" . PHP_EOL);

    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        [$right_answer, $question_for_player] = $getInfo();

        line("Question: {$question_for_player}");
        $answer = prompt('Your answer');

        if ($right_answer == $answer) {
            line("Correct!");
        } else {
            line("'${answer}' is wrong answer ;(. Correct answer was '${right_answer}'.");
            line("Let's try again, ${name}!");
            exit();
        }
    }

    line("Congratulations, ${name}!");
}
