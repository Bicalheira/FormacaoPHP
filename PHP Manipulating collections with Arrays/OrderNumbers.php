<?php

$grades = [9, 3, 10, 5, 10, 8];
// $grades = [];

require_once "Calculator.php";

$caculator = new Calculator();

$average = $caculator->calculateAverage($grades);

if ($average) {
  echo "<p>Average is: $average</p>";
} else {
  echo "<p>It was impossible calculate the average</p>";
}

$balances = [2500, 3000, 4400, 1000, 8700, 9000];

foreach ($balances as $balance) {
  echo "<p>The balance is: $balance</p>";
}

sort($balances);

echo "Smaller balance: $balances[0]";
