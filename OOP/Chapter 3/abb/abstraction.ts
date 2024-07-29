abstract class Animal {
    private name: string;
    constructor(name: string) {
        this.name = name;
    }
    getName() { return this.name }
    abstract playSound(sound: string): void;

}

class Dog extends Animal {
    constructor(name: string) {
        super(name)
    }
    playSound(sound: string): void {
        console.log(sound)
    }
}

class Cat extends Animal {
    constructor(name: string) {
        super(name);
    }
    playSound(sound: string): void {
        console.log(sound)
    }
}