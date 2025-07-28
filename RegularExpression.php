<?php

// --- Section 1: Finding All Matches (`preg_match_all`) ---

// An empty array to store all found matches.
$allMatches = [];

$numberOfMatches = preg_match_all(
    "/alex|david|ryan/i",
    "Alex and David are friends with Ryan.",
    $allMatches,
);

// Dumps the total number of matches found.
var_dump($numberOfMatches); // Expected: int(3)

// Dumps the array of matches.
// Each full match and any captured groups are stored in this array.
// For `/pattern/` without capturing groups, it typically results in:
// array(1) {
//   [0]=>
//   array(3) {
//     [0]=> string(4) "Alex"
//     [1]=> string(5) "David"
//     [2]=> string(4) "Ryan"
//   }
// }
// If there were capturing groups, there would be more sub-arrays.
var_dump($allMatches);

echo "---" . PHP_EOL; // Separator for clarity

// --- Section 2: Replacing Patterns (`preg_replace`) ---

// 1. `preg_replace(pattern, replacement, subject)`:
//    - `/swearword1|swearword2/i`: The pattern to search for (case-insensitive).
//      - Using generic "swearword" placeholders to avoid actual offensive terms.
//    - "***": The string to replace each found pattern with.
//    - "You are a swearword1 and a swearword2!": The original string to perform replacements on.
// The function returns the modified string.
$censoredString = preg_replace(
    "/idiot|moron/i",
    "***",
    "That person is an IDIOT and a MORON!",
);

// Dumps the resulting string after replacements.
var_dump($censoredString); // Expected: string(33) "That person is an *** and a ***!"

echo "---" . PHP_EOL; // Separator for clarity

// --- Section 3: Splitting Strings by Pattern (`preg_split`) ---

// 1. `preg_split(pattern, subject)`:
//    - `/[\s,-]/`: The pattern defining the delimiters to split the string by.
//      - `\s`: Matches any whitespace character (space, tab, newline, etc.).
//      - `,`: Matches a comma.
//      - `-`: Matches a hyphen.
//      - `[]`: Character class, meaning match any single character inside.
//    - "John Doe,Software-Engineer,NYC Today": The string to split.
// The function returns an array of substrings.
$splitParts = preg_split("/[\s,-]/", "John Doe,Software-Engineer,NYC Today");

// Dumps the array of substrings.
var_dump($splitParts);
/*
Expected Output:
array(6) {
  [0]=> string(4) "John"
  [1]=> string(3) "Doe"
  [2]=> string(8) "Software"
  [3]=> string(8) "Engineer"
  [4] string(3) "NYC"
  [5]=> string(5) "Today"
}
*/
