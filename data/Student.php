<?php

// Defines the 'Student' class, representing a student entity with various attributes and custom behaviors.
class Student
{
    // Public properties: These are directly accessible from outside the class.
    public string $id; // Unique identifier for the student (e.g., "S001").
    public string $name; // The student's full name.
    public int $score; // The student's numerical score or value.

    // Private property: This property is only accessible from within the 'Student' class itself.
    // It's often used for internal data that shouldn't be directly manipulated from outside.
    private string $internalNote;

    // --- Regular Method ---

    // A public method to set the value of the private 'internalNote' property.
    // This provides controlled access to the private data.
    public function setInternalNote(string $note): void
    {
        $this->internalNote = $note;
    }

    // --- Magic Methods ---

    // __clone() Magic Method:
    // This method is automatically called when an object is cloned (e.g., `$newStudent = clone $originalStudent;`).
    // It's used to customize the cloning process.
    // Here, it demonstrates removing a specific property ('internalNote') from the cloned object.
    // This means the cloned student will not have the 'internalNote' from the original.
    public function __clone(): void
    {
        unset($this->internalNote);
    }

    // __toString() Magic Method:
    // This method is automatically called when an object is treated as a string (e.g., echoed or cast to string).
    // It must return a string representation of the object.
    // It's very useful for debugging or logging objects in a human-readable format.
    public function __toString(): string
    {
        return "Student ID: $this->id, Name: $this->name, Score: $this->score";
    }

    // __invoke() Magic Method:
    // This method is automatically called when an object is treated as a function (e.g., `$studentObject(...args);`).
    // It allows an object to be "callable".
    // The `...$arguments` syntax means it can accept any number of arguments.
    public function __invoke(...$arguments): void
    {
        // Joins all provided arguments into a single string separated by commas.
        $joinedArguments = join(", ", $arguments);
        // Prints a message indicating that the student object was invoked as a function, along with the arguments.
        echo "Invoked student object with arguments: $joinedArguments" .
            PHP_EOL;
    }

    // __debugInfo() Magic Method:
    // This method is automatically called by functions like `var_dump()` when inspecting an object.
    // It allows you to customize what information is displayed during debugging.
    // Here, it returns an associative array of properties to show, plus custom debugging info.
    // Note that the 'internalNote' (private property) is included here for debugging visibility.
    public function __debugInfo(): array
    {
        return [
            "student_id" => $this->id,
            "full_name" => $this->name,
            "final_score" => $this->score,
            "private_note" => $this->internalNote, // Private property made visible for debug output
            "debug_source" => "PHP Class Example", // Custom debug information
            "debug_version" => "1.0.0",
        ];
    }
}
