<?php  

$accountNumber = "12345";
$accountName = "John Doe";
$accountBalance = 1000;

function getAccountNumber(){
    global $accountNumber;
    return $accountNumber;
}

function getAccountName(){
    global $accountName;
    return $accountName;
}

function getAccountBalance(){
    global $accountBalance;
    return $accountBalance;
}

function deposit($amount){
    global $accountBalance;
    $accountBalance += $amount;
}

function withdraw($amount){
    global $accountBalance;
    $accountBalance -= $amount;
}