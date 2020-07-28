<?php

require 'src/Account.php';

$account1 = new Account();
$account2 = new Account();

$account1->ownerCPF = '111.111.111-11';
$account1->ownerName = 'Lucas';
$account1->balance = 500;

$account2->ownerCPF = '222.222.222-22';
$account2->ownerName = 'Bicalho';
$account2->balance = 500;

$account1->transfer(500, $account2);

var_dump($account1, $account2);


