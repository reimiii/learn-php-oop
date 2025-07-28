<?php

require_once "data/Person.php";

// Define application-wide constants
define("APPLICATION", "Learning PHP OOP");
const APP_VERSION = "1.0.0";

// Output application metadata
echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;

// Output the author constant from the Person class
echo Person::AUTHOR . PHP_EOL;
