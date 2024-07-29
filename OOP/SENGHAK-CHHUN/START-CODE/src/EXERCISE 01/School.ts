import { Class } from "./Class";
export class School {
    constructor(private name: string, private classes: Class[] = []) { }

    addClass(classroom: Class) {
        this.classes.push(classroom);
    }
}