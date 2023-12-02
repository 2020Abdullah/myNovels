import { createWebHistory, createRouter } from "vue-router";
import home from "./components/HomeComponent.vue";

const routes = [
    {
        path: "/",
        name: "Home",
        component: home
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
