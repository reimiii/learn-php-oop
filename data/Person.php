<?php

class Person
{
    // Static constant for identifying the class creator
    const AUTHOR = "Noir Is Rebuild Me";

    // Public properties with type declarations
    public string $name;
    public ?string $address = null;
    public string $country = "US";

    // Constructor to initialize object with name and address
    public function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    // Method to say hello; greets another person if name is provided
    public function sayHello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hi, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }

    // Method to print author info
    public function info(): void
    {
        echo "Author: " . self::AUTHOR . PHP_EOL;
    }

    // Destructor method to signal object destruction
    public function __destruct()
    {
        echo "Person object $this->name is destroyed" . PHP_EOL;
    }
}
