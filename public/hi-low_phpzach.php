<?php

/* If there are 2 arguments passed, and both are numbers, use the numbers to set */
/* the min and max on the random number generator. */

$min = 1;
$max = 100;
    
$argsAreNumericAndValid = is_numeric($argv[1]) && is_numeric($argv[2]) && $argv[1] < $argv[2];

if ($argc == 3 && $argsAreNumericAndValid) {
    $min = $argv[1];
    $max = $argv[2];
}

$theNumber = mt_rand($min, $max);
$userGuess = 0;
$numGuesses = 0;

echo "The number is... $theNumber" . PHP_EOL;

// game loop
do {

    // loop for user input
    do {
        echo "Guess ? ($min-$max) ";
        $userGuess = trim(fgets(STDIN));
    } while (!is_numeric($userGuess) || $userGuess < $min || $userGuess > $max);

    $numGuesses += 1;

    if ($userGuess < $theNumber) {
        fwrite(STDOUT, "HIGHER\n");
    } else if ($userGuess > $theNumber) {
        fwrite(STDOUT, "LOWER\n");
    }

} while ($theNumber != $userGuess);

echo "Correct!\n";
echo "It took you $numGuesses guesses!\n";