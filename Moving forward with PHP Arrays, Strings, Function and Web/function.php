<?php

function withdraw($account, $withdrawValue)
{
  if ($withdrawValue > $account['balance']) {
    showMessage("{$account['owner']} you can not withdraw the money!");
  } else {
    $account['balance'] -= $withdrawValue;
  }

  return $account;
}

function deposit($account, $depositValue)
{
  if ($depositValue > 0) {
    $account['balance'] += $depositValue;
  } else {
    showMessage("{$account['owner']} the value needs be positive");
  }
  return $account;
}

function showCurrentCounts($currentCounts)
{
  foreach ($currentCounts as $cpf => $account) {
    showMessage("{$cpf}\t{$account['owner']}\t{$account['balance']}");
  }
}

function showMessage($message)
{
  echo $message . PHP_EOL;
}

$currentCounts = [
  '111.111.111-11' => ['owner' => 'Lucas', 'balance' => 700],
  '222.222.222-22' => ['owner' => 'Bicalho', 'balance' => 2000],
  '333.333.333-33' => ['owner' => 'Fraga', 'balance' => 300]
];

showCurrentCounts($currentCounts);

showMessage("");

$currentCounts['111.111.111-11'] = withdraw($currentCounts['111.111.111-11'], 500);
$currentCounts['222.222.222-22'] = withdraw($currentCounts['222.222.222-22'], 500);
$currentCounts['333.333.333-33'] = withdraw($currentCounts['333.333.333-33'], 500);

showMessage("");

$currentCounts['111.111.111-11'] = deposit($currentCounts['111.111.111-11'], -500);
$currentCounts['222.222.222-22'] = deposit($currentCounts['222.222.222-22'], 2000);
$currentCounts['333.333.333-33'] = deposit($currentCounts['333.333.333-33'], 500);

showMessage("");

showCurrentCounts($currentCounts);
