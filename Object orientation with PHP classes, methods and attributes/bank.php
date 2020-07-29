<?php

require 'src/Account.php';
require 'src/Owner.php';
require 'src/Cpf.php';

$account1 = new Account(new Owner(new Cpf('111.111.111-11'), 'Lucas'));

$cpf = new Cpf('222.222.222-2');
$bicalho = new Owner($cpf, 'Bicalho');
$account2 = new Account($bicalho);

$account1->deposit(500);
$account2->deposit(500);

echo $account1->getOwner() . PHP_EOL;
echo $account1->getOwnerCPF() . PHP_EOL;
echo $account1->getBalance() . PHP_EOL;
echo PHP_EOL;
echo $account2->getOwner() . PHP_EOL;
echo $account2->getOwnerCPF() . PHP_EOL;
echo $account2->getBalance() . PHP_EOL;

// var_dump($account1, $account2);
