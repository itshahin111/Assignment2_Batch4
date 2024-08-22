<?php
$strings = ["Hello", "World", "PHP", "Programming"];

function countVowels($string)
{
    $vowelCount = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u'];

    $lowercaseString = strtolower($string);

    for ($i = 0; $i < strlen($lowercaseString); $i++) {
        if (in_array($lowercaseString[$i], $vowels)) {
            $vowelCount++;
        }
    }

    return $vowelCount;
}

foreach ($strings as $string) {

    $vowelCount = countVowels($string);

    $reversedString = strrev($string);

    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}