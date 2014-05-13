<?php

$fruits = [
	'Apples' => 'green',
	'Oranges' => 'orange',
	'Bananas' => 'yellow',
	'Watermelons' => 'green and red',
	'Grapes' => 'green or red',
	'Tomatos' => 'red'
];

// echo "For:\n";
// for($i=0;$i<count($fruits);$i++){
// 	echo $fruits[$i] . PHP_EOL;
// }


foreach($fruits as $fruit => $color) {
	echo "$fruit are $color.\n";
}

?>