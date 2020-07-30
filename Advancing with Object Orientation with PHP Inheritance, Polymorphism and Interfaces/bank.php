<?php

require_once 'auto-load.php';

use Alura\Bank\Model\Account\Owner;
use Alura\Bank\Model\Address;
use Alura\Bank\Model\Cpf;
use Alura\Bank\Model\Account\Account;

$account1 = new Account(new Owner(new Cpf('111.111.111-11'), 'Lucas', new Address('City', 'Street', '15', '2922929')));

$cpf = new Cpf('222.222.222-22');
$address = new Address('City', 'Street', '115', '11111111');
$bicalho = new Owner($cpf, 'Bicalho', $address);
$account2 = new Account($bicalho);

$account1->deposit(500);
$account2->deposit(500);

echo $account1->getOwner() . PHP_EOL;
echo $account1->getOwnerCPF() . PHP_EOL;
echo $account1->getBalance() . PHP_EOL;
// echo $account1->getAddress() . PHP_EOL;
echo PHP_EOL;
echo $account2->getOwner() . PHP_EOL;
echo $account2->getOwnerCPF() . PHP_EOL;
echo $account2->getBalance() . PHP_EOL;
// echo $account2->getAddress() . PHP_EOL;

var_dump($account1, $account2);
