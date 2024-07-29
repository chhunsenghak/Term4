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
var Rectangle = /** @class */ (function (_super) {
    __extends(Rectangle, _super);
    function Rectangle(leftX, bottomY, righX, topY) {
        var _this = _super.call(this, leftX, bottomY) || this;
        _this.rightX = righX;
        _this.topY = topY;
        return _this;
    }
    Rectangle.prototype.getArea = function () {
        return 1;
    };
    Rectangle.prototype.getWidth = function () {
        return this.leftX;
    };
    Rectangle.prototype.getHeight = function () {
        return this.bottomY;
    };
    return Rectangle;
}(Main_1.Shape));
