<?php

class Calculator
{
  public function calculateAverage(array $grades): ?float
  {

    $quantity = sizeof($grades);

    if ($quantity > 0) {

      $sum = 0;
      for ($i = 0; $i < $quantity; $i++) {
        $sum += $grades[$i];
      }

      $average = $sum / $quantity;

      return $average;
    } else {
      return null;
    }
  }
}
