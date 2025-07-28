<?php

require_once "data/Person.php";

// Create a new Person instance and greet another person
$noir = new Person("Noir", "Springfield");
$noir->name = "Noir";
$noir->sayHello("David");

// Create another Person instance and perform a self-introduction
$alex = new Person("Alex", "Greenville");
$alex->name = "Alex";
$alex->sayHello(null);

// Display author information
$noir->info();
$alex->info();
