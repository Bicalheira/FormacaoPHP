<?php

namespace Alura;

require "auto_load.php";


$accountHolders = ["Giovani", "João", "Maria", "Luis", "Luisa", "Rafael"];
$balances = [2500, 3000, 4400, 1000, 8700, 9000];

$nonPayingAccountHolders = ["Luis", "Luisa", "Rafael"];

$payingAccountHolders = array_diff($accountHolders, $nonPayingAccountHolders);
$relation = array_combine($accountHolders, $balances);

$relation["Matheus"] = 4500;

echo "<pre>";
var_dump($payingAccountHolders);
var_dump($relation);
echo $relation["Giovani"];
echo "</pre>";

echo "Giovani's balance is: {$relation["Giovani"]} <br>";

if (array_key_exists("João", $relation)) {
  echo "João's balance is: {$relation["João"]}";
} else {
  echo "Não foi encontrado";
}

$biggers = ArrayUtils::findPeopleBalanceBigger(3000, $relation);

echo "<pre>";
var_dump($biggers);
echo "</pre>";
