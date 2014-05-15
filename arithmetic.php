<?php



function diverror($a, $b) {
    	echo "ERROR: You cannot divide by $b." . PHP_EOL;
}

function numerror($a, $b) {
	echo 'ERROR: Both $a and $b must be numeric.' . PHP_EOL;
    var_dump($a) . var_dump($b) . PHP_EOL;
}


function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo $a + $b . PHP_EOL;
    } else {
    	numerror($a, $b);
    }
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo $a - $b . PHP_EOL;
    } else {
    	numerror($a, $b);
    }	
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a * $b . PHP_EOL;
    } else {
    	numerror($a, $b);
    }
}

function divide($a, $b) {
    if ($b == 0) {
    	diverror($a, $b);
    } 
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a / $b . PHP_EOL;
    } else {
    	numerror($a, $b);
    }
}

function modulo($a, $b) {
	if ($b == 0) {
    	diverror($a, $b);
    } 
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a % $b . PHP_EOL;
    } else {
    	numerror($a, $b);

    }
}


add(1,'hello');




?>