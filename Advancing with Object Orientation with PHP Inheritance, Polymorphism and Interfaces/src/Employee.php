<?php

class Employee extends Person
{
  private string $position;

  public function __construct(string $name, Cpf $cpf, string $position)
  {
    parent::__construct($name, $cpf);
    $this->position = $position;
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
}
