import { defineStore } from 'pinia'

export const userStore = defineStore('counter', {
    // arrow function recommended for full type inference
    state: () => {
        return {
            // all these properties will have their type inferred automatically
            count: 0,
            name: 'counter',
        }
    },
    actions: {
        // since we rely on `this`, we cannot use an arrow function
        increment() {
            this.count++
        },
        randomizeCounter() {
            this.count = Math.round(100 * Math.random())
        },
        decrement() {
            this.count--
        },
    },
    getters: {
        doubleCount(state){
            return state.count * 2
        },
        countStatus(state){
            if (state.count >= 50){
                return 'Tured'
            }else if (state.count < 50){
                return 'Failed'
            }
        }
    }
})