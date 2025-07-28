<?php

namespace Data;

// Abstract base class representing a general location
abstract class Location
{
    public string $name;
}

// Represents a city-level location
class City extends Location {}

// Represents a province-level location
class Province extends Location {}

// Represents a country-level location
class Country extends Location {}
