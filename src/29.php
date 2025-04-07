<?php
// This PHP script is designed to solve various mathematical problems and exercises.
// Feel free to use it in your projects or homework assignments!

function calculateArea($length, $width) {
    return $length * $width;
}

function findGCD($a, $b) {
    while ($b != 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    return $a;
}

// Example usage:
$area = calculateArea(5, 3);
echo "The area of the rectangle is: " . $area;

$gcdResult = findGCD(12, 8);
echo "The greatest common divisor of 12 and 8 is: " . $gcdResult;
