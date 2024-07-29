export abstract class Shape {
    leftX: number;
    bottomY: number
    constructor(leftX: number, bottomY: number) {
        this.leftX = leftX;
        this.bottomY = bottomY;
    }
    abstract getWidth(): number {
        return this.leftX
    }
    abstract getHeight():number {
        return this.bottomY
    }
    abstract getArea() : number{
        return this.bottomY * this.leftX
    }
} 

