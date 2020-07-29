<?php

class Account
{
  private Owner $owner;
  private float $balance;
  private static int $accountNumbers = 0;

  public function __construct(Owner $owner)
  {
    $this->owner = $owner;
    $this->balance = 0;

    self::$accountNumbers++;
  }

  public function __destruct()
  {
    self::$accountNumbers--;
  }

  public static function recoverAccountNumbers(): int
  {
    return self::$accountNumbers;
  }

  public function withdraw(float $withdrawValue): void
  {

    if ($withdrawValue > $this->balance) {
      echo "Balance unavailable!" . PHP_EOL;
      return;
    }

    $this->balance -= $withdrawValue;
  }

  public function deposit(float $depositValue): void
  {
    if ($depositValue < 0) {
      echo "The deposit value need be plus than zero!" . PHP_EOL;
      return;
    }

    $this->balance += $depositValue;
  }

  public function transfer(float $transferValue, Account $destinationAccount): void
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

  public function getOwner(): string
  {
    return $this->owner->getName();
  }

  
  public function getOwnerCPF(): string
  {
    return $this->owner->getCpf();
  }
}
