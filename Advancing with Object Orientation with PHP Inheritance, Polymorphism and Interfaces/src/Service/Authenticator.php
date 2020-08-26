<?php

namespace Alura\Bank\Service;

use Alura\Bank\Model\Authentic;

class Authenticator
{
  public function login(Authentic $authentic, string $password): void
  {
    if ($authentic->canAuthenticate($password)) {
      echo "Login was a success!" . PHP_EOL;
    } else {
      echo "Incorrect Password" . PHP_EOL;
    }
  }
}
