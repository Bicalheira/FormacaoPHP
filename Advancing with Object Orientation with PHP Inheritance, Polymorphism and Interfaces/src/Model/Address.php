<?php

namespace Alura\Bank\Model;

final class Address
{
  use PropertiesAccess;

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

  public function setCity($city): void
  {
    $this->city = $city;
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

  public function __toString(): string
  {
    return "{$this->street}, {$this->number}, {$this->zip}, {$this->city}";
  }

  
}
