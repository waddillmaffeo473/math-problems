
<?php

$num1 = rand(1, 10);
$num2 = rand(1, 10);

if ($num1 > $num2) {
    echo "The greatest common divisor of $num1 and $num2 is $num1";
} else if ($num2 > $num1) {
    echo "The greatest common divisor of $num1 and $num2 is $num2";
} else {
    echo "The numbers are equal";
}

?>