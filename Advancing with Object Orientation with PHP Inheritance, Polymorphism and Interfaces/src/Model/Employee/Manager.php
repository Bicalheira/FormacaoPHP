<?php

namespace Alura\Bank\Model\Employee;

use Alura\Bank\Model\Authentic;

class Manager extends Employee implements Authentic
{
  public function calculatedBonus(): float
  {
    return $this->getSalary();
  }

  public function canAuthenticate(string $password): bool
  {
    return $password === "4321";
  }
}
