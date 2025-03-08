<?php
$math_problems = array(
    '2 + 2',
    '5 x 3',
    '10 - 5',
    '7 / 3',
    '4 ^ 2',
);

$rand_num = rand(0, count($math_problems) - 1);

echo $math_problems[$rand_num];
?>