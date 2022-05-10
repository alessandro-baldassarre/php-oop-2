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

    /**
     * @param string $firstName name of the user 
     * @param string $lastName surname of the user
     * @param string $email email of the user
     * @param mixed $password password of the user
     * @param string $birthDate date of birth of the user
     * @param bool $isRegistered boolean which tells if the user is registered or not
     */
    public function __construct($firstName,$lastName,$email,$password,$birthDate ,$isRegistered){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->birthDate = $birthDate;
        $this->isRegistered = $isRegistered;
        $this->discount = $this->setDiscount();
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

    /**
     * function that allows the purchase of a product through a credit card with the respective balance and expiration checks and any discount to be applied
     * 
     * @param object $product product to purchase
     * @param object $creditCard to pay with
     * 
     * @return [string] message with the outcome of the transaction
     */
    public function buyProduct ($product, $creditCard){
        if ($creditCard->getExpirationDate() < 2022){
            return "carta di credito scaduta"; 
        }
        if ($creditCard->getBalance() < $product->getPrice()){
            return "credito insufficiente";
            
        }
        
        if ($this->discount > 0) {
            $price = $product->getprice() - $product->getprice() / 100 * $this->discount;
            $balance = $creditCard->getBalance() - $price;
            $creditCard->setBalance($balance);

            return "Acquisto effetuato, hai ricevuto uno sconto del $this->discount% e hai speso " . round($price, 2) . "€ ". ", il tuo nuovo saldo e': ". $creditCard->getBalance(). "€";
        } else {
            $balance = $creditCard->getBalance() - $price;
            $creditCard->setBalance($balance);

            return "Acquisto effetuato, non hai ricevuto nessuno sconto e hai speso " . round($product->price, 2) . "€ ". ", il tuo nuovo saldo e': ". $creditCard->getBalance(). "€";
        }
    }
}