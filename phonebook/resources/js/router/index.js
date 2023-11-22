import {createRouter, createWebHistory} from "vue-router";
import phoneIndex from '../components/pages/main.vue';
import notFound from '../components/notFound.vue';

const routes =[
    {
        path:'/',
        component: phoneIndex
    },
    {
        path:'/:pathMatch(.*)*',
        component: notFound
    }

]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router
