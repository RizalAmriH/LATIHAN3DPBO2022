#include<iostream>
#include<string>

using namespace std;

class Ram{


    private :
    int Ramcapacity;
    int Ram_price;


    public :
    Ram(){

    }

    Ram(int ram, int price){
        Ramcapacity = ram;
        Ram_price = price;
    }

    void setRam(int ram){
        Ramcapacity = ram;
    }

    void setRamPrice(int price){
        Ram_price = price;
    }

    int getRam(){
        return Ramcapacity;
    }

    int getRamPrice(){
        return Ram_price;
    }

    

    ~Ram(){

    }
};
