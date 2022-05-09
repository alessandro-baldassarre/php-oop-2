<?php 

class Payment {

    protected $type;
    protected $date;
    
    public function __construct(string $type,string $date){
        $this->type = $type;
        $this->date = $date;
    }

}