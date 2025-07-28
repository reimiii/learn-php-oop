<?php

require_once "data/Shape.php";

use Data\{Shape, Rectangle};

// Instantiate a generic shape
$shape = new Shape();
echo $shape->getCorner() . PHP_EOL; // Outputs -1

// Instantiate a rectangle and call overridden and parent methods
$rectangle = new Rectangle();
echo $rectangle->getCorner() . PHP_EOL; // Outputs 4
echo $rectangle->getParentCorner() . PHP_EOL; // Outputs -1
