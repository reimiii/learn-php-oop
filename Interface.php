<?php

require_once "data/Car.php";

use Data\{Avanza};

// Create instance of Avanza
$car = new Avanza();

// Call drive method
$car->drive();

// Output brand
echo "Brand: " . $car->getBrand() . PHP_EOL;

// Output number of tires
echo "Tires: " . $car->getTire() . PHP_EOL;

// Output maintenance status
echo "Is Maintenance: " . ($car->isMaintenance() ? "Yes" : "No") . PHP_EOL;
