<?php

// Get new instance of PDO object
$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'cole', 'password');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

function getParks($dbc) {
    // Bring the $dbc variable into scope somehow

    return $dbc->query('SELECT * FROM parks')->fetchAll(PDO::FETCH_ASSOC);

}

foreach (getParks($dbc) as $rows) {
	print_r($rows);
}



// // Create the query and assign to var
// $query = 'CREATE TABLE parks (
//     id INT UNSIGNED NOT NULL AUTO_INCREMENT,
//     name VARCHAR(50) NOT NULL,
//     location VARCHAR(50) NOT NULL,
//     date_established  DATE NOT NULL,
//     area_in_acres INT NOT NULL,
//     PRIMARY KEY (id)
// )';

// // Run query, if there are errors they will be thrown as PDOExceptions
// $dbc->exec($query);

//here is our array of parks
$parks = [
    ['name' => 'Arches', 'location' => 'Utah', 'date_established' => 19711112, 'area_in_acres' => 76519, 'description' => 'This site features more than 2,000 natural sandstone arches, including the famous Delicate Arch. In a desert climate, millions of years of erosion have led to these structures, and the arid ground has life-sustaining soil crust and potholes, which serve as natural water-collecting basins. Other geologic formations are stone columns, spires, fins, and towers.'],
    ['name' => 'Badlands', 'location' => 'South Dakota', 'date_established' => 19781110, 'area_in_acres' => 242756, 'description' => 'The Badlands are a collection of buttes, pinnacles, spires, and grass prairies. It has the world\'s richest fossil beds from the Oligocene epoch, and the wildlife includes bison, bighorn sheep, black-footed ferrets, and swift foxes.'],
    ['name' => 'Crater Lake', 'location' => 'Oregon', 'date_established' => 20001011, 'area_in_acres' => 32861, 'description' => 'Crater Lake lies in the caldera of an ancient volcano called Mount Mazama that collapsed 7,700 years ago. It is the deepest lake in the United States and is famous for its vivid blue color and water clarity. There are two more recent volcanic islands in the lake, and, with no inlets or outlets, all water comes through precipitation.'],
    ['name' => 'Great Sand Dunes', 'location' => 'Colorado', 'date_established' => 20040913, 'area_in_acres' => 42984, 'description' => 'The tallest sand dunes in North America, up to 750 feet (230 m) tall, were formed by deposits of the ancient Rio Grande in the San Luis Valley. Abutting a variety of grasslands, shrublands, and wetlands, the park also has alpine lakes, six 13,000-foot mountains, and old-growth forests.'],
    ['name' => 'Hawaii Volcanoes', 'location' => 'Hawaii', 'date_established' => 19160801, 'area_in_acres' => 323431, 'description' => 'This park on the Big Island protects the famous Kīlauea and Mauna Loa volcanoes, two of the world\'s most active geological features. Diverse ecosystems range from tropical forests at sea level to barren lava beds at more than 13,000 feet (4,000 m)'],
	['name' => 'Hot Springs', 'location' => 'Arkansas', 'date_established' => 19210304, 'area_in_acres' => 5549, 'description' => 'Hot Springs is the smallest and only National Park in an urban area and is based around natural hot springs that have been managed by the federal government since the 1830s. Being the oldest area in the National Park system, Hot Springs was established by act of congress as a federal reserve on April 20, 1832. Congress changed the reserve\'s designation to National Park on March 4, 1921. The springs provide opportunities for relaxation in an historic setting.'],
	['name' => 'Kings Canyon', 'location' => 'California', 'date_established' => 19400304, 'area_in_acres' => 461901, 'description' => 'Home to several Giant sequoia groves and the General Grant Tree, the world\'s second largest, this park also features part of the Kings River, sculptor of the dramatic granite canyon that is its namesake, and the San Joaquin River, as well as Boyden Cave.'],
	['name' => 'Mammoth Cave', 'location' => 'Kentucky', 'date_established' => 19410701, 'area_in_acres' => 52830, 'description' => 'With 392 miles (631 km) of passageways mapped, Mammoth Cave is by far the world\'s longest cave system. Subterranean wildlife includes eight bat species, Kentucky cave shrimp, Northern cavefish, and cave salamanders. Above ground, the park provides recreation on the Green River, 70 miles of hiking trails, and plenty of sinkholes and springs.'],
	['name' => 'Olympic', 'location' => 'Washington', 'date_established' => 19380629, 'area_in_acres' => 922650, 'description' => 'Situated on the Olympic Peninsula, this park straddles a diversity of ecosystems from Pacific shoreline to temperate rainforests to the alpine slopes of Mount Olympus. The scenic Olympic Mountains overlook the Hoh Rain Forest and Quinault Rain Forest, the wettest area in the continental United States.'],
	['name' => 'Wind Cave', 'location' => 'South Dakota', 'date_established' => 19030109, 'area_in_acres' => 28295, 'description' => 'Wind Cave is distinctive for its calcite fin formations called boxwork and needle-like growths called frostwork. The cave, which was discovered by a sound like that of wind coming from a hole in the ground, is the world\'s densest cave system. Above ground is a mixed-grass prairie with animals such as bison, black-footed ferrets, and prairie dogs and Ponderosa pine forests home to cougars and elk.']
];


$query = "INSERT INTO parks (name, location, date_established, area_in_acres, description) 
		VALUES (:name, :location, :date_established, :area_in_acres, :description)";

$stmt = $dbc->prepare($query);

foreach ($parks as $park) {
    $stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
    $stmt->bindValue(':location', $park['location'], PDO::PARAM_STR);
    $stmt->bindValue(':date_established', $park['date_established'], PDO::PARAM_STR);
    $stmt->bindValue(':area_in_acres', $park['area_in_acres'], PDO::PARAM_INT);
    $stmt->bindValue(':description', $park['description'], PDO::PARAM_STR);

    $stmt->execute();

}

//     echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
// }


?>