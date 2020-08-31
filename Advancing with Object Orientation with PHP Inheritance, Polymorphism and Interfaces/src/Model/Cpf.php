<?php

namespace Alura\Bank\Model;

final class Cpf
{
  private string $cpf;

  public function __construct(string $cpf)
  {
    $cpf = filter_var($cpf, FILTER_VALIDATE_REGEXP, [
      'options' => [
        'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
      ]
    ]);
    if ($cpf === false) {
      echo "CPF invalid";
      exit();
    }
    $this->cpf = $cpf;
  }

  public function getCpf()
  {
    return $this->cpf;
  }
}
