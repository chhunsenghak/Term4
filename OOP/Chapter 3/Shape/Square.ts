import { Shape } from "./Main";
class Square extends Shape {
    size: number;
    constructor(leftX: number, bottomY: number, size: number) {
        super(leftX, bottomY)
        this.size = size;
    }
    getArea(): number {
        return 10
    }
    getWidth(): number {
        return 10
    }
    getHeight(): number {
        return 10
    }
}