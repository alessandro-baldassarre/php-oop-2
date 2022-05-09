<?php 

class User {
    protected $firstName;
    protected $lastName;
    protected $email;
    protected $password;
    protected $birthDate;
    protected $isRegistered;
    protected $discount;
    protected $creditCard;

    public function __construct($firstName,$lastName,$email,$password,$birthDate ,$isRegistered,$creditCard){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->birthDate = $birthDate;
        $this->isRegistered = $isRegistered;
        $this->discount = $this->setDiscount();
        $this->creditCard = $creditCard;
    }

    public function setDiscount(){
        ($this->isRegistered) ? $discount = 20 : $discount = 0; 
        return $discount;
    }

    public function getFirstName($firstName){
        return $this->firstName;
    }


    public function getLastName($lastName){
        return $this->lastName;
    }


    public function getEmail($email){
        return $this->email;
    }

    public function getPassword($password){
        return $this->password;
    }

    public function getBirthDate($birthDate){
        return $this->birthDate;
    }

    public function getIsRegistered($isRegistered){
        return $this->isRegistered;
    }

    public function getDiscount($discount){
        return $this->discount;
    }
}