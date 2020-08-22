<?php

namespace Alura\Bank\Model\Employee;

class Director extends Employee
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
