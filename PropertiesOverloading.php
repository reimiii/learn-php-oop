<?php

// Defines a class named 'DynamicObject'.
// This class uses PHP's magic methods to handle access to properties and methods
// that are not explicitly declared within the class.
class DynamicObject
{
    // A private associative array to store "dynamic" properties.
    // Properties accessed via overloading will be stored here.
    private array $dynamicProperties = [];

    // --- Property Overloading Magic Methods ---

    // __get($name) Magic Method:
    // This method is automatically called when you try to read the value of a property
    // that is either inaccessible (private/protected from outside) or non-existent.
    // $name: The name of the property being accessed.
    public function __get($name)
    {
        // Returns the value from the internal 'dynamicProperties' array.
        // If the key doesn't exist, it will return null or trigger a notice/warning depending on PHP version.
        return $this->dynamicProperties[$name];
    }

    // __set($name, $value) Magic Method:
    // This method is automatically called when you try to write a value to a property
    // that is either inaccessible or non-existent.
    // $name: The name of the property being set.
    // $value: The value being assigned to the property.
    public function __set($name, $value)
    {
        // Stores the value in the internal 'dynamicProperties' array using the property name as the key.
        $this->dynamicProperties[$name] = $value;
    }

    // __isset($name) Magic Method:
    // This method is automatically called when you use `isset()` or `empty()` on an inaccessible or non-existent property.
    // It should return a boolean indicating whether the "property" is considered set.
    // $name: The name of the property being checked.
    public function __isset($name): bool
    {
        // Checks if the corresponding key exists in the internal 'dynamicProperties' array.
        return isset($this->dynamicProperties[$name]);
    }

    // __unset($name) Magic Method:
    // This method is automatically called when you use `unset()` on an inaccessible or non-existent property.
    // It should remove the "property".
    // $name: The name of the property being unset.
    public function __unset($name)
    {
        // Removes the corresponding key-value pair from the internal 'dynamicProperties' array.
        unset($this->dynamicProperties[$name]);
    }

    // --- Method Overloading Magic Methods ---

    // __call($name, $arguments) Magic Method:
    // This method is automatically called when you try to invoke an **inaccessible or non-existent method** on an **object instance**.
    // $name: The name of the method being called.
    // $arguments: An array containing all the arguments passed to the method.
    public function __call($name, $arguments)
    {
        // Joins the arguments into a comma-separated string for display.
        $joinedArguments = join(",", $arguments);
        // Prints a message indicating which function was called dynamically and with what arguments.
        echo "Attempted to call instance method '$name' with arguments: $joinedArguments" .
            PHP_EOL;
    }

    // __callStatic($name, $arguments) Magic Method:
    // This method is automatically called when you try to invoke an **inaccessible or non-existent static method** on a **class**.
    // $name: The name of the static method being called.
    // $arguments: An array containing all the arguments passed to the method.
    public static function __callStatic($name, $arguments)
    {
        // Joins the arguments into a comma-separated string for display.
        $joinedArguments = join(",", $arguments);
        // Prints a message indicating which static function was called dynamically and with what arguments.
        echo "Attempted to call static method '$name' with arguments: $joinedArguments" .
            PHP_EOL;
    }
}

// --- Usage Examples ---

// Create an instance of the 'DynamicObject' class.
$myDynamicObject = new DynamicObject();

// 1. Property Overloading (Setting Properties)
// These properties ('firstName', 'middleName', 'lastName') are not explicitly declared in 'DynamicObject'.
// When assigned, the `__set()` method is invoked, storing them in the `$dynamicProperties` array.
$myDynamicObject->firstName = "Arthur";
$myDynamicObject->middleName = "Pendragon";
$myDynamicObject->lastName = "King";

// 2. Property Overloading (Getting Properties)
// When these properties are accessed, the `__get()` method is invoked, retrieving their values
// from the `$dynamicProperties` array.
echo "First Name : " . $myDynamicObject->firstName . PHP_EOL;
echo "Middle Name : " . $myDynamicObject->middleName . PHP_EOL;
echo "Last Name : " . $myDynamicObject->lastName . PHP_EOL;

echo "---" . PHP_EOL;

// 3. Method Overloading (Instance Method)
// The 'greetUser' method is not declared in 'DynamicObject'.
// When called, the `__call()` method is invoked, capturing the method name and arguments.
$myDynamicObject->greetUser("Merlin", "Gandalf");

echo "---" . PHP_EOL;

// 4. Method Overloading (Static Method)
// The 'processData' static method is not declared in 'DynamicObject'.
// When called statically, the `__callStatic()` method is invoked.
DynamicObject::processData("data_set_1", 123, true);
