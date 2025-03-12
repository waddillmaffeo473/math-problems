  <?php
    $num1 = rand(1, 9);
    $num2 = rand(1, 9);
    $operator = rand(1, 4);

    switch ($operator) {
      case 1:
        echo "What is " . $num1 . " + " . $num2 . "?";
        break;
      case 2:
        echo "What is " . $num1 . " - " . $num2 . "?";
        break;
      case 3:
        echo "What is " . $num1 . " x " . $num2 . "?";
        break;
      case 4:
        echo "What is " . $num1 . " / " . $num2 . "?";
    }

    $user_answer = readline();

    if ($operator == 1) {
      if ($user_answer == $num1 + $num2) {
        echo "That's correct! You are amazing at math.\n";
      } else {
        echo "Sorry, that's incorrect. The answer is " . ($num1 + $num2) . ".\n";
      }
    } elseif ($operator == 2) {
      if ($user_answer == $num1 - $num2) {
        echo "That's correct! You are amazing at math.\n";
      } else {
        echo "Sorry, that's incorrect. The answer is " . ($num1 - $num2) . ".\n";
      }
    } elseif ($operator == 3) {
      if ($user_answer == $num1 * $num2) {
        echo "That's correct! You are amazing at math.\n";
      } else {
        echo "Sorry, that's incorrect. The answer is " . ($num1 * $num2) . ".\n";
      }
    } elseif ($operator == 4) {
      if ($user_answer == $num1 / $num2) {
        echo "That's correct! You are amazing at math.\n";
      } else {
        echo "Sorry, that's incorrect. The answer is " . ($num1 / $num2) . ".\n";
      }
    }
  ?>