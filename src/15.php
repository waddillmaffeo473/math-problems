 <?php

// Get a random number between 1 and 100
$randomNumber = rand(1, 100);

// Ask user to guess the number
echo "Guess the number! (1-100)";

// Read user input
$guess = readline();

// Check if the guess is correct
if ($guess === $randomNumber) {
    echo "Correct! The number was $randomNumber.";
} else {
    echo "Incorrect. The number was $randomNumber.";
}

?>