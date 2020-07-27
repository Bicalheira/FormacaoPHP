<?php

$currentCounts = [
  '111.111.111-11' => ['owner' => 'Lucas', 'balance' => 1000],
  '222.222.222-22' => ['owner' => 'Bicalho', 'balance' => 2000],
  '333.333.333-33' => ['owner' => 'Fraga', 'balance' => 10000]
];

$currentCounts['444.444.444-44'] = ['owner' => 'Layla', 'balance' => 50000];

foreach ($currentCounts as $cpf => $account) {
  echo $cpf . PHP_EOL;
}
