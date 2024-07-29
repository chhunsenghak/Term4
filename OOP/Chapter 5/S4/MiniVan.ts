import { Vehicle } from "./Vehicle";

export class Minivan extends Vehicle {
    private numberCustomers : number;
    private numberLuggage : number;
    constructor(plateID: string,
        weight: number, numberCustomers: number, numberLuggage: number) {
        super(plateID, weight);
        this.numberCustomers = numberCustomers;
        this.numberLuggage = numberLuggage;
    }
    getSpeed(): number {
        let speed = 130;
        speed = speed - (this.numberCustomers * 10);
        speed = speed - (this.numberLuggage * 5);
        return speed;
    }
}