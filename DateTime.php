<?php

// --- Section 1: Creating and Modifying a Specific Date and Time ---

// 1. Instantiating a DateTime Object
// Creates a new DateTime object. By default, it's initialized to the current date and time
// in the server's default timezone.
$eventDateTime = new DateTime();

// 2. Setting a Specific Date
// Sets the year, month, and day for the DateTime object.
$eventDateTime->setDate(1990, 1, 20); // Sets the date to January 20, 1990

// 3. Setting a Specific Time
// Sets the hour, minute, second, and microsecond for the DateTime object.
$eventDateTime->setTime(10, 10, 10, 0); // Sets the time to 10:10:10 AM

// 4. Adding a Time Interval (Future Date)
// Creates a DateInterval object representing "Period 1 Year" (P1Y).
// 'P' stands for period, 'Y' for year.
$oneYearLater = new DateInterval("P1Y");
// Adds this interval to $eventDateTime, effectively moving it one year into the future.
$eventDateTime->add($oneYearLater);

// 5. Subtracting a Time Interval (Past Date)
// Creates another DateInterval object, representing "Period 1 Month" (P1M).
$oneMonthEarlier = new DateInterval("P1M");
// Sets the 'invert' property to true. When 'invert' is true, adding the interval
// will actually subtract it. So, this effectively moves the date one month into the past.
$oneMonthEarlier->invert = true;
$eventDateTime->add($oneMonthEarlier); // Subtracts one month

// Dumps the final state of the '$eventDateTime' object.
// It will show the date after adding 1 year and then subtracting 1 month.
// (e.g., if starting from 1990-01-20, it would be 1990-12-20)
var_dump($eventDateTime);

echo "---" . PHP_EOL; // Separator for clarity

// --- Section 2: Working with Current Date/Time and Timezones ---

// 1. Getting Current Date and Time
// Creates a new DateTime object representing the current date and time.
$currentTime = new DateTime();
var_dump($currentTime); // Dumps the current time in the server's default timezone.

// 2. Changing Timezone
// Creates a new DateTimeZone object for "America/Toronto".
$torontoTimezone = new DateTimeZone("America/Toronto");
// Sets the timezone for the '$currentTime' object. This changes the displayed time
// to reflect the equivalent time in the specified timezone, *without* changing the
// underlying timestamp (which is always UTC internally).
$currentTime->setTimezone($torontoTimezone);
var_dump($currentTime); // Dumps the current time, adjusted for the Toronto timezone.

// 3. Formatting Date and Time for Display
// Uses the 'format()' method to convert the DateTime object into a human-readable string.
// "Y-m-d H:i:s" is a common format (Year-Month-Day Hour:Minute:Second).
$formattedString = $currentTime->format("Y-m-d H:i:s");
echo "Current Time (Toronto) : $formattedString" . PHP_EOL;

echo "---" . PHP_EOL; // Separator for clarity

// --- Section 3: Creating DateTime Objects from Strings ---

// 1. Creating a DateTime Object from a Specific Format
// The static method 'createFromFormat()' is used to parse a date/time string
// according to a specified format. This is crucial when dealing with dates
// in non-standard or custom formats.
// Arguments: format string, date/time string, (optional) DateTimeZone object.
$parsedDate = DateTime::createFromFormat(
    "Y-m-d H:i:s", // Expected format of the input string
    "2020-10-10 10:10:10", // The input date/time string
    new DateTimeZone("Asia/Jakarta"), // Timezone for the input string
);

// 2. Checking for Successful Parsing
// 'createFromFormat()' returns a DateTime object on success, or 'false' on failure
// (e.g., if the string doesn't match the format).
if ($parsedDate instanceof DateTime) {
    // Check if it's a DateTime object
    var_dump($parsedDate); // Dumps the successfully parsed DateTime object.
} else {
    echo "Incorrect format provided for parsing." . PHP_EOL;
}
