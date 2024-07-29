import { Shape } from "./Main";
class Rectangle extends Shape {
   rightX: number;
   topY: number;
    constructor(leftX: number, bottomY: number, righX: number, topY: number) {
        super(leftX, bottomY)
        this.rightX = righX;
        this.topY = topY;
    }
    getArea(): number {
        return 1
    }
    getWidth(): number {
        return this.leftX
    }
    getHeight(): number {
        return this.bottomY
    }
}