<?php

use Alura\Bank\Model\Address;

require_once "./src/auto-load.php";

$address1 = new Address("City - 1", "Street - 1", "24", "1111111");
$address2 = new Address("City - 1", "Street - 2", "46", "2222222");

echo $address1->city = "City - 2, ";
echo $address1 . PHP_EOL;
echo $address2 . PHP_EOL;
