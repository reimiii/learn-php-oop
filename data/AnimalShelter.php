<?php

namespace Data; // Defines the namespace for shelter-related classes.

require_once "Animal.php"; // Ensures 'Animal.php' and its classes are available.

// Defines an interface for an animal shelter.
// An interface specifies a contract that classes must adhere to.
interface AnimalShelter
{
    // Declares an 'adopt' method that must be implemented by any class implementing this interface.
    // It promises to return an object of type 'Animal'.
    function adopt(string $name): Animal;
}

// Concrete class representing a shelter specifically for cats.
// It implements the 'AnimalShelter' interface.
class CatShelter implements AnimalShelter
{
    // Implements the 'adopt' method from the 'AnimalShelter' interface.
    // This method demonstrates **covariance**:
    // The interface promises to return 'Animal', but this specific implementation
    // returns a more specific type: 'Cat' (which is a subclass of 'Animal').
    // This is valid in PHP 7.4+ and is a key example of covariance.
    public function adopt(string $name): Cat
    {
        $feline = new Cat();
        $feline->name = $name;
        return $feline; // Returns a 'Cat' object
    }
}

// Concrete class representing a shelter specifically for dogs.
// It implements the 'AnimalShelter' interface.
class DogShelter implements AnimalShelter
{
    // Implements the 'adopt' method from the 'AnimalShelter' interface.
    // This also demonstrates **covariance**:
    // The interface promises 'Animal', but this implementation returns 'Dog'
    // (which is a subclass of 'Animal').
    public function adopt(string $name): Dog
    {
        $canine = new Dog();
        $canine->name = $name;
        return $canine; // Returns a 'Dog' object
    }
}
