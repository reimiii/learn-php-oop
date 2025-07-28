<?php

// This line includes the file where the 'CalculationUtility' class is defined.
// It's crucial for our script to recognize and use that class.
require_once "helper/CalculationUtility.php";

// The 'use' statement allows us to refer to 'CalculationUtility' directly
// without needing to specify its full namespace (Utility\CalculationUtility) every time.
use Utility\CalculationUtility;

// ---

// **Accessing a Static Property:**
// We're printing the value of the **static property** '$utilityName' from the 'CalculationUtility' class.
// Static properties are owned by the class itself, not by individual objects.
// Output will be: "CalculationUtility" (the initial value defined in CalculationUtility.php)
echo CalculationUtility::$utilityName . PHP_EOL;

// **Modifying a Static Property:**
// We're changing the value of the static property '$utilityName'.
// Since it's static, this change applies to the property across the entire class,
// meaning any subsequent access to 'CalculationUtility::$utilityName' will reflect this new value.
CalculationUtility::$utilityName = "Noir's Ultimate Calculator";

// Now, when we print '$utilityName' again, it will show the updated value.
// Output will be: "Noir's Ultimate Calculator"
echo CalculationUtility::$utilityName . PHP_EOL;

// ---

// **Calling a Static Method:**
// We're calling the **static method** 'addNumbers()' from the 'CalculationUtility' class.
// We pass a series of integer arguments to it (15, 20, 25, 30, 10).
// The 'addNumbers' method will then compute their total sum.
$calculationResult = CalculationUtility::addNumbers(15, 20, 25, 30, 10);
// We then print the computed result.
// Output will be: "Calculation Result : 100"
echo "Calculation Result : $calculationResult" . PHP_EOL;
