<?php

// Task 1: Develop a function that accepts an array of integers and calculates the sum of all the even values in the array.

/**
 * Returns the sum of the even numbers in the list
 * 
 * @param array $numbers_list
 * @return int
 */
function calculate_even_sum($numbers_list) {
    return array_reduce($numbers_list, function ($carry, $item) {
        // If the number is even, add it to the sum
        return $carry + ($item % 2 === 0 ? $item : 0);
    }, 0);
}

// Test the function
$numbers_list = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo "The sum of the even numbers in the list is: " . calculate_even_sum($numbers_list). "\n";

echo "\n";
echo "\n";


// Task 2: A number is a palindrome if it reads the same forwards and backwards, like 101, 555, or 20102. Write a function that checks if a given string has this property.

/**
 * Checks if a number is a palindrome
 * 
 * We can use multiple approaches here:
 *      1. Convert the number to a string, and compare the left and right strings
 *      2. Use two pointer algorithm
 * 
 * As numbers have limited length of characters, we can use the first approach
 * 
 * @param int $number
 * @return bool
 */
function is_palindrome($number) {
    // Convert the number to a string
    $number = "".$number;

    // get the character length if the number
    $length = strlen($number);

    // get the middle character
    $mid = floor(strlen($number) / 2);

    // take out left and right strings
    $left = substr($number, 0, $mid);
    $right = substr($number, $length%2 === 0 ? $mid : $mid + 1);

    echo "Left: $left, Right: $right\n";

    // reverse the right string and match
    return $left === strrev($right);
}

// test the function
echo "Is 101 a palindrome? " . (is_palindrome(101) ? "Yes" : "No") . "\n";
echo "Is 555 a palindrome? " . (is_palindrome(555) ? "Yes" : "No") . "\n";
echo "Is 20102 a palindrome? " . (is_palindrome(20102) ? "Yes" : "No") . "\n";
echo "Is 221122 a palindrome? " . (is_palindrome(221122) ? "Yes" : "No") . "\n";
echo "Is 444999 a palindrome? " . (is_palindrome(444999) ? "Yes" : "No") . "\n";
echo "Is 5858 a palindrome? " . (is_palindrome(5858) ? "Yes" : "No") . "\n";

echo "\n";
echo "\n";


// Task 3: Build a function that identifies the second-highest value in a list of integers.
/**
 * Returns the second highest number in the list
 * 
 * The quick and dirty approach is to sort the list and pick the second value
 * 
 * @param array $numbers_list
 * @return int
 */
function get_second_highest($numbers_list) {
    // look for at least 2 numbers
    if (count($numbers_list) < 2) {
        throw new Exception("List must have at least 2 numbers");
    }

    // Initialize max1 and max2 as the lowest possible
    $max1 = $max2 = -INF;

    // loop through the list
    foreach ($numbers_list as $number) {

        // check if the number is greater than the first max
        if ($number > $max1) {

            // set max1 as the second max
            $max2 = $max1;

            // set new max
            $max1 = $number;
        }
        
        // if the number is greater than the second max and not same as max1
        elseif ($number > $max2 && $number != $max1) {
            $max2 = $number;
        }
    }

    return $max2;
}

// Test the function
$numbers_list = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo "The second highest number in the list is: " . get_second_highest($numbers_list). "\n";
$numbers_list = [40, 50, 60, 5, 8 ,12, 16];
echo "The second highest number in the list is: " . get_second_highest($numbers_list). "\n";