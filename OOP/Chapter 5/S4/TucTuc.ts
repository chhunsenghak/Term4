import { Vehicle } from "./Vehicle";

export class TucTuc extends Vehicle {
    private numberCustomers: number;
    constructor(
        plateID: string,
        weight: number, numberCustomers: number, numberLuggage: number
    ) {
        super(plateID, weight);
        this.numberCustomers = numberCustomers;
    }
    getSpeed(): number{
        let speed = 130;
        speed = speed - (this.numberCustomers * 5);
        return speed;
    }
}