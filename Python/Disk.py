class Disk :


    def __init__(self, tipe= 0, size = 0 ,price = 0):
        self.tipe = tipe
        self.size = size
        self.price = price
        
    def set_Disktipe(self, tipe):
        self.tipe = tipe    

    def set_Disksize(self, size):
        self.size = size    
    
    def set_Diskprice(self, price):
        self.price = price

    
    def get_Disktipe(self):
        return self.tipe
    def get_Disksize(self):
        return self.size

    def get_Diskprice(self):
        return self.price

 
       
