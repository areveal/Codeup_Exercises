<?php

$value = true;

// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)
$day_of_week = date('N');

echo "Switch output: ";

switch($day_of_week) {
    case 1:
        echo "It is Monday!";
        break;
    case 2:
		echo "It is Tuesday!";
		break;
    case 3:
		echo "It is Wednesday!";
		break;
    case 4:
		echo "It is Thursday!";
		break;
    case 5:
		echo "It is Friday!";
		break;
    case 6:
		echo "It is Saturday!";
		break;
    case 7:
		echo "It is Sunday!";
		break;
}
echo PHP_EOL;

echo "If/Else ouput: ";

if($day_of_week == 1) {
	echo "It is Monday!";
} elseif ($day_of_week == 2) {
	echo "It is Tuesday!";
} elseif ($day_of_week == 3) {
	echo "It is Wednesday!";
} elseif ($day_of_week == 4) {
	echo "It is Thursday!";
} elseif ($day_of_week == 5) {
	echo "It is Friday!";
} elseif ($day_of_week == 6) {
	echo "It is Saturday!";
} elseif ($day_of_week == 7) {
	echo "It is Sunday!";
}
echo PHP_EOL;

?>