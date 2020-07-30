<?php

class Owner extends Person
{
  private Address $address;

  public function __construct(Cpf $cpf, string $name, Address $address)
  {
    parent::__construct($name, $cpf);
    $this->address = $address;
  }

  public function getAddress(): Address
  {
    return $this->address;
  }
}
