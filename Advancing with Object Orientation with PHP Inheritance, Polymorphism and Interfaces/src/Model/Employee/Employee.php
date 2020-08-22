<?php

namespace Alura\Bank\Model\Employee;

use Alura\Bank\Model\{Person, Cpf};



abstract class Employee extends Person
{
  private string $position;
  private float $salary;

  public function __construct(string $name, Cpf $cpf, string $position, float $salary)
  {
    parent::__construct($name, $cpf);
    $this->position = $position;
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

  public function calculatedBonus(): float
  {
    return $this->salary * 0.1;
  }

  public function increaseSalary($increaseValue): void
  {
    if($increaseValue < 0){
      echo "Increase need be a positive value!";
    } else {
      $this->salary += $increaseValue;
    }
  }
}
