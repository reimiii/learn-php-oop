<?php

// Defines a base class named 'SocialMedia'.
// This class represents a generic social media platform.
class SocialMedia
{
    // Declares a public property 'name' of type string.
    // This property can be used to store the name of the social media platform (e.g., "Facebook", "Twitter").
    public string $name;
}

// Defines a class named 'Facebook' that extends (inherits from) 'SocialMedia'.
// This means 'Facebook' is a specific type of 'SocialMedia' and inherits its properties and methods.
class Facebook extends SocialMedia
{
    // Declares a public method named 'login'.
    // The 'final' keyword is crucial here: it prevents any child class from overriding this method.
    // It takes a '$username' and '$password' (both strings) and returns a boolean (true or false).
    final public function login(string $username, string $password): bool
    {
        // This method simply returns 'true', simulating a successful login for demonstration purposes.
        return true;
    }
}

// Defines a class named 'FakeFacebook' that attempts to extend 'Facebook'.
// This class is intended to simulate a fake version of Facebook.
// You'll notice comments indicating 'error' here because of the 'final' keyword used in the parent class.
class FakeFacebook extends Facebook
{
    // This method attempts to override the 'login' method inherited from the 'Facebook' class.
    // However, this will cause a **fatal error** in PHP.
    // The 'login' method in the 'Facebook' class was declared with the 'final' keyword,
    // which explicitly prevents any child class (like 'FakeFacebook') from changing its implementation.
    // PHP will stop execution with an error like:
    // "Cannot override final method Facebook::login()"
    public function login(string $username, string $password): bool
    {
        // This 'return false' would be the intended behavior for a "fake" login,
        // but it will never be reached because of the fatal error.
        return false;
    }
}
