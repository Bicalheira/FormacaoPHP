<?php

class Person
{
  public string $name;
  public Cpf $cpf;

  public function __construct(string $name, Cpf $cpf)
  {
    $this->validatesOwnerName($name);
    $this->name = $name;
    $this->cpf = $cpf;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function getCpf(): string
  {
    return $this->cpf->getCpf();
  }

  public function validatesOwnerName(string $ownerName)
  {
    if (strlen($ownerName) < 5) {
      echo "The name needs at least five characters!";
      exit();
    }
  }
}
