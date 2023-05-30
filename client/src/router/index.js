import { createRouter, createWebHistory } from "vue-router";
import Home from "@/views/Home.vue";
import LoginMitra from "@/views/LoginMitra.vue";
import LoginUser from "@/views/LoginUser.vue";
import KosPage from "@/views/KosPage.vue";
import KosDetailPage from "@/views/KosDetailPage.vue";
import UserKosSayaPage from "@/views/UserKosSayaPage.vue";
import UserBookingPage from "@/views/UserBookingPage.vue";

const routes = [
  {
    path: "/",
    name: "Home",
    component: Home,
  },
  {
    path: "/login-user",
    name: "LoginUser",
    component: LoginUser,
  },
  {
    path: "/login-mitra",
    name: "Login",
    component: LoginMitra,
  },
  {
    path: "/daftar-kos",
    name: "DaftarKos",
    component: KosPage,
  },
  {
    path: "/kos/:id",
    name: "KosDetailPage",
    component: KosDetailPage,
  },
  {
    path: "/user/kos-saya",
    name: "UserKosSayaPage",
    component: UserKosSayaPage,
  },
  {
    path: "/user/booking",
    name: "UserBookingPage",
    component: UserBookingPage,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
