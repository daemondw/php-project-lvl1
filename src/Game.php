<?php

namespace BrainGames\Game;

use function \cli\line;
use function \cli\prompt;

const MAX_TRY = 3;

function goGame(callable $getInfo, string $instr)
{
    line('Welcome to the Brain Game!');
    line($instr . PHP_EOL);

    $name = prompt('May I have your name?');
    line("Hello, %s!", $name . PHP_EOL);

    for ($i = 0; $i < MAX_TRY; $i += 1) {
        [$right, $question] = $getInfo();

        line("Question: {$question}");
        $answer = prompt('Your answer');

        if ($right == $answer) {
            line("Correct!");
        } else {
            line("'${answer}' is wring answer ;(. Correct answer was '${right}'.");
            line("Let's try again, ${name}!");
            exit();
        }
    }

    line("Congratulations, ${name}!");
}
