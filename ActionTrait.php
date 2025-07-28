<?php

// Includes the file where our traits and classes are defined.
require_once "data/CharacterActions.php";

// Imports the 'Hero' class and the 'SayGreetings' and 'SayFarewell' traits into the current scope.
use Data\Traits\{Hero};

// ---

// Creates a new instance of the 'Hero' class.
$mainHero = new Hero();

// Calls the 'farewell' method from the 'SayFarewell' trait.
// Since no name is provided, it uses the default message.
// Output: "Farewell!"
$mainHero->farewell(null); // Explicitly passing null for the default behavior

// Calls the 'greet' method from the 'SayGreetings' trait.
// This time, we pass "Alice" as the name.
// Output: "Greetings, Alice!"
$mainHero->greet("Alice");

// ---

// Sets the 'characterName' property (from the 'HasIdentity' trait) to "Noir".
// This will be the default name used for actions or identification.
$mainHero->characterName = "Noir";

// Dumps detailed information about the '$mainHero' object.
// This will show its class, properties (including 'characterName' as "Noir"), and methods.
var_dump($mainHero);

// ---

// Calls the 'performAction' method, which is implemented in the 'Hero' class.
// It uses the 'characterName' property.
// Output: "Hero Noir is performing an action!"
$mainHero->performAction();
