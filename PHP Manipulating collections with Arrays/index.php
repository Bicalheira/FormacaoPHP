<?php

$grades = [9, 3, 10, 5, 10, 8];

echo "<p?>The English test grade is: $grades[0]</p>";
echo "<p>The Math test grade is: $grades[1]</p>";
echo "<p>The Geography test grade is: $grades[2]</p>";
echo "<p>The History test grade is: $grades[3]</p>";
echo "<p>The Chemistry test grade is: $grades[4]</p>";
echo "<p>The Art test grade is: $grades[5]</p>";

$quantity = sizeof($grades);

$sum = 0;
for ($i = 0; $i < $quantity; $i++) {
  $sum += $grades[$i];
}

$average = $sum / $quantity;

echo "<p>Average is: $average</p>";
