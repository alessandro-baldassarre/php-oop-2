<?php
include_once __DIR__ . "/CreditCard.php";
/**
 * [Description Product]
 * class that describes the single product present in the e-commerce
 */
class Product {
    protected $name;
    protected $price;
    protected $size;
    protected $animalSpecies;


    /**
     * @param string $name product name
     * @param string $price product price
     * @param string $size product size
     * @param string $animalSpecies the animal species for which the product is used ("" = all species)
     */
    public function __construct ($name, $price, $size, $animalSpecies = ""){
        $this->name = $name;
        $this->price = $price;
        $this->size = $size;
        $this->animalSpecies = $animalSpecies;
    }
    

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
        
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){
        $this->price = $price;
        
    }

    public function getSize(){
        return $this->size;
    }

    public function setSize($size){
        $this->size = $size;
        
    }

}