import { Person } from "./Person";
export class Student extends Person {
    private phone: string;
    constructor(name: string, age: number, phone: string) {
        super(name, age);
        this.phone = phone;
    }
}