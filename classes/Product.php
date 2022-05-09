<?php

/**
 * [Description Product]
 * class that describes the single product present in the e-commerce
 */
class Product {
    protected $category;
    protected $name;
    protected $price;
    protected $size;
    protected $animalSpecies;


    /**
     * @param string $category product category (food, toy,...)
     * @param string $name product name
     * @param string $price product price
     * @param string $size product size
     * @param string $animalSpecies the animal species for which the product is used ("" = all species)
     */
    public function __construct ($category, $name, $price, $size, $animalSpecies = ""){
        $this->category = $category;
        $this->name = $name;
        $this->price = $price;
        $this->size = $size;
        $this->animalSpecies = $animalSpecies;
    }
    
    public function getCategory(){
        return $this->category;
    }

    public function setCategory($category){
        $this->category = $category;
        
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