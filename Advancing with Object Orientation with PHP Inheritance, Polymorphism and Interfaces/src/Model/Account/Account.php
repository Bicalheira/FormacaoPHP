<?php

namespace Alura\Bank\Model\Account;


abstract class Account
{
  protected Owner $owner;
  protected float $balance;
  protected static int $accountNumbers = 0;

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

    $withdrawFee = $withdrawValue * $this->percentageRate();

    $withdrawFinalValue = $withdrawValue + $withdrawFee;

    if ($withdrawValue > $this->balance) {
      echo "Balance unavailable!" . PHP_EOL;
      return;
    }

    $this->balance -= $withdrawFinalValue;
  }

  public function deposit(float $depositValue): void
  {
    if ($depositValue < 0) {
      echo "The deposit value need be plus than zero!" . PHP_EOL;
      return;
    }

    $this->balance += $depositValue;
  }

  abstract protected function percentageRate(): float;

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
