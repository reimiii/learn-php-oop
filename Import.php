<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

// Import class, function, and constant from different namespaces
use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

// Instantiate Conflict class from Data\One
$conflict1 = new Conflict();

// Instantiate Conflict class from Data\Two using fully-qualified name
$conflict2 = new Data\Two\Conflict();

// Call helper function
helpMe();

// Output application constant
echo APPLICATION . PHP_EOL;
