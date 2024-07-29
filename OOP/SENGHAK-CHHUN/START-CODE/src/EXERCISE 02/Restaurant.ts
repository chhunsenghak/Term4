import { MenuItem } from "./MenuItem";
import { Customer } from "./Customer";
import { Order } from "./Order";

export class Restaurant {
    private items: MenuItem[] = [];
    private orders: Order[] = [];
    addItem(item: MenuItem) {
        this.items.push(item);
    };

    placeOrder(customer) {
        this.orders.push(customer);
    };

    getOrdersByCustomer(customer: Customer) {
        this.orders.forEach(element => {
            if (element['ID'] == customer['ID']) {
                console.log(customer['listOrder'])
            }
        });
    }
}