<?php

namespace Data\Traits; // Defines the namespace for these traits.

// Defines a trait named 'SayFarewell'. Traits are reusable sets of methods.
trait SayFarewell
{
    // A public method to express a goodbye, optionally taking a name.
    public function farewell(?string $name): void
    {
        if (is_null($name)) {
            // If no name is provided, print a generic goodbye.
            echo "Farewell" . PHP_EOL;
        } else {
            // If a name is provided, personalize the goodbye message.
            echo "Farewell, $name!" . PHP_EOL;
        }
    }
}

// Defines a trait named 'SayGreetings'.
trait SayGreetings
{
    // A public method to express a greeting, optionally taking a name.
    public function greet(?string $name): void
    {
        if (is_null($name)) {
            // If no name is provided, print a generic greeting.
            echo "Greetings!" . PHP_EOL;
        } else {
            // If a name is provided, personalize the greeting message.
            echo "Greetings, $name!" . PHP_EOL;
        }
    }
}

// Defines a trait named 'HasIdentity'. This trait provides a property for a character's name.
trait HasIdentity
{
    // Declares a public string property 'characterName' to hold the character's name.
    public string $characterName;
}

// Defines a trait named 'CanAct'. This trait requires any class using it to implement a 'performAction' method.
trait CanAct
{
    // An abstract public method. Classes using this trait *must* provide an implementation for 'performAction'.
    abstract public function performAction(): void;
}

// A base class for characters.
class BaseCharacter
{
    // A default 'farewell' method. This will be overridden by the trait if used by a child class.
    public function farewell(?string $name): void
    {
        echo "Base Character says farewell." . PHP_EOL;
    }

    // A default 'greet' method. This will also be overridden by the trait.
    public function greet(?string $name): void
    {
        echo "Base Character says greetings." . PHP_EOL;
    }
}

// A composite trait named 'FullAbilities' that bundles several other traits.
trait FullAbilities
{
    // Uses the 'SayFarewell', 'SayGreetings', 'HasIdentity', and 'CanAct' traits.
    // This makes all their methods and properties available to any class using 'FullAbilities'.
    use SayFarewell, SayGreetings, HasIdentity, CanAct {}
    // Optional: Trait method aliasing or visibility changes can be done here.
    // For example, to make 'greet' private if needed:
    // greet as private;
}

// The main 'Hero' class, extending 'BaseCharacter' and using the 'FullAbilities' trait.
class Hero extends BaseCharacter
{
    // Includes all functionalities from the 'FullAbilities' trait.
    // Trait methods ('farewell', 'greet') will override methods from 'BaseCharacter'.
    use FullAbilities;

    // Implements the abstract 'performAction' method from the 'CanAct' trait.
    public function performAction(): void
    {
        // Prints a message indicating the character is performing an action, using their name.
        echo "Hero " .
            $this->characterName .
            " is performing an action!" .
            PHP_EOL;
    }
}
