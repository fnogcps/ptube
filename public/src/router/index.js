import {createRouter, createWebHistory} from "vue-router";

import Dashboard from "../view/Dashboard.vue";
import Login from "../view/LoginForm.vue";
import Register from "../view/RegisterForm.vue";
import Home from "../view/screens/Home.vue";
import Update from "../view/screens/Update.vue"

const routes = [
    {
        path: "/",
        component: Dashboard
    },
    {
        path: "/home",
        component: Home
    },
    {
        path: "/login",
        component: Login
    },
    {
        path: "/register",
        component: Register
    },
    {
        path: "/register/update",
        component: Update
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
