<?php

namespace Alura\Bank\Model\Account;

use Alura\Bank\Model\Person;
use Alura\Bank\Model\Address;
use Alura\Bank\Model\Cpf;

class Owner extends Person
{
  private Address $address;

  public function __construct(string $name, Cpf $cpf,Address $address)
  {
    parent::__construct($name, $cpf);
    $this->address = $address;
  }

  public function getAddress(): Address
  {
    return $this->address;
  }
}
