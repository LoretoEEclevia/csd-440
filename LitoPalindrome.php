<!--
Loreto E Eclevia
Module 4
Bellevue University
August 16, 2024
-->


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker</title>
</head>
<body>
   <?php

// DO NOT FORGET Similar to your last three programming assignments, title the PHP file as <YourFirstName> Palindrome.php

/**
 * Function to check if a string is a palindrome.
 *
 * @param string $string The string to check.
 *
 * @return bool True if the string is a palindrome, false otherwise.
 */
   
function isPalindrome($string)
{
    // Remove spaces and convert to lowercase for case-insensitive comparison
    $normalizedString = strtolower(str_replace(' ', '', $string)); 
    $reversedString = strrev($normalizedString);

    return $normalizedString === $reversedString;
}

/**
 * Function to test if a given string is a palindrome and display the result.
 *
 * @param string $str The string to test.
 */

function testPalindrome($str) {
    // Remove spaces and convert to lowercase for case-insensitive comparison
    $normalizedString = strtolower(str_replace(' ', '', $str));
    $reversedString = strrev($normalizedString);

    echo "Original: $str<br>";
    echo "Reverse: $reversedString<br>";

    if (isPalindrome($str)) {
        echo "$str is a palindrome.<br><br>\n";
    } else {
        echo "$str is not a palindrome.<br><br>\n";
    }
}

// Examples to test
$palindromeExamples = [
    "radar",
    "noon",
    "php",
];

$nonPalindromeExamples = [
    "hello",
    "world",
    "programming"
];

// Testing palindrome examples
echo "<h2>Testing palindrome examples:</h2><br>\n";
foreach ($palindromeExamples as $example) {
    testPalindrome($example);
}

// Testing non-palindrome examples
echo "<h2>Testing non-palindrome examples:</h2><br>\n";
foreach ($nonPalindromeExamples as $example) {
    testPalindrome($example);
}
?>
</body>
</html>
