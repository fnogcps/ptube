import {createRouter, createWebHistory} from "vue-router";

import Login from "../view/LoginForm.vue";
import Register from "../view/RegisterForm.vue";

const routes = [
  {
    path: '/login',
    component: Login
  },
  {
    path: '/register',
    component: Register
  }
]

const router = createRouter({
    history: createWebHistory(),
    routes
  });

export default router;

