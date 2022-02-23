#include<iostream>
#include<string>

using namespace std;

class CPU{


    private :
    string name_cpu; //
    int cpu_price;


    public :
    CPU(){

    }

    CPU(string name, int price){
        name_cpu = name;
        cpu_price = price;
    }

    void setNameCpu(string name){
        name_cpu = name;
    }

    void setPriceCpu(int price){
        cpu_price = price;
    }

    string getNameCpu(){
        return name_cpu;
    }

    int getPriceCpu(){
        return cpu_price;
    }

    

    ~CPU(){

    }
};
