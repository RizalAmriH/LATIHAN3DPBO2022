public class CPU {
  
        String name;
        int price;
    
    
        CPU(){
    
        }
    
        CPU(String n, int p){
            this.name = n;
            this.price = p;
        }
    
        void setCPUname(String n){
            this.name = n;
         
        }
    
        void setCPUPrice(int p){
            this.price = p;
        }
    
        String getCPUname(){
            return this.name;
        }
    
        int getCPUPrice(){
            return this.price;
        }
    
    
}
