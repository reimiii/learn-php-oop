<?php

// Represents a product category with name and price classification
class Category
{
    private string $name;
    private bool $expensive;

    // Getter for category name
    public function getName(): string
    {
        return $this->name;
    }

    // Setter for category name with basic validation
    public function setName(string $name): void
    {
        if (trim($name) !== "") {
            $this->name = $name;
        }
    }

    // Returns whether the category is considered expensive
    public function isExpensive(): bool
    {
        return $this->expensive;
    }

    // Setter for expensive status
    public function setExpensive(bool $expensive): void
    {
        $this->expensive = $expensive;
    }
}
