<?php 

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

function check($var) {
	if(empty($var) && isset($var)){
		echo 'The variable is EMPTY and SET!';		
	} elseif(empty($var)) {
		echo 'The variable is EMPTY!';
	} else {
		echo 'The variable is SET!';
	}
	echo PHP_EOL;
}

// TEST: If var $nothing is set, display '$nothing is SET'

$nothing = 'hello';
check($nothing);

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

$nothing = null;
check($nothing);

// TEST: If var $something is set, display '$something is SET'

$something = '';
check($something);

// Serialize the array $array, and output the results

$array = array(1,2,3);

$array = serialize($array);
echo 'The serialized array is: ' . $array . PHP_EOL;

// Unserialize the array $array, and output the results

$array = unserialize($array);
echo 'The unserialized array is: ';
print_r($array);

 ?>