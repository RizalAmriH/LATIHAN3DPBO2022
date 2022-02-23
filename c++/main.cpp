#include <iostream>
#include <string>

using namespace std;


#include "PC.cpp"

int main(){

    
    PC baru;

    Ram ram(8, 1100000);
    CPU cpu("Amd Ryzen 9 9580X", 10000000);
    Disk disk("SSD", 2000, 120000);
   
    baru.setRam(ram);
    baru.setCPU(cpu);
    baru.setDisk(disk);
	baru.setTotalPrice(disk, ram, cpu);

    cout << "Kapasitas RAM(GB) : ";
	cout << ram.getRam() << endl;
	cout << "Nama CPU: ";
	cout << cpu.getNameCpu() << endl;
    cout << "Jenis Storage : ";
	cout << disk.getDisk() << endl;
	cout << "Ukuran Storage(GB) : ";
	cout << disk.getDiskCapacity() << endl;
	cout << "Total harga : ";
	cout << baru.getTotalPrice() << endl;
   




    return 0;
}
