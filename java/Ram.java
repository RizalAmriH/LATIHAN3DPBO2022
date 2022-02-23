public class Ram {
    int size;
    int price;


    Ram(){

    }

    Ram(int s, int p){
        this.size = s;
        this.price = p;
    }

    void setRamSize(int s){
        this.size = s;
     
    }

    void setRamPrice(int p){
        this.price = p;
    }

    int getRamSize(){
        return this.size;
    }

    int getRamPrice(){
        return this.price;
    }

}
