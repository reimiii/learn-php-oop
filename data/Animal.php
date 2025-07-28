<?php

namespace Data; // Defines the namespace for the animal-related classes.

require_once "Food.php"; // Ensures 'Food.php' and its classes are available.

// Abstract base class representing a generic animal.
// Abstract classes cannot be instantiated directly; they serve as blueprints for subclasses.
abstract class Animal
{
    public string $name; // Property to hold the animal's name.

    // Abstract method: All concrete subclasses of Animal MUST implement their own 'run' behavior.
    abstract public function run(): void;

    // Abstract method: All concrete subclasses MUST implement their own 'eat' behavior.
    // It requires an argument of type 'AnimalFood'. This is the **contravariant** part for parameters
    // if we were talking about contravariance, but for covariance we focus on return types.
    abstract public function eat(AnimalFood $animalFood): void;
}

// Concrete class representing a Cat, extending the abstract 'Animal' class.
class Cat extends Animal
{
    // Implements the abstract 'run' method for a Cat.
    public function run(): void
    {
        echo "The cat named $this->name is gracefully running." . PHP_EOL;
    }

    // Implements the abstract 'eat' method for a Cat.
    // It accepts an 'AnimalFood' object, as required by the parent abstract class.
    public function eat(AnimalFood $animalFood): void
    {
        // For simplicity, just a generic eating message.
        // In a real application, you might check the type of $animalFood to see if it's CatFood, etc.
        echo "The cat is happily eating its meal." . PHP_EOL;
    }
}

// Concrete class representing a Dog, extending the abstract 'Animal' class.
class Dog extends Animal
{
    // Implements the abstract 'run' method for a Dog.
    public function run(): void
    {
        echo "The dog named $this->name is playfully running." . PHP_EOL;
    }

    // Implements the abstract 'eat' method for a Dog.
    // It accepts an 'AnimalFood' object, as required by the parent abstract class.
    public function eat(Food $food): void
    {
        // For simplicity, just a generic eating message.
        echo "The dog is eagerly eating its food." . PHP_EOL;
    }
}
