<?php

namespace Alura\Bank\Model;

class Address
{
  private string $city;
  private string $street;
  private string $number;
  private string $zip;

  public function __construct(string $city, string $street, string $number, string $zip)
  {
    $this->city = $city;
    $this->street = $street;
    $this->number = $number;
    $this->zip = $zip;
  }

  public function getCity(): string
  {
    return $this->city;
  }

  public function getStreet(): string
  {
    return $this->street;
  }

  public function getNumber(): string
  {
    return $this->number;
  }

  public function getZip(): string
  {
    return $this->zip;
  }
}
