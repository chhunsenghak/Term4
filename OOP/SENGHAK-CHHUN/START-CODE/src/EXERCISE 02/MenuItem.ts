import { dish } from "./dish";
export class MenuItem {
    private menus: dish[] = [];
    setDish(dish) {
        this.menus.push(dish)
    }
}

