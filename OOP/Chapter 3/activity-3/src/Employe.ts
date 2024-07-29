class Employee {
  private name: string;
  constructor(name: string) {
    this.name = name;
  }
}
class commercials extends Employee {
  salary: number
  contract: string[] = [];
  constructor(name: string, salary: number, contract: string[]) {
    super(name);
    this.salary = salary;
    this.contract = contract;
  }
  getSalary() {
    return this.salary
  }
}

class Developer extends Employee {
  salary: number;
  skills: String[] = []
  constructor(name: string, salary: number, skills: string[]) {
    super(name);
    this.salary = salary;
    this.skills = skills;
  }
  getSalary() {
    if (this.skills.includes("OOP")) {
     return this.skills.length * this.salary + 2000;
    }
    return 0
  }
}

class Manager extends Employee {
  salary: number;
  teamMembers: Employee[] = [];
  constructor(name: string, salary: number) {
    super(name);
    this.salary = salary;
  }
  getSalary() {
    return this.teamMembers.length * this.salary
  }
}

let Develop = new Developer("Heang", 1200, ["Khmer", "OOP"]);
let managers = new Manager("Phandy", 2000);
let cus = new commercials("Hello", 1200, ["12"])
console.log(cus) 