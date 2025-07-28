<?php

// ---
## Trait A
// Defines 'Trait A' which contains two methods, 'doA' and 'doB'.
// Each method prints a lowercase letter to demonstrate its origin.
trait A
{
    public function doA(): void
    {
        echo "a" . PHP_EOL; // 'a' from Trait A
    }

    public function doB(): void
    {
        echo "b" . PHP_EOL; // 'b' from Trait A
    }
}

// ---
## Trait B
// Defines 'Trait B', also containing 'doA' and 'doB' methods.
// These methods print uppercase letters to clearly distinguish them from Trait A's methods.
// This creates a **method name conflict** when both traits are used in the same class.
trait B
{
    public function doA(): void
    {
        echo "A" . PHP_EOL; // 'A' from Trait B
    }

    public function doB(): void
    {
        echo "B" . PHP_EOL; // 'B' from Trait B
    }
}

// ---
## Class Sample - Resolving Conflicts
// Defines the 'Sample' class which attempts to use both 'Trait A' and 'Trait B'.
class Sample
{
    // The 'use' statement includes methods from both traits.
    // However, since both traits have methods with the same names ('doA' and 'doB'),
    // PHP requires explicit conflict resolution.
    use A, B {
        // 'A::doA insteadof B;'
        // This line resolves the conflict for 'doA'. It specifies that when 'doA' is called
        // on a 'Sample' object, the version from 'Trait A' should be used,
        // *instead of* the version from 'Trait B'.
        A::doA insteadof B;

        B::doB insteadof A;
        // This line resolves the conflict for 'doB'. It specifies that when 'doB' is called,
        // the version from 'Trait B' should be used, *instead of* the version from 'Trait A'.
    }
}

// ---
## Usage
// Creates a new instance of the 'Sample' class.
$sample = new Sample();

// Calls the 'doA' method on the '$sample' object.
// Due to the conflict resolution rule 'A::doA insteadof B;',
// the 'doA' method from 'Trait A' will be executed.
// Expected Output: "a"
$sample->doA();

// Calls the 'doB' method on the '$sample' object.
// Due to the conflict resolution rule 'B::doB insteadof A;',
// the 'doB' method from 'Trait B' will be executed.
// Expected Output: "B"
$sample->doB();
