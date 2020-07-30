<?php

class Owner
{
  private Cpf $cpf;
  private string $name;

  public function __construct(Cpf $cpf, string $name)
  {
    $this->cpf = $cpf;
    $this->validatesOwnerName($name);
    $this->name = $name;
  }

  public function getCpf()
  {
    return $this->cpf->getCpf();
  }

  public function getName()
  {
    return $this->name;
  }

  private function validatesOwnerName(string $ownerName)
  {
    if (strlen($ownerName) < 5) {
      echo "The name needs at least five characters!";
      exit();
    }
  }
}
