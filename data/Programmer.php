<?php

// Base class representing a general programmer
class Programmer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

// Subclass representing a backend programmer
class BackendProgrammer extends Programmer {}

// Subclass representing a frontend programmer
class FrontendProgrammer extends Programmer {}

// Company class that employs a programmer
class Company
{
    public Programmer $programmer;
}

// Function to greet programmer based on their specialization
function sayHelloProgrammer(Programmer $programmer): void
{
    if ($programmer instanceof BackendProgrammer) {
        echo "Hello Backend Programmer $programmer->name" . PHP_EOL;
    } elseif ($programmer instanceof FrontendProgrammer) {
        echo "Hello Frontend Programmer $programmer->name" . PHP_EOL;
    } elseif ($programmer instanceof Programmer) {
        echo "Hello Programmer $programmer->name" . PHP_EOL;
    }
}
