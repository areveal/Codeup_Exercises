<?php

// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dana', 'Mel', 'Amy', 'Michael'];

function check($name, $list) {
	if(array_search($name, $list) !== false){
		return true;
	} else {
		return false;
	}
}

function compare($array1, $array2) {
	
	$common = 0;

	foreach ($array1 as $name) {
	 	if(array_search($name, $array2) !== false) {
	 		$common +=1;
	 	}	
	} 
	return $common;
}

$how_many_same = compare($names, $compare);
echo $how_many_same . PHP_EOL;


?>