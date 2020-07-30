<?php

class Owner
{
  private Cpf $cpf;
  private string $name;
  private Address $address;

  public function __construct(Cpf $cpf, string $name, Address $address)
  {
    $this->cpf = $cpf;
    $this->validatesOwnerName($name);
    $this->name = $name;
    $this->address = $address;
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

  public function getAddress(): Address
  {
    return $this->address;
  }
}
