import { dish } from "./dish";

export class Order {
    private orderItem: dish[] = [];
    private totalPrice: string;
    private customer: string;
    constructor(total: string, customer: string) {
        this.totalPrice = total;
        this.customer = customer;
    }
    setOrderItem(item: dish) {
        this.orderItem.push(item)
    }
}