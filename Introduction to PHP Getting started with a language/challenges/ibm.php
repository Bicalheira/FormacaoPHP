<?php
$weight = 103;
$height = 1.71;
$ibm = $weight / ($height ** $height);

echo "Your IBM is = " . $ibm . PHP_EOL;

if ($ibm < 18.5) {
  echo "Under weight";
} else if ($ibm >= 18.5 && $ibm < 25) {
  echo "Normal weight";
} else if ($ibm >= 25 && $ibm < 30) {
  echo "Overweight";
} else if ($ibm >= 30 && $ibm < 35) {
  echo "Grade 1 obesity";
} else if ($ibm >= 35 && $ibm < 40) {
  echo "Grade 2 obesity";
} else if ($ibm >= 40) {
  echo "Grade 3 obesity";
}
