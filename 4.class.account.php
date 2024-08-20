<?php
interface AccountInterface {

    function __construct($accountNUmber, $balance);
    public function getBalance();
    public function deposit($amount);
    public function withdraw($amount);
}

abstract class AbstractAccount implements AccountInterface {
    protected $accountNUmber;
    protected $balance;
    function __construct($accountNUmber, $balance) {
        $this->accountNUmber = $accountNUmber;
        $this->balance = $balance;
    }
    public function getBalance() {
        return $this->balance;
    }
    public function deposit($amount) {
        $this->balance += $amount;
    }
    public function withdraw($amount) {
        if ($amount > $this->balance) {
            echo "Insufficient balance \n";
            throw new Exception("Insufficient Balance");
        }
    }
}


class SavingsAccount extends AbstractAccount {
    public function withdraw($amount) {
        parent::withdraw($amount);

        if ($amount > 5000) {
            echo "You can not withdraw more than 5000 \n";
            return;
        }

        $this->balance -= $amount;
    }
}

class CurrentAccount extends AbstractAccount {
    public function withdraw($amount) {

        parent::withdraw($amount);
        $this->balance -= $amount;
    }
}

class PriorityAccount extends AbstractAccount {
    public function withdraw($amount) {

        parent::withdraw($amount);
        if ($amount > 50000) {
            echo "You can not withdraw more than 50000 \n";
            return;
        }

        $this->balance -= $amount;
    }
}

$rahimsAccount = new SavingsAccount(1234, 1000);
// $rahimsAccount = new PriorityAccount(1234,100000);
echo $rahimsAccount->getBalance();
echo PHP_EOL;
$rahimsAccount->deposit(1000);
echo $rahimsAccount->getBalance();
echo PHP_EOL;
$rahimsAccount->withdraw(4000);
echo $rahimsAccount->getBalance();
echo PHP_EOL;
$rahimsAccount->withdraw(60000);
echo $rahimsAccount->getBalance();