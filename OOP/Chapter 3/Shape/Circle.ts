import { Shape } from "./Main";
class Circle extends Shape {
    radius: number;
    constructor(leftX: number, bottomY: number, radius: number) {
        super(leftX, bottomY)
        this.radius = radius;
    }
    getArea(): number {
        return this.leftX * this.bottomY / this.radius
    }
    getWidth(): number {
        return this.leftX
    }
    getHeight(): number {
        return this.bottomY
    }
}