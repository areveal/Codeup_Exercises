<?php

// Get new instance of PDO object
$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'cole', 'password');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";


// Create the query and assign to var
$query = 'CREATE TABLE parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    location VARCHAR(50) NOT NULL,
    date_established  DATE NOT NULL,
    area_in_acres INT NOT NULL,
    PRIMARY KEY (id)
)';

// Run query, if there are errors they will be thrown as PDOExceptions
$dbc->exec($query);

//here is our array of parks
$parks = [
    ['name' => 'Arches', 'location' => 'Utah', 'date_established' => 19711112, 'area_in_acres' => 76519],
    ['name' => 'Badlands', 'location' => 'South Dakota', 'date_established' => 19781110, 'area_in_acres' => 242756],
    ['name' => 'Crater Lake', 'location' => 'Oregon', 'date_established' => 20001011, 'area_in_acres' => 32861],
    ['name' => 'Great Sand Dunes', 'location' => 'Colorado', 'date_established' => 20040913, 'area_in_acres' => 42984],
    ['name' => 'Hawaii Volcanoes', 'location' => 'Hawaii', 'date_established' => 19160801, 'area_in_acres' => 323431],
	['name' => 'Hot Springs', 'location' => 'Arkansas', 'date_established' => 19210304, 'area_in_acres' => 5549],
	['name' => 'Kings Canyon', 'location' => 'California', 'date_established' => 19400304, 'area_in_acres' => 461901],
	['name' => 'Mammoth Cave', 'location' => 'Kentucky', 'date_established' => 19410701, 'area_in_acres' => 52830],
	['name' => 'Olympic', 'location' => 'Washington', 'date_established' => 19380629, 'area_in_acres' => 922650],
	['name' => 'Wind Cave', 'location' => 'South Dakota', 'date_established' => 19030109, 'area_in_acres' => 28295]
];

foreach ($parks as $park) {
    $query = "INSERT INTO parks (name, location, date_established, area_in_acres) VALUES ('{$park['name']}', '{$park['location']}', '{$park['date_established']}', '{$park['area_in_acres']}')";

    $dbc->exec($query);

    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}


?>