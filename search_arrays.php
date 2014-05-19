<?php

// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Don', 'Mel', 'Amy', 'Michael'];

function check($needle, $haystack) {
	if(array_search($needle, $haystack) !== false){
		return true;
	} else {
		return false;
	}
}

function compare($haystack1, $haystack2) {
	
	$names_in_common = 0;

	foreach ($haystack1 as $needle) {
	 	$result = check($needle, $haystack2);
	 	if($result) {
	 		$names_in_common +=1;
	 	}	
	} 
	return $names_in_common;
}

$how_many_same = compare($names, $compare);
echo $how_many_same . PHP_EOL;


?>