<?php

namespace Data;

require_once "Food.php";

// Abstract base class representing an animal
abstract class Animal
{
    public string $name;

    // Abstract method requiring subclasses to implement run behavior
    abstract public function run(): void;

    // Abstract method requiring subclasses to implement eating behavior
    abstract public function eat(AnimalFood $animalFood): void;
}

// Concrete class representing a cat
class Cat extends Animal
{
    public function run(): void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }

    public function eat(AnimalFood $animalFood): void
    {
        echo "Cat is eating" . PHP_EOL;
    }
}

// Concrete class representing a dog
class Dog extends Animal
{
    public function run(): void
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }

    public function eat(AnimalFood $animalFood): void
    {
        echo "Dog is eating" . PHP_EOL;
    }
}
