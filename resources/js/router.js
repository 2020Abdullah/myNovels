import { createWebHistory, createRouter } from "vue-router";
import home from "./components/HomeComponent.vue";
import hellow from "./components/ExampleComponent.vue";

const routes = [
    {
        path: "/",
        name: "Home",
        component: home
    },
    {
        path: "/article",
        name: "article",
        component: hellow
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
