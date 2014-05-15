<?php

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo $a + $b . PHP_EOL;
    } else {
    	echo 'ERROR: Both $a and $b must be numeric.' . PHP_EOL;
    }
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo $a - $b . PHP_EOL;
    } else {
    	echo 'ERROR: Both $a and $b must be numeric.' . PHP_EOL;
    }	
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a * $b . PHP_EOL;
    } else {
    	echo 'ERROR: Both $a and $b must be numeric.' . PHP_EOL;
    }
}

function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a / $b . PHP_EOL;
    } else {
    	echo 'ERROR: Both $a and $b must be numeric.' . PHP_EOL;
    }
}

function modulo($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo $a % $b . PHP_EOL;
    } else {
    	echo 'ERROR: Both $a and $b must be numeric.' . PHP_EOL;
    }
}

multiply(1,false);
multiply(1,2)



?>