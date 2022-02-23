<?php

class CPU{
    private $name;
    private $price;
    
   

    public function __construct($name = 0, $price = 0) {
        $this->name = $name;
        $this->price = $price;

    }

    public function setCPUName($name) { //
        $this->name = $name;
    }
    public function getCPUName() { 
        return $this->name;
    }

    public function setCPUPrice($price) { //
        $this->price = $price;
    }

    public function getCPUPrice(){ 
        return $this->price;

    } 

}
?>