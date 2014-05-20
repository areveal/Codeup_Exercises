<?php

function humanized_list($list){

	$array = explode(', ', $list);

	sort($array);
	
	//add 'and ' to last element of string
	$new_last = 'and ' . array_pop($array);
	array_push($array, $new_last);
	
	$new_string = implode(', ', $array);

	return $new_string;

}







$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$famous_fake_physicists = humanized_list($physicists_string);

echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.\n";





?>