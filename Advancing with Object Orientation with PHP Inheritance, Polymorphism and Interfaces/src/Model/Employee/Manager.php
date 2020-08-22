<?php

namespace Alura\Bank\Model\Employee;

class Manager extends Employee
{
  public function calculatedBonus(): float
  {
    return $this->getSalary();
  }
}
