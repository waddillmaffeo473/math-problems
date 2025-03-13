<?php

function getRandomMathProblem() {
    $numbers = [1, 2, 3, 4, 5];
    shuffle($numbers);
    $a = $numbers[0];
    $b = $numbers[1];
    $c = $numbers[2];
    return "What is the value of $a x $b + $c?";
}

?>