<?php 

include_once __DIR__ . "./User";

class CreditCard extends User {

     protected $bankName;
     protected $cardNumber;
     protected $expirationDate;

    public function __construct (string $bankName, int $cardNumber, string $expirationDate, $firstName, $lastName, $email, $password){
        parent::__construct($firstName, $lastName, $email, $password);
        $this->bankName = $bankName;
        $this->cardNumber = $cardNumber;
        $this->expirationDate = $expirationDate;
    }

}