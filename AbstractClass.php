<?php

require_once "data/Location.php";

use Data\{City, Province, Country};

// Cannot instantiate abstract class Location directly
// $location = new Location(); // ERROR

// Instantiate specific location types
$city = new City();
$province = new Province();
$country = new Country();
