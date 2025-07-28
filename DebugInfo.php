<?php

// Include the 'Student.php' file, which defines our 'Student' class.
// The 'Student' class is equipped with a '__debugInfo()' magic method,
// which will alter the output of var_dump() for its instances.
require_once "data/Student.php";

// ---

// 1. Creating a Student Object
// Instantiates a new 'Student' object.
$studentProfile = new Student();
// Assigns specific values to its public properties.
$studentProfile->id = "ID-XYZ";
$studentProfile->name = "Selena Gomez";
$studentProfile->score = 85; // Using 'score' as per the updated Student.php
// Sets the private 'internalNote' property using its public setter method.
$studentProfile->setInternalNote("Attended advanced programming workshop.");

// ---

// 2. Dumping the Object's Information
// When var_dump() is called on '$studentProfile', PHP detects the presence
// of the '__debugInfo()' magic method within the 'Student' class.
// Instead of dumping all properties directly, PHP executes the '__debugInfo()' method.
// The method then returns an associative array, and var_dump() displays the contents
// of *that returned array* as if they were the object's properties.
var_dump($studentProfile);

/*
Expected Output (based on the __debugInfo() in data/Student.php):
object(Student)#1 (6) {
  ["student_id"]=>
  string(6) "ID-XYZ"
  ["full_name"]=>
  string(12) "Selena Gomez"
  ["final_score"]=>
  int(85)
  ["private_note"]=>
  string(33) "Attended advanced programming workshop."
  ["debug_source"]=>
  string(17) "PHP Class Example"
  ["debug_version"]=>
  string(5) "1.0.0"
}

Notice that:
- Property names are changed (e.g., 'id' became 'student_id').
- The private property 'internalNote' (mapped to 'private_note') is clearly visible.
- Additional custom fields ('debug_source', 'debug_version') are included, which are not actual properties of the object.
*/
