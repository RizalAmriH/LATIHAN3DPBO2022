<?php

class Disk{
    private $tipe;
    private $size;
    private $price;
    
   

    public function __construct($tipe = 0, $size = 0, $price = 0) {
        $this->tipe = $tipe;
        $this->size = $size;
        $this->price = $price;

    }

    public function setDiskTipe($tipe) { //
        $this->tipe = $tipe;
    }

    public function getDiskTipe() { 
        return $this->tipe;
    }

    public function setDiskSize($size) { //
        $this->size = $size;
    }

    public function getDiskSize() { 
        return $this->size;
    }


    public function setDiskprice($price) { //
        $this->price = $price;
    }

    public function getDiskPrice(){ 
        return $this->price;

    } 

}
?>