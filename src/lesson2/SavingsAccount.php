<?php

namespace lesson2;

class SavingsAccount extends BankAccount
{
    private float $percent;
    public function __construct(float $balance, float $percent) {
        parent::__construct($balance);
        $this->percent = $percent;
    }

    public function applyInterest(): void {
        $this->deposit(($this->percent * $this->getBalance()) / 100);
    }
}

$savings = new SavingsAccount(1000, 5);
$savings->applyInterest();
echo $savings->getBalance();
// ✅ 1050
