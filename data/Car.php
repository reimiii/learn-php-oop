<?php

namespace Data;

// Interface that requires a method to get the car brand
interface HasBrand
{
    public function getBrand(): string;
}

// Interface that requires a method to check if the car is under maintenance
interface IsMaintenance
{
    public function isMaintenance(): bool;
}

// Car interface extends HasBrand and adds driving-related methods
interface Car extends HasBrand
{
    public function drive(): void;

    public function getTire(): int;
}

// Avanza class implements Car and IsMaintenance interfaces
class Avanza implements Car, IsMaintenance
{
    // Implementation of drive behavior
    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    // Returns the number of tires
    public function getTire(): int
    {
        return 4;
    }

    // Returns the brand of the car
    public function getBrand(): string
    {
        return "Toyota";
    }

    // Indicates whether the car is under maintenance
    public function isMaintenance(): bool
    {
        return false;
    }
}
