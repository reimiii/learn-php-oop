<?php

// 1. Initializing an Associative Array
// We start with an associative array where keys represent typical user data.
$userDataArray = [
    "firstName" => "Alice",
    "middleName" => "Marie",
    "lastName" => "Smith",
];

// 2. Casting an Array to an Object (StdClass)
// By casting the $userDataArray to (object), PHP converts it into an instance of StdClass.
// Each key in the array becomes a public property of the StdClass object.
$userDataObject = (object) $userDataArray;

// 3. Inspecting the StdClass Object
// var_dump() provides a detailed look at the structure and content of $userDataObject.
// You'll see it's an 'object(stdClass)' with 'firstName', 'middleName', and 'lastName' properties.
var_dump($userDataObject);

// 4. Accessing Properties of the StdClass Object
// You can now access the array keys as object properties using the object operator (->).
echo "First Name: $userDataObject->firstName" . PHP_EOL;
echo "Middle Name: $userDataObject->middleName" . PHP_EOL;
echo "Last Name: $userDataObject->lastName" . PHP_EOL;

echo "---" . PHP_EOL; // Separator for clarity

// 5. Casting an StdClass Object back to an Array
// You can cast the StdClass object back to an array using (array).
// The object's public properties become keys in the new array.
$arrayAgain = (array) $userDataObject;
var_dump($arrayAgain);

echo "---" . PHP_EOL; // Separator for clarity

// 6. Working with a Custom Class (assuming data/Person.php exists)
// Let's assume data/Person.php contains a simple class like this:
/*
namespace App\Models; // Example namespace
class Person
{
    public string $name;
    private string $address; // Private property example

    public function __construct(string $name, string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }
}
*/
require_once "data/Person.php"; // Include the custom Person class definition.

// Create an instance of our custom 'Person' class.
$personInstance = new Person("Noir", "Gotham City");
var_dump($personInstance);

// 7. Casting a Custom Class Object to an Array
// When you cast a custom object to an array:
// - Public properties become array elements with their names as keys.
// - Protected properties become array elements with their names prefixed with '*' (e.g., "*protectedProperty").
// - Private properties become array elements with their names prefixed with the class name (e.g., "ClassNameprivateProperty").
// This allows you to inspect an object's internal state via an array, though direct access to private/protected members outside the class is not granted.
$personArray = (array) $personInstance;
var_dump($personArray);
