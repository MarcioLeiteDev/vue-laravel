import { createApp } from "vue";
import { createRouter, createWebHistory } from "vue-router";
import App from "./App.vue";
import HomeComponentVue from "./components/Home/HomeComponent.vue";
import LoginComponentVue from "./components/Login/LoginComponent.vue";
import EscritorioComponentVue from "./components/Escritorio/EscritorioComponent.vue";

import "bootstrap/dist/css/bootstrap.min.css";

const routes = [
  {
    path: "/",
    name: "home",
    component: HomeComponentVue,
  },
  {
    path: "/login",
    name: "login",
    component: LoginComponentVue,
  },
  {
    path: "/escritorio",
    name: "escritorio",
    component: EscritorioComponentVue,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

createApp(App).use(router).mount("#app");
