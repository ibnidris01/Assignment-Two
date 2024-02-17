<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function twoSum($nums, $target) {
    $indices = array();

    foreach ($nums as $key => $num) {
        $complement = $target - $num;

        // Check if the complement exists in the hash table
        if (array_key_exists($complement, $indices)) {
            // Return the indices of the two numbers that add up to the target
            return [$indices[$complement], $key];
        }

        // Add the current number and its index to the hash table
        $indices[$num] = $key;
    }

    // If no solution is found
    return "No valid indices found";
}

// Example usage
$nums = [2, 7, 11, 15];
$target = 9;

$result = twoSum($nums, $target);
print_r($result);

?>

</body>
</html>