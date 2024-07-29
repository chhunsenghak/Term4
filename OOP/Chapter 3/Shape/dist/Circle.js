"use strict";
var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        if (typeof b !== "function" && b !== null)
            throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
Object.defineProperty(exports, "__esModule", { value: true });
var Main_1 = require("./Main");
var Circle = /** @class */ (function (_super) {
    __extends(Circle, _super);
    function Circle(leftX, bottomY, radius) {
        var _this = _super.call(this, leftX, bottomY) || this;
        _this.radius = radius;
        return _this;
    }
    Circle.prototype.getArea = function () {
        return this.leftX * this.bottomY / this.radius;
    };
    Circle.prototype.getWidth = function () {
        return this.leftX;
    };
    Circle.prototype.getHeight = function () {
        return this.bottomY;
    };
    return Circle;
}(Main_1.Shape));
