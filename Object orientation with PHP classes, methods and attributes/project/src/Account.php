<?php

class Account
{
  private string $ownerCPF;
  private string $ownerName;
  private float $balance;
  private static int $accountNumbers = 0;

  public function __construct(string $ownerCPF, string $ownerName)
  {
    $this->ownerCPF = $ownerCPF;
    $this->validatesOwnerName($ownerName);
    $this->ownerName = $ownerName;
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

  private function validatesOwnerName(string $ownerName)
  {
    if (strlen($ownerName) < 5) {
      echo "The name needs at least five characters!";
      exit();
    }
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

  public function getOwnerCPF(): string
  {
    return $this->ownerCPF;
  }

  // public function setOwnerCPF(string $ownerCPF)
  // {
  //   $this->ownerCPF = $ownerCPF;
  // }

  public function getOwnerName(): string
  {
    return $this->ownerName;
  }

  // public function setOwnerName(string $ownerName)
  // {
  //   $this->ownerName = $ownerName;
  // }
}
