<?php

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicists_array = explode(', ', $physicists_string);

//add 'and ' to last element of string
$new_last = 'and ' . array_pop($physicists_array);
array_push($physicists_array, $new_last);

$famous_fake_physicists = implode(', ', $physicists_array);

echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.\n";





?>