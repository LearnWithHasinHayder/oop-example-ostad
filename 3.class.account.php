<?php  
interface AccountInterface{

    function __construct($accountNUmber, $balance);
    public function getBalance();
    public function deposit($amount);
    public function withdraw($amount);
}

class SavingsAccount implements AccountInterface{
    private $accountNUmber;
    private $balance;
    function __construct($accountNUmber, $balance){
        $this->$accountNUmber = $accountNUmber;
        $this->$balance = $balance;
    }
    public function getBalance(){
        return $this->balance;
    }
    public function deposit($amount){
        $this->balance += $amount;
    }

    public function withdraw($amount){}
}




class CurrentAccount implements AccountInterface{
    private $accountNUmber;
    private $balance;
    function __construct($accountNUmber, $balance){
        $this->$accountNUmber = $accountNUmber;
        $this->$balance = $balance;
    }
    public function getBalance(){
        return $this->balance;
    }
    public function deposit($amount){
        $this->balance += $amount;
    }
    public function withdraw($amount){}
}

class PriorityAccount implements AccountInterface{
    private $accountNUmber;
    private $balance;
    function __construct($accountNUmber, $balance){
        $this->$accountNUmber = $accountNUmber;
        $this->$balance = $balance;
    }
    public function getBalance(){
        return $this->balance;
    }
    public function deposit($amount){
        $this->balance += $amount;
    }
    public function withdraw($amount){}
}