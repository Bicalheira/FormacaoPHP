<?php

namespace Alura\Bank\Model\Employee;

use Alura\Bank\Model\{Person, Cpf};



abstract class Employee extends Person
{
  private float $salary;

  public function __construct(string $name, Cpf $cpf, float $salary)
  {
    parent::__construct($name, $cpf);
    $this->salary = $salary;
  }

  function getSalary(): float
  {
    return $this->salary;
  }

  public function getPosition(): string
  {
    return $this->position;
  }

  public function alterName(string $name): void
  {
    $this->validatesName($name);
    $this->name = $name;
  }

  public function increaseSalary(float $increaseValue): void
  {
    if ($increaseValue < 0) {
      echo "Increase need be a positive value!";
    } else {
      $this->salary += $increaseValue;
    }
  }

  abstract public function calculatedBonus(): float;
}
