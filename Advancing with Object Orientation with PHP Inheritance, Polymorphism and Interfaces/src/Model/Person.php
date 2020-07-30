<?php

namespace Alura\Bank\Model;

class Person
{
  protected string $name;
  protected Cpf $cpf;

  public function __construct(string $name, Cpf $cpf)
  {
    $this->validatesName($name);
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

  protected function validatesName(string $ownerName)
  {
    if (strlen($ownerName) < 5) {
      echo "The name needs at least five characters!";
      exit();
    }
  }
}
