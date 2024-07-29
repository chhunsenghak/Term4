import { Customer } from "./Customer";
import { MenuItem } from "./MenuItem";
import { dish } from "./dish";
import { Restaurant } from "./Restaurant";
import { Order } from "./Order";

//food
let dish1 = new dish("Big Meal ", "A delicious burger with fries and a drink", "$9.99");
let dish2 = new dish("Crispy Snack", "Crunchy chips served with a dip.", "$7.99");

//create list
let menuItem = new MenuItem();

//add food to list
menuItem.setDish(dish1);
menuItem.setDish(dish2);

//create customer
let customer1 = new Customer(1, "Roth");
let customer2 = new Customer(2, "Thou");

//create order food
let order1 = new Order("100", "Roth");
let order2 = new Order("10", "Roth")

//set food to order
order1.setOrderItem(dish1);
order2.setOrderItem(dish2)

//customer order the food
customer1.setOrder(order1)
customer1.setOrder(order2)
customer2.setOrder(order1)
customer2.setOrder(order2)

//create new restaurant
let myRestaurant = new Restaurant();

//add item food to restaurant
myRestaurant.addItem(menuItem)

//add order food to restaurant
myRestaurant.placeOrder(customer1);
myRestaurant.placeOrder(customer2);

//get all order by customer
myRestaurant.getOrdersByCustomer(customer2)
