<?php

$yearsOld = 23;
$answer = "";
$companion = false;

if ($companion == true) {
  $answer = "And a companion.";
} else {
  $answer = "And you are alone.";
}

echo PHP_EOL;

echo "You can only enter if you are over 18 or if you have a companion." . PHP_EOL;
echo "You have $yearsOld... $answer" . PHP_EOL;

echo PHP_EOL;

/*
if ($yearsOld == 18 || yearsOld > 18)
if ($yearsOld == 18 or yearsOld > 18)
if ($yearsOld >= 18 && $name == "Lucas")
if ($yearsOld >= 18 and $name == "Lucas")
*/

if ($yearsOld >= 18 || $companion == true) {
  echo "You can come in! You are welcome!";
} else {
  echo "You can not come in! I am sorry.";
}

echo PHP_EOL;
echo PHP_EOL;
echo "Goodbye!";
