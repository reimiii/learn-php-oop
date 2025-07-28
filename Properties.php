<?php

require_once "data/Person.php";

// Creating a new PersonModel instance
$person = new Person("John", "Springfield");
$person->name = "John";
$person->address = "Springfield";

var_dump($person);

echo "Name: $person->name" . PHP_EOL;
echo "Address: $person->address" . PHP_EOL;
echo "Country: $person->country" . PHP_EOL;

// Creating another PersonModel instance with null address
$person2 = new Person("David", null);
$person2->name = "David";
$person2->address = null;

var_dump($person2);

// Error example (uncommenting this will cause a type error)
// $person2->name = [];
