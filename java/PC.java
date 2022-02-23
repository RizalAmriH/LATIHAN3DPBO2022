public class PC {
    Disk dObject;
    Ram rObject;
    CPU cObject;
    int total_price;

    //  konstruktor
  
    PC(){

    }

    PC(Disk d, Ram r, CPU c){
        dObject = d;
        rObject = r;
        cObject = c;
        total_price = dObject.getDiskPrice() + rObject.getRamPrice()+cObject.getCPUPrice();
    }


    //setter getter
    void setCPU(CPU c){
        cObject = c;
    }

    void setRam(Ram r){
        rObject = r;
    }

    void setDisk(Disk d){
        dObject = d;
    }

    void setTotalPrice(Disk d, Ram r, CPU c){
        total_price = d.getDiskPrice() + r.getRamPrice()+ c.getCPUPrice();
    }

    Disk getDisk(){
        return dObject;
    }

    Ram getRam(){
        return rObject;
    }

    CPU getCPU(){
        return cObject;
    }

    int getTotalPrice(){
        return total_price;
    }

}
