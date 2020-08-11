<?php

namespace Alura\Bank\Model\Account;

class SavingsAccount extends Account
{
    public function withdraw(float $withdrawValue): void
    {
        $withdrawFee = $withdrawValue * $this->percentageRate();

        $withdrawFinalValue = $withdrawValue + $withdrawFee;

        if ($withdrawValue > $this->balance) {
            echo "Balance unavailable!" . PHP_EOL;
            return;
        }

        $this->balance -= $withdrawFinalValue;
    }

    protected function percentageRate(): float
    {
        return 0.03;
    }
}
