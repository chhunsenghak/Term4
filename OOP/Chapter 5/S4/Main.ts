import { TucTuc } from "./TucTuc";
import { batMobile } from "./batMobile";
import { Minivan } from "./MiniVan";

class VehicleConvoy {
    getMaxSpeed() {
        if (tuctuc.getSpeed() > bat.getSpeed() && tuctuc.getSpeed() > van.getSpeed()) {
            return tuctuc.getSpeed();
        } else if (bat.getSpeed() > tuctuc.getSpeed() && bat.getSpeed() > van.getSpeed()) {
            return bat.getSpeed()
        } else if (van.getSpeed() > bat.getSpeed() && van.getSpeed() > tuctuc.getSpeed()) {
            return van.getSpeed()
        }
    }
}
let tuctuc = new TucTuc("1", 100, 4, 5);
let bat = new batMobile("2", 200, true);
let van = new Minivan('3', 300, 30, 20);

console.log(new VehicleConvoy().getMaxSpeed())