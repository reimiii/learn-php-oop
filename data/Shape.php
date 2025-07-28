<?php

namespace Data;

// Base class representing a generic shape
class Shape
{
    // Returns the default corner count for a shape
    public function getCorner(): int
    {
        return -1;
    }
}

// Subclass representing a rectangle
class Rectangle extends Shape
{
    // Overrides corner count specific to rectangle
    public function getCorner(): int
    {
        return 4;
    }

    // Calls parent's getCorner method
    public function getParentCorner(): int
    {
        return parent::getCorner();
    }
}
