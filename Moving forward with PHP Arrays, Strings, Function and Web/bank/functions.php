<?php

function withdraw(array $account, float $withdrawValue)
{
  if ($withdrawValue > $account['balance']) {
    showMessage("{$account['owner']} you can not withdraw the money!");
  } else {
    $account['balance'] -= $withdrawValue;
  }

  return $account;
}

function deposit(array $account, float $depositValue)
{
  if ($depositValue > 0) {
    $account['balance'] += $depositValue;
  } else {
    showMessage("{$account['owner']} the value needs be positive");
  }
  return $account;
}

function showCurrentCounts(array $currentCounts)
{
  foreach ($currentCounts as $cpf => $account) {
    showMessage("{$cpf}\t{$account['owner']}\t{$account['balance']}");
  }
}

function showMessage(string $message)
{
  echo $message . PHP_EOL;
}

function ownerWithCapitalLetters(array &$account)
{
  $account['owner'] = mb_strtoupper($account['owner']);
}
