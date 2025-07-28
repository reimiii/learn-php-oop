<?php

// Include the 'Student.php' file, which defines our 'Student' class.
// This class will be used to create objects for comparison.
require_once "data/Student.php";

// ---

// 1. Creating the First Student Object
// Instantiates a new 'Student' object and assigns values to its properties.
$studentAlpha = new Student();
$studentAlpha->id = "ID001";
$studentAlpha->name = "Liam Parker";
$studentAlpha->score = 90; // Using 'score' as per updated Student.php

// 2. Creating the Second Student Object
// Instantiates another new 'Student' object.
// Notice that its properties are assigned the *exact same values* as $studentAlpha.
$studentBeta = new Student();
$studentBeta->id = "ID001";
$studentBeta->name = "Liam Parker";
$studentBeta->score = 90;

// ---

// 3. Loose Equality Comparison (==)
// This operator checks if two objects are *equivalent*.
// It returns true if:
//   a. They are instances of the same class (or a class and its subclass).
//   b. They have the same properties (name and visibility).
//   c. The values of their properties are equal (using == for property comparison).
// In this case, $studentAlpha and $studentBeta have the same class and identical property values.
var_dump($studentAlpha == $studentBeta); // Expected Output: bool(true)

// 4. Strict Identity Comparison (===)
// This operator checks if two variables refer to the *exact same object instance* in memory.
// It returns true only if both variables are pointing to the identical object.
// Since $studentAlpha and $studentBeta were created with separate `new Student()` calls,
// they are distinct objects in memory, even if their contents are identical.
var_dump($studentAlpha === $studentBeta); // Expected Output: bool(false)

// 5. Strict Identity Comparison (Self-Comparison)
// Here, we are comparing an object with itself.
// Since '$studentAlpha' clearly refers to the exact same object instance.
var_dump($studentAlpha === $studentAlpha); // Expected Output: bool(true)
