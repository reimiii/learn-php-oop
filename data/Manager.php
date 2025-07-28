<?php

// Base class representing a generic manager
class Manager
{
    public string $name;
    public string $title;

    // Constructor with default title "Manager"
    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    // Outputs a greeting that includes the manager's name
    public function sayHello(string $recipient): void
    {
        echo "Hi $recipient, my name is Manager $this->name" . PHP_EOL;
    }
}

// Subclass representing a Vice President
class VicePresident extends Manager
{
    // Constructor defaults to title "VP"
    public function __construct(string $name = "")
    {
        parent::__construct($name, "VP");
    }

    // Overrides greeting to specify VP role
    public function sayHello(string $recipient): void
    {
        echo "Hi $recipient, my name is VP $this->name" . PHP_EOL;
    }
}
