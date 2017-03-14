<?php 

$randomNum = rand(1, 100);

var_dump($randomNum);

do {
	fwrite(STDOUT, "\n Guess the random number! \n");

	$userGuess = trim(fgets(STDIN));

	if ($userGuess == $randomNum) {

		fwrite(STDOUT, "Correct! You are awesome!");

		break;

	} elseif ($userGuess > $randomNum) {

		fwrite(STDOUT, " : Try Lower & Guess the random number! ");

		continue;

	} elseif ($userGuess < $randomNum) {

		fwrite(STDOUT, " : Try Higher & Guess Again" );

		continue;

	}

} while ($userGuess != $randomNum); 

?>