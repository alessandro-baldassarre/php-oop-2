<?php 

class User {
    protected $firstName;
    protected $lastName;
    protected $email;
    protected $password;

    public function __construct($firstName, $lastName, $email, $password){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
    }
}