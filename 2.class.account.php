<?php 
class Account{
    private $accountNumber;
    private $balance;

    function __construct($accountNumber, $balance){
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    function getBalance(){
        return $this->balance;
    }

    function deposit($amount){
        $this->balance += $amount;
    }

    function withdraw($amount){
        if($amount > $this->balance){
            echo "Insufficient balance \n";
            return;
        }
        $this->balance -= $amount;
    }

}

$rahimsAccount = new Account("12345","10000");
echo $rahimsAccount->getBalance();
$rahimsAccount->withdraw(30000);

$rahimsAccount->balance = 100000;

$rahimsAccount->withdraw(30000);
echo $rahimsAccount->getBalance();