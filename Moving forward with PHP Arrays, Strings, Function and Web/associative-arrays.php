<?php

$account1 = ['owner' => 'Lucas', 'balance' => 1000];
$account2 = ['owner' => 'Bicalho', 'balance' => 2000];
$account3 = ['owner' => 'Fraga', 'balance' => 10000];

$currentCounts = [$account1, $account2, $account3];

for ($index = 0; $index < count($currentCounts); $index++) {
  echo $currentCounts[$index]['owner'] . PHP_EOL;
}
