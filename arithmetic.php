<?php

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo $a + $b . PHP_EOL;
    } else {
    	echo 'ERROR: Both $a and $b must be numeric.' . PHP_EOL;
    	var_dump($a) . var_dump($b) . PHP_EOL;
    }
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo $a - $b . PHP_EOL;
    } else {
    	echo 'ERROR: Both $a and $b must be numeric.' . PHP_EOL;
    	var_dump($a) . var_dump($b) . PHP_EOL;
    }	
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a * $b . PHP_EOL;
    } else {
    	echo 'ERROR: Both $a and $b must be numeric.' . PHP_EOL;
    	var_dump($a) . var_dump($b) . PHP_EOL;
    }
}

function divide($a, $b) {
    if ($b == 0) {
    	echo "ERROR: You cannot divide by $b." . PHP_EOL;
    	break;
    } 
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a / $b . PHP_EOL;
    } else {
    	echo 'ERROR: Both $a and $b must be numeric.' . PHP_EOL;
    	var_dump($a) . var_dump($b) . PHP_EOL;
    }
}

function modulo($a, $b) {
	if ($b == 0) {
    	echo "ERROR: You cannot divide by $b." . PHP_EOL;
    	break;
    } 
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a % $b . PHP_EOL;
    } else {
    	echo 'ERROR: Both $a and $b must be numeric.' . PHP_EOL;
    	var_dump($a) . var_dump($b) . PHP_EOL;

    }
}


add(1,'3');




?>