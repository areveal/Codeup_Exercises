<?php

// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function check($name, $list) {
	if(array_search($name, $list) !== false){
		return true;
	} else {
		return false;
	}
}


?>