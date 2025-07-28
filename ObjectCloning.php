<?php

// Includes the 'Student.php' file, which contains the definition of our 'Student' class.
// This class is equipped with a '__clone()' magic method that will affect cloning behavior.
require_once "data/Student.php";

// ---

// 1. Creating the Original Object (Master Student)
// Instantiates a new 'Student' object. This will be our original object.
$masterStudent = new Student();
// Assigns values to its public properties.
$masterStudent->id = "STU001";
$masterStudent->name = "Alice Thompson";
$masterStudent->score = 95;
// Sets the private 'internalNote' property using its public setter method.
$masterStudent->setInternalNote("Excellent progress in Math.");

// Outputs the detailed information of the original '$masterStudent' object using var_dump().
// Due to the __debugInfo() method in Student.php, this will show:
// - student_id: STU001
// - full_name: Alice Thompson
// - final_score: 95
// - private_note: Excellent progress in Math.
// - debug_source: PHP Class Example
// - debug_version: 1.0.0
var_dump($masterStudent);

echo "--- CLONING PROCESS ---" . PHP_EOL;

// 2. Cloning the Object (Creating a Duplicate)
// The 'clone' keyword creates a shallow copy of the '$masterStudent' object.
// When 'clone $masterStudent' is executed, PHP first creates a new object ($duplicateStudent)
// with all the properties copied from $masterStudent.
// Immediately after the properties are copied, the **__clone() magic method**
// within the 'Student' class is automatically called on the *newly created* object ($duplicateStudent).
$duplicateStudent = clone $masterStudent;

// Outputs the detailed information of the cloned '$duplicateStudent' object.
// Due to the '__clone()' method's 'unset($this->internalNote);' within the Student class,
// the 'private_note' property will be *missing* or *null* in the var_dump output for $duplicateStudent.
// All other public properties (id, name, score) will be the same as $masterStudent.
var_dump($duplicateStudent);

echo "--- MANUAL CLONING (for comparison) ---" . PHP_EOL;

// 3. Manual Cloning (Illustrative - usually not done this way with simple properties)
// This commented-out section shows what you would have to do *manually*
// if you wanted to copy properties from one object to another without using 'clone'.
// This is tedious and prone to errors, especially with many properties or complex objects.
/*
$manualCopyStudent = new Student();
$manualCopyStudent->id = $masterStudent->id;
$manualCopyStudent->name = $masterStudent->name;
$manualCopyStudent->score = $masterStudent->score;
// Note: Manually copying a private property like 'internalNote' would require a getter method,
// or direct assignment within the class if done inside a class method.
// $manualCopyStudent->setInternalNote($masterStudent->getInternalNote()); // if getInternalNote existed
*/

// --- Explanation of the __clone() Call Order ---
// When you write: $duplicateStudent = clone $masterStudent;
// 1. PHP creates a brand new object. Let's call it $tempObject.
// 2. All properties from $masterStudent are copied into $tempObject (shallow copy).
// 3. The magic method $tempObject->__clone() is automatically called.
// 4. Finally, $tempObject is assigned to $duplicateStudent.

// This means the __clone() method operates on the *newly created* object,
// allowing you to modify its state right after the initial property copy.
