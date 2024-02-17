<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function isPalindrome($s) {
    // Remove non-alphanumeric characters and convert to lowercase
    $cleanedString = strtolower(preg_replace("/[^a-zA-Z0-9]/", "", $s));

    // Compare the cleaned string with its reverse
    return $cleanedString == strrev($cleanedString);
}

// Example usage
$string1 = "A man, a plan, a canal, Panama!";
$string2 = "Hello, World!";

echo "Is \"$string1\" a palindrome? " . (isPalindrome($string1) ? "Yes" : "No") . "\n";
echo "Is \"$string2\" a palindrome? " . (isPalindrome($string2) ? "Yes" : "No") . "\n";

?>

</body>
</html>