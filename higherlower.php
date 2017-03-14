<?php 

if ($argc == 3  && ((is_numeric($argv[1])) && (is_numeric($argv[2])))) {

	$min = $argv[1];
	$max = $argv[2];


} elseif ($argc == 3 && (!is_numeric($argv[1]) || !is_numeric($argv[2]))) {

	fwrite(STDERR, "enter in 2 valid numeric values as parameters". PHP_EOL);
	
	do {
		fwrite(STDOUT, "enter in a valid numeric \$min value." . PHP_EOL);
		$min = trim(fgets(STDIN));

	} while (!is_numeric($min));

	do {
		fwrite(STDOUT, "enter in a valid numeric \$max value." . PHP_EOL);
		$max = trim(fgets(STDIN));

	} while (!is_numeric($max) || ($max < $min));
	

} else {

	$min = 1;
	$max = 100;
}

$randomNum = rand($min, $max);

var_dump($randomNum);

do {

	fwrite(STDOUT, "\n Guess the random number $min-$max!" . PHP_EOL);

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