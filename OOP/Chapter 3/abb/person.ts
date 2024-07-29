class Person{
    name: string;
    address : string;
    constructor(name : string, address: string){
        this.name = name;
        this.address = address
    }
    getName(){
        return this.name;
    }
}

class Student extends Person{
    test : string;
    constructor(name: string, address: string, test: string){
        super(name, address)
        this.test = test;
    }    
}

console.log(new Student("Hello", "", "1"))


