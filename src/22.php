<?php
// Define an array of mathematical formulas
$formulas = [
    "sin(x) + cos(y)",
    "2 * sin(3x)",
    "ln(x^2 + y^2)",
    "e^(x+y+z)",
    "sqrt(x + y - z)"
];

// Select a random formula from the array
$randomFormula = $formulas[array_rand($formulas)];

// Output the selected formula
echo $randomFormula;
?>
