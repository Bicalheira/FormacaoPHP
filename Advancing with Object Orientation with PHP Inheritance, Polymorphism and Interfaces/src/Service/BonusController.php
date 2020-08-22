<?php

namespace Alura\Bank\Service;

use Alura\Bank\Model\Employee\Employee;

class BonusController
{
    private float $totalBonus = 0;

    public function addBonus(Employee $employee)
    {
        $this->totalBonus += $employee->calculatedBonus();
    }

    function getTotalBonus(): float
    {
        return $this->totalBonus;
    }
}
