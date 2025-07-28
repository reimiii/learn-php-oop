<?php

// Include the 'Student.php' file, which defines our 'Student' class.
// The 'Student' class is equipped with a '__invoke()' magic method, which is key to this example.
require_once "data/Student.php";

// ---

// 1. Creating a Student Object
// Instantiates a new 'Student' object.
$studentProfile = new Student();
// Assigns specific values to its properties.
$studentProfile->id = "USR001";
$studentProfile->name = "Mr. Noir"; // Using "Noir" as a default/example name
$studentProfile->score = 88; // Using 'score' as per the updated Student.php

// ---

// 2. Invoking the Object as a Function
// This is the core demonstration. Here, the '$studentProfile' object is being treated
// and called like a regular function, followed by parentheses and arguments.
// When PHP encounters this syntax, it automatically looks for and executes
// the '__invoke()' magic method within the '$studentProfile' object's class.
// The arguments provided (1, "data", true, "payload") are passed directly to the '__invoke()' method.
$studentProfile(1, "data", true, "payload");

// Expected Output (from the __invoke method in Student.php):
// "Invoked student object with arguments: 1,data,1,payload"
// (Note: 'true' is converted to '1' when joined as a string)
