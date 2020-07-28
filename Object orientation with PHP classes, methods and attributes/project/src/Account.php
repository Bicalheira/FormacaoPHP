<?php

class Account
{
  public string $ownerCPF;
  public string $ownerName;
  public float $balance = 0;

  public function withdraw(float $withdrawValue)
  {

    if ($withdrawValue > $this->balance) {
      echo "Balance unavailable!" . PHP_EOL;
      return;
    }

    $this->balance -= $withdrawValue;
  }

  public function deposit(float $depositValue)
  {
    if ($depositValue < 0) {
      echo "The deposit value need be plus than zero!" . PHP_EOL;
      return;
    }

    $this->balance += $depositValue;
  }

  public function transfer(float $transferValue, Account $destinationAccount)
  {
    if ($transferValue > $this->balance) {
      echo "Balance unavailable!" . PHP_EOL;
      return;
    }
    if (!$this->withdraw($transferValue)) {
      $destinationAccount->deposit($transferValue);
    } 
  }
}
