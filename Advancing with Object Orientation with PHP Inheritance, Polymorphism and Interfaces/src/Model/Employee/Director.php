<?php

namespace Alura\Bank\Model\Employee;

use Alura\Bank\Model\Authentic;

class Director extends Employee implements Authentic
{
  public function calculatedBonus(): float
  {
    return $this->getSalary() * 2;
  }

  public function canAuthenticate(String $password): bool
  {
    return $password == "1234";
  }
}
