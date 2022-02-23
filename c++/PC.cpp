#include<iostream>
#include<string>

using namespace std;
#include "Disk.cpp"
#include "CPU.cpp"
#include "Ram.cpp"

class PC{


    private :
    Disk dObject;
    Ram rObject;
    CPU cObject;
    int total_price;

    //  konstruktor
    public :
    PC(){

    }

    PC(Disk d, Ram r, CPU c){
        dObject = d;
        rObject = r;
        cObject = c;
        total_price = dObject.getDiskPrice() + rObject.getRamPrice()+cObject.getPriceCpu();
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
        total_price = d.getDiskPrice() + r.getRamPrice()+ c.getPriceCpu();
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

    

    ~PC(){

    }
};
