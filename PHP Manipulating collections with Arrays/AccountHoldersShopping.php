<?php

namespace Alura;

require "auto_load.php";

$account_holders_and_shopping = ["Giovanni", "João", 12, "Maria", "Luis", "Luisa", "12"];

echo "<pre>";
var_dump($account_holders_and_shopping);
ArrayUtils::remove(12, $account_holders_and_shopping);
var_dump($account_holders_and_shopping);
echo "</pre>";
