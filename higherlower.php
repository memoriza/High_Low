<?php 

if ($argc == 1) {

	$randomNum = rand(1, 100);

} else {

	$randomNum = rand($argv[1], $argv[2]);

};

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