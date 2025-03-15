<?php
$numbers = array(1, 2, 3, 4, 5);
shuffle($numbers);
$a = $numbers[0];
$b = $numbers[1];
$c = $numbers[2];
$d = $numbers[3];
$e = $numbers[4];
echo "The equation is: {$a} + 2({$b}) - 3({$c}) = {$d}\n";
echo "The answer is: {$e}";
?>