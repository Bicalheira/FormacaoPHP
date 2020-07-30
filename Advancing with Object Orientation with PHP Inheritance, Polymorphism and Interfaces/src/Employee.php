<?php

class Employee
{
  private string $name;
  private Cpf $cpf;
  private string $position;

  public function __construct(string $name, Cpf $cpf, string $position)
  {
    $this->name = $name;
    $this->cpf = $cpf;
    $this->position = $position;
  }

  public function getName()
  {
    return $this->name;
  }


  public function getCpf()
  {
    return $this->cpf;
  }

  public function getPosition()
  {
    return $this->position;
  }
}
