public class Main{

    
    public static void main(String[] args){

     
    
        PC baru;
        baru = new PC();

        Ram ram = new Ram(8, 800000);
     
       
        CPU cpu= new CPU("Amd Ryzen 9 9580X", 1000000);
        Disk disk = new Disk("SSD", 2000, 1200000);
       
        baru.setRam(ram);
        baru.setCPU(cpu);
        baru.setDisk(disk);
        baru.setTotalPrice(disk, ram, cpu);
     

       
       
        System.out.println("CPU : "+cpu.getCPUname());
        System.out.println("RAM(GB) : "+ram.getRamSize());
        System.out.println("Tipe Storage : "+disk.getDiskTipe());
        System.out.println("Size Storage : "+disk.getDiskSize());
        System.out.println("Total Price : "+baru.getTotalPrice());
       
        
        
    }


  

}