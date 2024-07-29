class Drink{
    name : string;
    price : number;
    constructor(name: string, price: number){
        this.name = name;
        this.price = price;
    }
}

class Coffee extends Drink{
    quantityOfSugar : number;
    constructor(name: string, price : number, quantity: number){
        super(name, price)
        this.quantityOfSugar = quantity;
    }
}

let mydailycoffee = new Coffee("Khmer coffee", 2500, 123)
console.log(mydailycoffee)

