<?php

namespace Alura;

class ArrayUtils
{
  public static function remove(string $element, array &$array): void
  {
    $position = array_search($element, $array, true);
    if (is_int($position)) {
      unset($array[$position]);
    } else {
      echo "<p>Não foi encontrado no Array</p>";
    }
  }
}
