<?php

function humanized_list($list,$sort = false){

	$array = explode(', ', $list);

	if($sort === true){
		sort($array);
	}
	
	//add 'and ' to last element of string
	$new_last = 'and ' . array_pop($array);
	array_push($array, $new_last);
	
	$new_string = implode(', ', $array);

	return $new_string;

}

echo PHP_EOL;

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$famous_fake_physicists = humanized_list($physicists_string,true);

echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.\n";

echo PHP_EOL;


?>