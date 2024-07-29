import { createWebHistory, createRouter } from 'vue-router'
import HomePage from '@/views/HomePage.vue';
import AboutPage from '@/views/AboutPage.vue';
import ContactPage from '@/views/ContactPage.vue';

const routes = [
    {
        path: '/',
        name: 'home',
        component: HomePage
    },
    {
        path: "/about",
        name: "about",
        component: AboutPage
    },
    {
        path: '/contact',
        name: 'contact',    
        component: ContactPage
    }
]
const router = createRouter({
    history: createWebHistory(),
    routes,
})
export default router;