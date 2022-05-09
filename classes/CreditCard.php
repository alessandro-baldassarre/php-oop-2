<?php 


class CreditCard{

     protected $bankName;
     protected $cardNumber;
     protected $expirationDate;

    public function __construct (string $bankName, int $cardNumber, string $expirationDate){
        
        $this->bankName = $bankName;
        $this->cardNumber = $cardNumber;
        $this->expirationDate = $expirationDate;
    }

}