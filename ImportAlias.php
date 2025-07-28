<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

// Use aliasing to resolve name conflicts and simplify references
use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;
use function Helper\helpMe as help;
use const Helper\APPLICATION as APP;

// Instantiate Conflict classes from different namespaces using aliases
$conflict1 = new Conflict1();
$conflict2 = new Conflict2();

// Call aliased helper function
help();

// Output aliased constant
echo APP . PHP_EOL;
