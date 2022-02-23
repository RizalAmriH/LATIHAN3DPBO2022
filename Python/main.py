from PC import PC
from CPU import CPU
from Disk import Disk
from Ram import Ram




cpu = CPU("Intel Core i9 9870x", 12000000)
disk = Disk("SSD", 2000, 1500000)
ram = Ram(16, 1400000)
baru = PC()

baru.set_Totalprice(cpu, disk, ram)




print("CPU name : " + str(cpu.get_CPUname()))
print("Disk tipe(GB) : " + str(disk.get_Disktipe()))
print("Disk size : " + str(disk.get_Disksize()))
print("Ram(GB) : " + str(ram.get_Ramsize()))
print("Total price : " + str(baru.get_Totalprice()))
