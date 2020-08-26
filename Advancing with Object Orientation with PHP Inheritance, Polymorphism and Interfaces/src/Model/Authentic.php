<?php

namespace Alura\Bank\Model;

interface Authentic
{
  public function canAuthenticate(String $password): bool;
}
