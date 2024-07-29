import { Address } from "./address";
import { Customer } from "./customer";
import { Room } from "./room";
class Hotel {
    name: string;
    address: Address[] = [];
    customer: Customer[] = [];
    constructor(name: string) {
        this.name = name;
    }
    setAddress(address: Address) {
        this.address.push(address);
    }
    setCustomer(customer: Customer) {
        this.customer.push(customer);
    }
    registerCustomer(customer: Customer, room: Room) {
        this.customer.push(customer);
    }
    customerIsInHotel(customer: Customer): boolean {
        this.customer.forEach(element => {
            if (customer.firstName == element.firstName && customer.lastName == element.lastName) {
                return true
            }
        });
        return false
    }
}

let myHotel = new Hotel("Yung Chal");
let address1 = new Address("PP", "2004", "cambodia")
let address2 = new Address("KPT", "06", "cambodia")

let customer1 = new Customer("Him", "Hey");
let customer2 = new Customer("Yon", "S");
let customer3 = new Customer("Nang", "ks");

let room1 = new Room(1, 2);
let room2 = new Room(2, 5);

customer1.setAddress(address1);
customer2.setAddress(address2);
customer3.setAddress(address1);

if (!myHotel.customerIsInHotel(customer1)) {
    if (room1.numberOfRoom > room1.customer.length) {
        myHotel.registerCustomer(customer1, room1)
        room1.setCustomer(customer1)
    } else {
        console.log("This room id " + room1.roomID + " is full")
    }
} else {
    console.log("The customer have already stay in our hotel")
}
if (!myHotel.customerIsInHotel(customer2)) {
    if (room1.numberOfRoom > room1.customer.length) {
        myHotel.registerCustomer(customer2, room1)
        room1.setCustomer(customer2)
    } else {
        console.log("This room id " + room1.roomID + " is full")
    }
} else {
    console.log("The customer have already stay in our hotel")
}
if (!myHotel.customerIsInHotel(customer3)) {
    if (room2.numberOfRoom > room2.customer.length) {
        myHotel.registerCustomer(customer3, room2)
        room2.setCustomer(customer3)
    } else {
        console.log("This room id " + room2.roomID + " is full")
    }
} else {
    console.log("The customer have already stay in our hotel")
}
if (!myHotel.customerIsInHotel(customer3)) {
    if (room2.numberOfRoom > room2.customer.length) {
        myHotel.registerCustomer(customer3, room2)
        room2.setCustomer(customer3)
    } else {
        console.log("This room id " + room2.roomID + " is full")
    }
} else {
    console.log("The customer have already stay in our hotel")
}

myHotel.setAddress(address1);
myHotel.customerIsInHotel(customer1);
console.log(myHotel)