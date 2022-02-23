<?php

class Ram{

    private $size;
    private $price;
    
   

    public function __construct($size = 0, $price = 0) {
    
        $this->size = $size;
        $this->price = $price;

    }

    public function setRamSize($size) { //
        $this->size = $size;
    }

    public function getRamSize() { 
        return $this->size;
    }



    public function setRamprice($price) { //
        $this->price = $price;
    }

    public function getRamPrice(){ 
        return $this->price;

    } 

}
?>