<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);


// foreach($things as $thing) {
// 	if(is_int($thing)) {
// 		echo "$thing is an integer!";
// 	} elseif(is_float($thing)) {
// 		echo "$thing is a float!";
// 	} elseif(is_bool($thing)) {
// 		echo "$thing is a boolean!";
// 	} elseif(is_array($thing)) {
// 		print_r("$thing is an array!");
// 	} elseif(is_null($thing)) {
// 		echo "$thing is null!";
// 	} elseif(is_string($thing)) {
// 		echo "$thing is a string!";
// 	}
// 	echo PHP_EOL;
//}

// foreach($things as $thing) {
// 	if(is_int($thing)) {
// 		echo "Integer!";
// 	} elseif(is_float($thing)) {
// 		echo "Float!";
// 	} elseif(is_bool($thing)) {
// 		echo "Boolean!";
// 	} elseif(is_array($thing)) {
// 		print_r("Array!");
// 	} elseif(is_null($thing)) {
// 		echo "Null!";
// 	} elseif(is_string($thing)) {
// 		echo "String!";
// 	}
// 	echo PHP_EOL;
// }

foreach($things as $thing) {
	if(is_scalar($thing)) {
		echo $thing;
	}
	echo PHP_EOL;
}


?>