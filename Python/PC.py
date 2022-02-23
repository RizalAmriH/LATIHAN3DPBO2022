from CPU import CPU
from Disk import Disk
from Ram import Ram


class PC :


    def __init__(self, cpu = CPU(), disk = Disk(),ram = Ram(), Totalprice = 0):
        self.cpu = cpu
        self.disk = disk
        self.ram = ram
        self.Totalprice = cpu.get_CPUprice() + disk.get_Diskprice() + ram.get_Ramprice()
        
    def set_CPU(self, cpu):
        self.cpu = cpu    

    def set_Disk(self,  disk):
        self.disk = disk    
    
    def set_Ram(self, ram):
        self.ram = ram

    def set_Totalprice(self, cpu , disk, ram):
        self.Totalprice = cpu.get_CPUprice() +  disk.get_Diskprice()   +  ram.get_Ramprice()


    
    def get_CPU(self):
        return self.cpu
    def get_Disk(self):
        return self.disk
    def get_Ram(self):
        return self.ram    

    def get_Totalprice(self):
        return self.Totalprice

 
       

