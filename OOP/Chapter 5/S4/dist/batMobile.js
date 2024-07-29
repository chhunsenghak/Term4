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
exports.batMobile = void 0;
var Vehicle_1 = require("./Vehicle");
var batMobile = /** @class */ (function (_super) {
    __extends(batMobile, _super);
    function batMobile(plateID, weight, batman) {
        var _this = _super.call(this, plateID, weight) || this;
        _this.batman = batman;
        return _this;
    }
    batMobile.prototype.getSpeed = function () {
        if (batMobile) {
            console.log(1);
            return 500;
        }
        else {
            return 110;
        }
    };
    return batMobile;
}(Vehicle_1.Vehicle));
exports.batMobile = batMobile;
