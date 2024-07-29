import { Vehicle } from "./Vehicle";

export class batMobile extends Vehicle {
    private batman: boolean;
    constructor(
        plateID: string,
        weight: number, batman: boolean)
        {
        super(plateID, weight);
        this.batman = batman
    }
    getSpeed() : number{
        if (batMobile) {
            console.log(1)
            return 500;
        } else {
            return 110;
        }
    }
}