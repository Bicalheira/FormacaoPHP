<?php

namespace Alura\Bank\Model\Account;

class CurrentAccount extends Account
{

    public function transfer(float $transferValue, Account $destinationAccount): void
    {
        if ($transferValue > $this->balance) {
            echo "Balance unavailable!" . PHP_EOL;
            return;
        }
        if (!$this->withdraw($transferValue)) {
            $destinationAccount->deposit($transferValue);
        }
    }

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
        return 0.05;
    }
}
