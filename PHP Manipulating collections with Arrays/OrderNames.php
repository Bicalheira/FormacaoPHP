<?php


$names = "Lucas, Bicalho, Fraga, Layla";

$arrayNames = explode(", ", $names);

foreach($arrayNames as $name){
  echo "<p>$name</p>";
}

$stringName = implode(", ", $arrayNames);

echo "<p>$stringName</p>";
