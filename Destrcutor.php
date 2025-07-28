<?php

require_once "data/Person.php";

// Instantiate two Person objects
$noir = new Person("Noir", "Springfield");
$alex = new Person("Alex", "Springfield");

// Indicate end of program; destructor s will be triggered after this
echo "Program Finished" . PHP_EOL;
