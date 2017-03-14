<?php 

$userGuess = trim(fgets(STDIN));

$randomNum = rand(1, 100);


function higherLower { 

	fwrite(STDOUT, "Guess the random number! ") . PHP_EOL;

	if ($userGuess === $randomNum) {

		echo "Correct! You are awesome!" . PHP_EOL;

	} elseif ($userGuess > $randomNum) {
		fwrite(STDOUT, "Try Lower & Guess the random number! ") . PHP_EOL;
		fwrite(STDOUT, "You guessed $userGuess");
		higherLower();

	} elseif ($userGuess < $randomNum) {
		fwrite(STDOUT, "Try Higher & Guess Again" ) . PHP_EOL;
		fwrite(STDOUT, "You guessed $userGuess");
		higherLower();
	} else {
		echo "Guess?" . PHP_EOL;
		fwrite(STDOUT, "Guess the random number! ") . PHP_EOL;
		fwrite(STDOUT, "You guessed $userGuess");
};		higherLower();

higherLower();

?>