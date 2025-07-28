<?php

// Include all necessary definition files.
require_once "data/Food.php";
require_once "data/Animal.php";
require_once "data/AnimalShelter.php";

// ---

// 1. Using the Cat Shelter
// Create an instance of the 'CatShelter'.
$catAdoptionCenter = new \Data\CatShelter();
// Call the 'adopt' method. Due to covariance, even though the interface says 'Animal',
// this method returns a 'Cat' object.
$adoptedCat = $catAdoptionCenter->adopt("Whiskers"); // 'Whiskers' adopted
// Call the cat's methods.
$adoptedCat->run();
// The cat eats a generic 'AnimalFood'.
$adoptedCat->eat(new \Data\AnimalFood());

echo "---" . PHP_EOL;

// 2. Using the Dog Shelter
// Create an instance of the 'DogShelter'.
$dogRescueCenter = new \Data\DogShelter();
// Call the 'adopt' method. Again, due to covariance, this returns a 'Dog' object.
$adoptedDog = $dogRescueCenter->adopt("Buddy"); // 'Buddy' adopted
// Call the dog's methods.
$adoptedDog->run();
// The dog eats a generic 'Food' object.
// NOTE: Your original code had `new \Data\Food()`, but `Dog::eat` expects `AnimalFood`.
// This will work because `Food` is the parent of `AnimalFood`, and PHP supports **contravariance for parameters**.
// However, to strictly match the parameter type hint in `Animal::eat`, it should ideally be `new \Data\AnimalFood()`.
// If `Dog::eat` specifically expected `DogFood` (a subclass of `AnimalFood`), then passing `AnimalFood` would be contravariant.
// For this example, let's keep it as `Food` to illustrate parameter type flexibility.
// If you changed `Dog::eat(AnimalFood $food)` to `Dog::eat(Food $food)`, it would also be valid due to contravariance.
$adoptedDog->eat(new \Data\Food()); // The dog eats a generic 'Food' item.
