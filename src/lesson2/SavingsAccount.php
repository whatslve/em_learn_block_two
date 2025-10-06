<?php

namespace lesson2;
require_once 'BankAccount.php';
class SavingsAccount extends BankAccount
{
    private float $perecent;
    public function __construct(float $balance, float $percent) {
        parent::__construct($balance);
        $this->perecent = $percent;
    }

    public function applyInterest(): void {
        $this->deposit(($this->perecent * $this->getBalance()) / 100);
    }
}

$savings = new SavingsAccount(1000, 5);
$savings->applyInterest();
echo $savings->getBalance();
// ✅ 1050
