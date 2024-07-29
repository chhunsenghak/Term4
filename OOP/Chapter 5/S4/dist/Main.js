"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var TucTuc_1 = require("./TucTuc");
var batMobile_1 = require("./batMobile");
var MiniVan_1 = require("./MiniVan");
var VehicleConvoy = /** @class */ (function () {
    function VehicleConvoy() {
    }
    VehicleConvoy.prototype.getMaxSpeed = function () {
        if (tuctuc.getSpeed() > bat.getSpeed() && tuctuc.getSpeed() > van.getSpeed()) {
            return tuctuc.getSpeed();
        }
        else if (bat.getSpeed() > tuctuc.getSpeed() && bat.getSpeed() > van.getSpeed()) {
            return bat.getSpeed();
        }
        else if (van.getSpeed() > bat.getSpeed() && van.getSpeed() > tuctuc.getSpeed()) {
            return van.getSpeed();
        }
    };
    return VehicleConvoy;
}());
var tuctuc = new TucTuc_1.TucTuc("1", 100, 4, 5);
var bat = new batMobile_1.batMobile("2", 200, true);
var van = new MiniVan_1.Minivan('3', 300, 30, 20);
console.log(new VehicleConvoy().getMaxSpeed());
