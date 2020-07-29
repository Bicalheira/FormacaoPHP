<?php

class Account
{
  private string $ownerCPF;
  private string $ownerName;
  private $balance = 0;

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

  // public function setBalance(float $balance)
  // {
  //   $this->balance = $balance;
  // }

  public function getBalance(): float
  {
    return $this->balance;
  }

  public function getOwnerCPF(): string
  {
    return $this->ownerCPF;
  }

  public function setOwnerCPF(string $ownerCPF)
  {
    $this->ownerCPF = $ownerCPF;
  }

  public function getOwnerName(): string
  {
    return $this->ownerName;
  }

  public function setOwnerName(string $ownerName)
  {
    $this->ownerName = $ownerName;
  }
}
