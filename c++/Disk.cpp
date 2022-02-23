#include<iostream>
#include<string>

using namespace std;

class Disk{


    private :
    string tipe;
    int Storage;
    int Disk_price;


    public :
    Disk(){

    }

    Disk(string jenis, int capacity, int price){
        tipe = jenis;
        Storage = capacity;
        Disk_price = price;
    }

    void setCapacity(int capacity){
        Storage = capacity;
    }

    void setPrice(int price){
        Disk_price = price;
    }

    void setDisk(string jenis){
        tipe = jenis;
    }

    int getDiskCapacity(){
        return Storage;
    }

    int getDiskPrice(){
        return Disk_price;
    }

    string getDisk(){
        return tipe;
    }

    

    ~Disk(){

    }
};
