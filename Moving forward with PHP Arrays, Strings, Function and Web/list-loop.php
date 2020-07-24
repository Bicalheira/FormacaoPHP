<?php
$yearOldList = [20, 21, 20, 23, 24];
$names = ["João", "Maria", "Pedro", "Ana"];

for ($index = 0; $index < count($yearOldList); $index++) {
  echo $yearOldList[$index] . PHP_EOL;
}

echo PHP_EOL;

for ($index = 0; $index < count($names); $index++) {
  echo $names[$index] . PHP_EOL;
}
