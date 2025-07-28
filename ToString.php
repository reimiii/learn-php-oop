<?php

// Include the 'Student.php' file, which contains the definition of our 'Student' class.
// The 'Student' class has a '__toString()' magic method, essential for this demonstration.
require_once "data/Student.php";

// ---

// 1. Creating a Student Object
// Instantiates a new 'Student' object.
$studentProfile = new Student();
// Assigns specific values to its properties.
$studentProfile->id = "STU007";
$studentProfile->name = "James Bond";
$studentProfile->score = 99; // Using 'score' as per the updated Student.php

// ---

// 2. Explicit Type Casting to String
// Here, we explicitly cast the '$studentProfile' object to a string using '(string)'.
// When this happens, PHP automatically calls the '__toString()' method defined within the 'Student' class.
// The method returns a formatted string representation of the student's data.
$studentAsString = (string) $studentProfile;
// Prints the resulting string.
// Expected Output: "Student ID: STU007, Name: James Bond, Score: 99"
echo $studentAsString . PHP_EOL;

// ---

// 3. Implicit Type Conversion to String
// PHP often automatically converts objects to strings in contexts where a string is expected.
// When an object is directly echoed or used in a string concatenation (like in an interpolated string),
// PHP implicitly calls its '__toString()' method if it exists.
// This is a more common and convenient way to display object information.
// Expected Output: "Student ID: STU007, Name: James Bond, Score: 99"
echo $studentProfile . PHP_EOL;
