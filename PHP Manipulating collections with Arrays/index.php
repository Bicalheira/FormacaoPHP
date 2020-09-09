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
