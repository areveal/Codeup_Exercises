<?php

// Let's begin
for($a=1;$a<=100;$a++) {
	// If our number is divisible by both 3 and 5, we will ouput "FizzBuzz".
	// Else if our number is divisble only by 3, we will ouput "Fizz".
	// Else if our number is divisible only by 5, we will output "Buzz".
	//Else we will simply ouput the number itself.
	if(($a % 3 ==0) && ($a % 5 ==0)) {
		echo "FizzBuzz\n";
	} elseif($a % 3 ==0) {
		echo "Fizz\n";
	} elseif ($a %5 ==0) {
		echo "Buzz\n";
	} else {
		echo $a . PHP_EOL;
	}
}





?>