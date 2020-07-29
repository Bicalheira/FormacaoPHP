<?php

require 'src/Account.php';
require 'src/Owner.php';

$account1 = new Account(new Owner('111.111.111-11', 'Lucas'));
$account2 = new Account(new Owner('222.222.222-22', 'Bicalho'));

$account1->deposit(500);
$account2->deposit(500);

echo $account1->getOwner() . PHP_EOL;
echo $account1->getOwnerCPF() . PHP_EOL;
echo $account1->getBalance() . PHP_EOL;

// var_dump($account1, $account2);
