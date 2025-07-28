<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

// Grouped imports from Data\One and Helper namespaces
use Data\One\{Conflict, Dummy, Sample};
use function Helper\{helpMe};

// Instantiate classes from Data\One namespace using grouped import
$conflict = new Conflict();
$dummy = new Dummy();
$sample = new Sample();

// Optionally invoke helper function
helpMe();
