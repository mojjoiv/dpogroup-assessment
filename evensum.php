8>//Write a PHP function that takes an array of integers and returns the sum of all even numbers
in the array.//

<?php
function sumEvenNumbers($numbers) {
    $evenSum = 0;

    // Go through the array of integers
    foreach ($numbers as $number) {
        // Check if the number is even
        if ($number % 2 == 0) {
            // Add the numbers to the sum
            $evenSum += $number;
        }
    }

    return $evenSum;
}
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$evenSum = sumEvenNumbers($numbers);

echo "The sum of even numbers in the array is: $evenSum";
