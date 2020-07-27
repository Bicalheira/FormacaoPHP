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

function showCurrentAccounts(array $currentCounts)
{
  foreach ($currentCounts as $cpf => $account) {
    ['owner' => $owner, 'balance' => $balance] = $account;
    showMessage("{$cpf}\t$owner\t$balance");
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

// function removerOwner(array $account){
//   unset($account);
//   echo "{$account['owner']} was been deleted!";
// }