<?php

use Alura\Bank\Model\Account\Owner;
use Alura\Bank\Model\Address;
use Alura\Bank\Model\Cpf;
use Alura\Bank\Model\Employee\Director;
use Alura\Bank\Model\Employee\Manager;
use Alura\Bank\Service\Authenticator;

require_once './src/auto-load.php';

$authenticator = new Authenticator();
$director = new Director("lucas", new Cpf('123.456.789-10'), 10000);
$manager = new Manager("lucas", new Cpf('123.456.789-10'), 10000);
$owner = new Owner("lucas", new Cpf('123.456.789-10'), new Address("","","",""));

$authenticator->login($director, "1234");
$authenticator->login($manager, "4321");
$authenticator->login($owner, "abcd");