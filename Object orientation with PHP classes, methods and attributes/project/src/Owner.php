<?php

class Owner
{
  private string $cpf;
  private string $name;

  public function __construct(string $cpf, string $name)
  {
    $this->cpf = $cpf;
    $this->validatesOwnerName($name)  ;
    $this->name = $name;
  }

  public function getCpf()
  {
    return $this->cpf;
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
