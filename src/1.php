
<?php
// Generate a random number between 1 and 100
$randomNumber = mt_rand(1, 100);

// Ask the user for their guess
echo "Guess a number between 1 and 100: ";
$userInput = trim(fgets(STDIN));

// Check if the user's guess is correct
if ($randomNumber == $userInput) {
    echo "You are correct! The answer was $randomNumber.";
} else {
    echo "Sorry, that's not correct. The answer was $randomNumber.";
}
?>