<?php 

include_once __DIR__ . "/Product";

class Toy extends Product {

    protected $materials;
    protected $type;

    public function __construct($materials, $type){
        $this->materials = $materials;
        $this->type = $type;
    }

    public function getMaterials(){
        return $this->materials;
    }

    public function setMaterials($materials){
        $this->materials = $materials;
        
    }

    public function getType(){
        return $this->type;
    }

    public function setType($type){
        $this->type = $type;
        
    }

}