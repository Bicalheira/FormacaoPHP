<?php

namespace Alura\Bank\Model;

trait PropertiesAccess
{
  public function __get(string $name)
  {
    $method = 'get' . ucfirst($name);
    return $this->$method();
  }

  public function __set(string $name, string $value)
  {
    $method = 'set' . ucfirst($name);
    return $this->$method($value);
  }
}
