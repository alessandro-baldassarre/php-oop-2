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

    public function __construct(string $firstName,string $lastName,string $email,string $password,string $birthDate , bool $isRegistered, object $creditCard){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->birthdate = $birthDate;
        $this->isRegistered = $isRegistered;
        $this->discount = $this->setDiscont();
        $this->creditCard = $creditCard;
    }

    protected function setDiscount(){
        ($isRegistered) ? $this->discount = 20 : $this->discount = 0; 
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

    public function getIsRegestered($isRegistered){
        return $this->isRegistered;
    }

    public function getDiscount($discount){
        return $this->discount;
    }
}