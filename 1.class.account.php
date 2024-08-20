<?php  

class Account{
    public $accountNumber;
    public $balance;

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

$rahimsAccount = new Account('12344555', 5000); //instantiate
$karimsAccount = new Account('12344556', 6000);

echo $rahimsAccount->getBalance();
echo PHP_EOL;

$rahimsAccount->deposit(10000);
echo $rahimsAccount->getBalance();
echo PHP_EOL;

$rahimsAccount->withdraw(25000);
echo $rahimsAccount->getBalance();

// echo PHP_EOL;
// echo $karimsAccount->getBalance();

