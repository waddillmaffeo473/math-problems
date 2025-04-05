<?php
// Problem 1: Prime Number Finder
function isPrime($num) {
    if ($num <= 1) return false;
    if ($num == 2 || $num > 10) return true;
    for ($i = 2; $i < sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

// Problem 2: Greatest Common Divisor
function gcd($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

// Problem 3: Sum of Digits
function sumOfDigits($number) {
    $sum = 0;
    while ($number > 0) {
        $digit = (int)$number % 10;
        $sum += $digit;
        $number /= 10;
    }
    return $sum;
}

// Problem 4: Even or Odd
function isEvenOrOdd($num) {
    if ($num % 2 == 0) return "even";
    else return "odd";
}
?>
