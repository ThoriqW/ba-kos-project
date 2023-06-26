import { createRouter, createWebHistory } from "vue-router";

const routes = [
  {
    path: "/",
    name: "Home",
    component: () => import("@/views/Home.vue"),
  },
  {
    path: "/login-user",
    name: "LoginUser",
    component: () => import("@/views/User/Login.vue"),
  },
  {
    path: "/login-mitra",
    name: "LoginMitra",
    component: () => import("@/views/Mitra/Login.vue"),
  },
  {
    path: "/daftar-mitra",
    name: "DaftarMitra",
    component: () => import("@/views/Mitra/Daftar.vue"),
  },
  {
    path: "/daftar-user",
    name: "DaftarUser",
    component: () => import("@/views/User/Daftar.vue"),
  },
  {
    path: "/kos",
    name: "Kos",
    component: () => import("@/views/Kos/KosView.vue"),
  },
  {
    path: "/kos/:id",
    name: "KosInfoView",
    component: () => import("@/views/Kos/KosInfoView.vue"),
  },
  {
    path: "/user/kos-saya",
    name: "UserKosSayaView",
    component: () => import("@/views/User/UserKosSayaView.vue"),
    meta: {
      requiresAuth: true,
      roles: ["user"], // Menandakan bahwa halaman ini memerlukan autentikasi
    },
  },
  {
    path: "/user/booking",
    name: "UserBookingView",
    component: () => import("@/views/User/UserBookingView.vue"),
    meta: {
      requiresAuth: true,
      roles: ["user"], // Menandakan bahwa halaman ini memerlukan autentikasi
    },
  },
  {
    path: "/user/edit-profile",
    name: "EditProfileView",
    component: () => import("@/views/User/EditProfileView.vue"),
    meta: {
      requiresAuth: true,
      roles: ["user"], // Menandakan bahwa halaman ini memerlukan autentikasi
    },
  },
  {
    path: "/mitra/dashboard",
    name: "DashboardMitraView",
    component: () => import("@/views/Mitra/DashboardMitraView.vue"),
    meta: {
      requiresAuth: true,
      roles: ["mitra"], // Menandakan bahwa halaman ini memerlukan autentikasi
    },
  },
  {
    path: "/mitra/dashboard/tambah-kos/step/:id",
    name: "TambahDataKosView",
    component: () => import("@/views/Kos/TambahDataKosView.vue"),
    meta: {
      requiresAuth: true,
      roles: ["mitra"], // Menandakan bahwa halaman ini memerlukan autentikasi
    },
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
