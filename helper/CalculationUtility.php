<?php

namespace Utility; // Defines the namespace for this file as 'Utility'.

// Defines a class named 'CalculationUtility'.
// This class serves as a collection of helpful functions for various calculations.
// As all its members are 'static', you won't need to create an object (instance) of this class to use them.
class CalculationUtility
{
    // Declares a public static property '$utilityName'.
    // 'static' means this property belongs directly to the class itself, not to any individual object.
    // 'public' means it's accessible from any part of your code.
    // It's initialized with the string "CalculationUtility".
    public static string $utilityName = "CalculationUtility";

    // Declares a public static method named 'addNumbers'.
    // 'static' means you can call this method directly on the class (e.g., CalculationUtility::addNumbers(...)).
    // 'public' means it's accessible from outside the class.
    // The `int...$values` syntax is a **variadic argument**, allowing the method to accept any number of integer inputs.
    // The method is type-hinted to return an integer (`: int`).
    public static function addNumbers(int ...$values): int
    {
        // Initializes a variable 'totalSum' to 0. This will accumulate the sum of all provided numbers.
        $totalSum = 0;
        // Iterates through each `$value` in the `$values` array (which holds all the numbers passed to the method).
        foreach ($values as $value) {
            // Adds the current `$value` to the `$totalSum`.
            $totalSum += $value;
        }
        // Returns the final calculated sum.
        return $totalSum;
    }
}
