<?php
  include "CPU.php";
  include "Disk.php";
  include "Ram.php";

class PC{


    
    private $c;
    private $d;
    private $r;
    private $total_price;
    
   

    public function __construct(CPU $c, Disk $d , Ram $r) {
    $this->cObject = $c = new CPU();
    $this->dObject = $d = new Disk();
    $this->rObject = $r = new RAM();
    $this->total_price =  $c->getCPUprice() + $d->getDiskprice() + $r->getRamprice();

    }

    public function setCPU($c) { //
        $this->cObject = $c;
    }

    public function getCPU() { 
        return $this->cObject;
    }

    public function setDisk($disk) { //
        $this->dObject = $disk;
    }

    public function getDisk() { 
        return $this->dObject;
    }

    public function setRam($ram) { //
        $this->rObject = $ram;
    }

    public function getRam(){ 
        return $this->rObject;

    } 
    public function setTotalPrice($c , $d , $r ){
        $this->total_price =  $c->getCPUprice() + $d->getDiskprice() + $r->getRamprice();
    }

    public function getTotalPrice(){
        return $this->total_price;
    }

}
?>