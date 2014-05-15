<?php


//Here is the backbone of our function creator
function divcheck($a, $b) {
    if(!$b == 0) {
        return true;
    } else {
        echo "ERROR: You cannot divide by $b.";
        return false;
    }
}

function numcheck($a, $b) {
    if(is_numeric($a) && is_numeric($b)) {
        return true;
    } else {
        echo 'ERROR: Both $a and $b must be numeric.' . PHP_EOL;
        //show value of $a
        echo 'Variable $a is ';
        var_dump($a);
        //show value of $b
        echo 'Variable $b is ';
        var_dump($b);
        return false;
    }
}


//Here are the applications of our backbone utilized for operations.

function add($a, $b) {
	if(numcheck($a,$b)) {
        return $a + $b; 
    }
}

function subtract($a, $b) {
	if(numcheck($a,$b)) {
        return $a - $b; 
    }	
}

function multiply($a, $b) {
    if(numcheck($a,$b)) {
        return $a * $b; 
    }
}

function divide($a, $b) {
    if(numcheck($a,$b) && divcheck($a,$b)) {
        return $a + $b; 
    }
}

function modulo($a, $b) {
	if(numcheck($a,$b) && divcheck($a,$b)) {
        return $a + $b; 
    }
}






echo modulo(1,0) . PHP_EOL;
echo add(1,3) . PHP_EOL;
echo multiply(5,add(1,4)) . PHP_EOL;
echo divide(10,4) . PHP_EOL;
echo subtract(25,21) . PHP_EOL;
echo add([0,1,2],'hello') . PHP_EOL;




?>