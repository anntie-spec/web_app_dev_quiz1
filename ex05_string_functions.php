<?php
// Exercise 5 (Function): Reverse text, count characters, uppercase
function reverseText($text) {
    return strrev($text);
}
function countCharacters($text) {
    return strlen($text);
}
function makeUpper($text) {
    return strtoupper($text);
}
$word = "Hello PHP";
echo "Exercise 5: String Functions<br>";
echo "Original: $word<br>";
echo "Reversed: " . reverseText($word) . "<br>";
echo "Length: " . countCharacters($word) . "<br>";
echo "Uppercase: " . makeUpper($word) . "<br>";
