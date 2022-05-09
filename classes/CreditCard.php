<?php 


class CreditCard{

     protected $bankName;
     protected $cardNumber;
     protected $expirationDate;
     protected $balance;

    public function __construct ($bankName, $cardNumber, $expirationDate, $balance) {
        
        $this->bankName = $bankName;
        $this->cardNumber = $cardNumber;
        $this->expirationDate = $expirationDate;
        $this->balance = $balance;
    }

    public function getBankName(){
        return $this->bankName;
    }

    public function setBankName($bankName){
        $this->bankName = $bankName;
        
    }

    public function getCardNumber(){
        return $this->cardNumber;
    }

    public function setCardNumber($cardNumber){
        $this->cardNumber = $cardNumber;
        
    }

    public function getExpirationDate(){
        return $this->expirationDate;
    }

    public function setExpirationDate($expirationDate){
        $this->expirationDate = $expirationDate;
        
    }

    public function getBalance(){
        return $this->balance;
    }

    public function setBalance($balance){
        $this->balance = $balance;
        
    }

}