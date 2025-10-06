<?php

namespace lesson2;
require_once 'Payable.php';
use Payable;

class BankAccount implements Payable
{
    protected float $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
    public function pay(float $amount) {
        $this->withdraw($amount);
    }
    public function deposit(float $amount): void
    {
        $this->balance += $amount;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @throws \Exception
     */
    public function withdraw(float $amount): void
    {
        $balance = $this->balance - $amount;
        if($balance < 0) throw new \Exception("Недостаточно средств");
        $this->balance = $balance;
    }

}

//$account = new BankAccount(1000);
//$account->deposit(500);
//echo $account->getBalance();
//// ✅ 1500
//
//$account->withdraw(300);
//echo $account->getBalance();
//// ✅ 1200
//
//$account->withdraw(5000);
//// ❌ Ошибка: недостаточно средств
