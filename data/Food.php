<?php

namespace Data;

// General class representing food
class Food
{
    // Base food class; can be extended by specific food types
}

// Specific type of food suitable for animals
class AnimalFood extends Food
{
    // Specialized subclass used by Animal::eat()
}
