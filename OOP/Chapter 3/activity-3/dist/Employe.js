class Contract {
}
class Employee {
    /**
     * @param name  employee name
     * @param employeeType can be either "DEVELOPPER" or "MANAGER" or "COMERCIAL"
     */
    constructor(name, employeeType) {
        this.name = name;
        this.employeeType = employeeType;
        this.contracts = []; // this is intresting  only for commercials
        this.teamMembers = []; // this is intresting  only for managers
        this.skills = []; // this is intresting  only for develeppers
    }
    getSalary() {
        if (this.employeeType === "COMERCIAL") {
            return this.contracts.length * 400;
        }
        else if (this.employeeType === "MANAGER") {
            return this.teamMembers.length * 600;
        }
        else if (this.employeeType === "DEVELOPPER") {
            let salary = this.skills.length * 500;
            if (this.skills.includes("OOP")) {
                salary += 2000;
            }
            return salary;
        }
        return 0; // Else we don't know
    }
}
