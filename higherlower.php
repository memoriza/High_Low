<?php 

$randomNum = rand(1, 100);

do {

	fwrite(STDOUT, "\n Guess the random number!" . PHP_EOL);

	$userGuess = trim(fgets(STDIN));

	if ($userGuess == $randomNum) {
		fwrite(STDOUT, "Correct! You are awesome!");
		break;

	} elseif ($userGuess > $randomNum) {
		fwrite(STDOUT, "Try Lower & Guess Again! ");
		continue;

	} else {
		fwrite(STDOUT, "Try Higher & Guess Again!");
		continue;
	}

} while ($userGuess != $randomNum); 

?>