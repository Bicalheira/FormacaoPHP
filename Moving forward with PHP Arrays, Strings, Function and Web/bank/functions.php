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
