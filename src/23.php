<?php
  function randomMathProblem() {
    $problems = array(
      "1. A farmer sells apples and oranges. If he sells 20 apples and 40 oranges, how many fruits does he have?",
      "2. A baker made a batch of cookies. He baked 50 chocolate chip cookies and 75 peanut butter cookies. How many cookies did he make in total?",
      "3. A pet store has a sale on cats and dogs. If they sold 8 puppies and 12 kittens, how much money do they collect from selling cats and dogs?",
    );
    $randomProblem = array_random($problems);
    return $randomProblem;
  }
?>
