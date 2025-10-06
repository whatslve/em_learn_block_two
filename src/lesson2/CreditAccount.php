<?php

namespace lesson2;
use Payable;

require_once 'BankAccount.php';
class CreditAccount extends BankAccount implements Payable
{
    public function withdraw(float $amount): void
    {
        $this->balance = $this->getBalance() - $amount;
    }
}
$bank = new BankAccount(500);
$credit = new CreditAccount(500);

$bank->pay(200);
echo $bank->getBalance();
// ✅ Баланс уменьшился на 200

$credit->pay(700);
// ✅ Баланс ушел в -200 (кредитный лимит)
echo $credit->getBalance();

