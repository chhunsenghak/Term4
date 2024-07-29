"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.Shape = void 0;
var Shape = /** @class */ (function () {
    function Shape(leftX, bottomY) {
        this.leftX = leftX;
        this.bottomY = bottomY;
    }
    Shape.prototype.getWidth = function () {
        return this.leftX;
    };
    Shape.prototype.getHeight = function () {
        return this.bottomY;
    };
    Shape.prototype.getArea = function () {
        return this.bottomY * this.leftX;
    };
    return Shape;
}());
exports.Shape = Shape;
