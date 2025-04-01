<?php
// This PHP script is designed to help with some basic arithmetic operations.
// You can adjust the values in the `$num1` and `$num2` variables based on your needs.

// Define a constant for division
define('DIVISION', 0);

// Calculate and display the result of $num1 divided by $num2
if ($num1 != 0 && $num2 == DIVISION) {
    echo "The result is: " . divide($num1, $num2);
} else {
    echo "Error: Division by zero is not allowed.";
}

// Function to divide two numbers
function divide($num1, $num2) {
    return $num1 / $num2;
}
?>
