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
    } else {
      $this->balance -= $withdrawValue;
    }
  }

  public function deposit(float $depositValue)
  {
    if($depositValue > 0){
      $this->balance += $depositValue;
    } else {
      echo "The deposit value need be plus than zero!";
    }
  }
}
