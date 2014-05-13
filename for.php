<?php

// Let's begin.
echo "Please enter a number. ";

$num1 = trim(fgets(STDIN));

echo "Please enter a different number. ";

$num2 = trim(fgets(STDIN));

// Check to make sure both values were numbers.
if(!is_numeric($num1)||!is_numeric($num2)) {
	echo "You must enter two numbers.";
	exit(1);
}

// Check to make sure the numbers were two different numbers.
if($num1 == $num2) {
	echo "You must enter two different numbers.";
	exit(1);
}

// Create the incrementer.
echo "What would you like to increment by? ";

$inc = trim(fgets(STDIN));

if($inc == 0) {
	$inc = 1;
	echo "Not sure what you meant by that but we'll use 1.\n";
}

// Here is the actual output. Increment or decrement?
if($num1<$num2) {
	for($a = $num1; $a <= $num2; $a += $inc) {
		echo "$a ";
	}
} else {
	for($a = $num1; $a >= $num2; $a -= $inc) {
		echo "$a ";
	}
}

echo PHP_EOL;

?>