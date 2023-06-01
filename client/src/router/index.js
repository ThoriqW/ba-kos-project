import { createRouter, createWebHistory } from "vue-router";
import Home from "@/views/Home.vue";
import LoginMitra from "@/views/Mitra/Login.vue";
import LoginUser from "@/views/User/Login.vue";
import KosView from "@/views/Kos/KosView.vue";
import KosInfoView from "@/views/Kos/KosInfoView.vue";
import UserKosSayaView from "@/views/User/UserKosSayaView.vue";
import UserBookingView from "@/views/User/UserBookingView.vue";
import DaftarMitra from "@/views/Mitra/Daftar.vue";
import DaftarUser from "@/views/User/Daftar.vue";

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
    name: "LoginMitra",
    component: LoginMitra,
  },
  {
    path: "/daftar-mitra",
    name: "DaftarMitra",
    component: DaftarMitra,
  },
  {
    path: "/daftar-user",
    name: "DaftarUser",
    component: DaftarUser,
  },
  {
    path: "/daftar-kos",
    name: "DaftarKos",
    component: KosView,
  },
  {
    path: "/kos/:id",
    name: "KosDetailPage",
    component: KosInfoView,
  },
  {
    path: "/user/kos-saya",
    name: "UserKosSayaPage",
    component: UserKosSayaView,
  },
  {
    path: "/user/booking",
    name: "UserBookingPage",
    component: UserBookingView,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
