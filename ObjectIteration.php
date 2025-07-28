<?php

// Defines a class named 'Data' that implements the 'IteratorAggregate' interface.
// Implementing this interface means the class promises to provide a method
// named 'getIterator()', which will return an object capable of being iterated over.
class Data implements IteratorAggregate
{
    // Declares several properties with different visibility levels:
    var string $first = "First";      // 'var' is an alias for 'public' for properties.
    public string $second = "Second"; // Explicitly public.
    private string $third = "Third";   // Private property, accessible only within this class.
    protected string $forth = "Forth"; // Protected property, accessible within this class and its child classes.

    // This method is required by the 'IteratorAggregate' interface.
    // It's responsible for returning an Iterator (or Traversable) object.
    // In this updated example, we are using 'yield' to create a Generator,
    // which is a simpler way to implement an iterator.
    public function getIterator()
    {
        // 'yield' is used to define a Generator.
        // A Generator is a simple iterator that allows you to write iteration code
        // that's much more concise than implementing the full Iterator interface manually.
        // Each 'yield' statement provides a key-value pair for the current iteration.
        // When you iterate over the 'Data' object in a 'foreach' loop,
        // it will call this method and receive values one by one from these 'yield' statements.
        yield "first" => $this->first;
        yield "second" => $this->second;
        yield "third" => $this->third;
        yield "forth" => $this->forth;
        // Notice that even though 'third' and 'forth' are private/protected,
        // they can be accessed *from within the class itself* in this method,
        // allowing them to be exposed during iteration.
    }

    // The commented-out 'getIterator' method shows an alternative approach
    // where you construct an 'ArrayIterator' from an associative array of properties.
    // This is also a valid way to implement 'IteratorAggregate'.
    // public function getIterator()
    // {
    //     $array = [
    //         "first" => $this->first,
    //         "second" => $this->second,
    //         "third" => $this->third,
    //         "forth" => $this->forth,
    //     ];
    //
    //     return new ArrayIterator($array);
    // }
}

// ---

// Create a new instance of the 'Data' class.
$dataSet = new Data();

// Use a 'foreach' loop to iterate over the '$dataSet' object.
// Because the 'Data' class implements 'IteratorAggregate' and provides a 'getIterator()' method,
// PHP knows how to traverse its "properties" (as defined by 'getIterator()').
// The loop will get each key-value pair yielded by the 'getIterator' method.
foreach ($dataSet as $property => $value) {
    // Prints each property name and its corresponding value.
    echo "$property : $value" . PHP_EOL;
}
