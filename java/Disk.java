public class Disk {
  

        String tipe;
        int size;
        int price;
    
    
        Disk(){
    
        }
    
        Disk(String t, int s, int p){
            this.tipe = t;
            this.size = s;
            this.price = p;
        }

        void setDiskTipe(String t){
            this.tipe = t;
        }
    
        void setDiskSize(int s){
            this.size = s;
         
        }
    
        void setDiskPrice(int p){
            this.price = p;
        }
    
       

        String getDiskTipe(){
            return this.tipe;
        }

        int getDiskSize(){
            return this.size;
        }
    
        int getDiskPrice(){
            return this.price;
        }

     
    
    
}
