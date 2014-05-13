<?php

$fruits = [
	'apple',
	'orange',
	'banana',
	'watermelon',
	'grape',
	'tomato'
];

echo "For:\n";
for($i=0;$i<count($fruits);$i++){
	echo $fruits[$i] . PHP_EOL;
}

echo"Foreach:\n";
foreach($fruits as $fruit) {
	echo $fruit . PHP_EOL;
}

?>