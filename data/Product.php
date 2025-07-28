<?php

// Represents a product with protected name and price
class Product
{
    protected string $name;
    protected int $price;

    // Constructor to initialize product attributes
    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    // Getter for product name
    public function getName(): string
    {
        return $this->name;
    }

    // Getter for product price
    public function getPrice(): int
    {
        return $this->price;
    }
}

// Subclass used to access protected properties for testing or demonstration
class ProductDummy extends Product
{
    // Outputs product information using inherited protected properties
    public function info(): void
    {
        echo "Name: $this->name" . PHP_EOL;
        echo "Price: $this->price" . PHP_EOL;
    }
}
