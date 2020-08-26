<?php

namespace Alura\Bank\Model\Employee;

class VideoEditor extends Employee{
  public function calculatedBonus(): float
  {
    return 600;
  }
}