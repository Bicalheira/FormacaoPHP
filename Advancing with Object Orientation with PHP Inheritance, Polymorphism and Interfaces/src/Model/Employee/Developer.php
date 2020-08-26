<?php

namespace Alura\Bank\Model\Employee;

class Developer extends Employee
{

  function levelUp()
  {
    $this->increaseSalary($this->getSalary() * 0.75);
  }

  public function calculatedBonus(): float
  {
    return 500;
  }
}
