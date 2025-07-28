<?php

// Defines an interface named 'GreetingService'.
// This interface sets a contract: any class implementing it
// must provide a concrete definition for the 'sendGreeting' method.
interface GreetingService
{
    // Declares the method signature 'sendGreeting'.
    // It takes no arguments and doesn't return any value (void).
    function sendGreeting(): void;
}

// ---

// Creates an instance of an **anonymous class**.
// An anonymous class is a class defined and instantiated right where it's needed, without a formal name.
// We're passing "Noir" directly to its constructor, which serves as the default name.
$greetingSender = new class ("Noir") implements GreetingService {
    // Declares a public string property 'recipientName' for this anonymous class.
    public string $recipientName;

    // Defines the constructor method for the anonymous class.
    // It takes a string argument '$initialName' when the object is created.
    public function __construct(string $initialName)
    {
        // Assigns the provided name to the object's 'recipientName' property.
        $this->recipientName = $initialName;
    }

    // Implements the 'sendGreeting' method, as required by the 'GreetingService' interface.
    // This method prints a personalized greeting using the 'recipientName' property.
    public function sendGreeting(): void
    {
        echo "Hello, $this->recipientName!" . PHP_EOL;
    }
};

// ---

// Calls the 'sendGreeting' method on the instance of the anonymous class.
// This will execute the 'sendGreeting' method defined within the anonymous class,
// using the name ("Noir") that was passed to its constructor.
// Expected Output: "Hello, Noir!"
$greetingSender->sendGreeting();
