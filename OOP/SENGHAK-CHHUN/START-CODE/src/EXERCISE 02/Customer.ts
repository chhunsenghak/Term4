import { Order } from "./Order";

export class Customer{
    private ID : number;
    private name : string;
    private listOrder : Order[] = [];
    constructor(id: number, name : string){
        this.ID = id;
        this.name = name;
    }
    setOrder(order : Order){
        this.listOrder.push(order)
    }
}