import { createApp } from 'vue'
import App from './App.vue'
import {createPinia} from 'pinia'
import router from './router';
import 'bootstrap/dist/css/bootstrap.css'
import bootstrap from 'bootstrap/dist/js/bootstrap.bundle.js' 
const pinia = createPinia()
createApp(App).use(bootstrap).use(router).use(pinia).mount('#app')