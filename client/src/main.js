import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import "./assets/tailwind.css";
import VueSplide from "@splidejs/vue-splide";

/* import the fontawesome core */
import { library } from "@fortawesome/fontawesome-svg-core";

/* import font awesome icon component */
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";

/* import specific icons */
import {
  faTwitter,
  faFacebook,
  faInstagram,
  faGoogle,
  faWhatsapp,
} from "@fortawesome/free-brands-svg-icons";
import {
  faLocationDot,
  faHeart,
  faAnglesRight,
  faAnglesLeft,
  faImage,
  faVideo,
  faStar,
  faSquareParking,
  faBolt,
  faUser,
  faHouse,
  faBookmark,
  faFile,
  faCommentDollar,
  faUserShield,
  faChevronRight,
  faCircleUser,
  faBuilding,
  faBullhorn,
  faChartSimple,
  faCirclePlus,
  faCircleCheck,
} from "@fortawesome/free-solid-svg-icons";

/* add icons to the library */
library.add(
  faTwitter,
  faFacebook,
  faInstagram,
  faGoogle,
  faWhatsapp,
  faLocationDot,
  faHeart,
  faAnglesRight,
  faAnglesLeft,
  faImage,
  faVideo,
  faStar,
  faSquareParking,
  faBolt,
  faUser,
  faHouse,
  faBookmark,
  faFile,
  faCommentDollar,
  faUserShield,
  faChevronRight,
  faCircleUser,
  faBuilding,
  faBullhorn,
  faChartSimple,
  faCirclePlus,
  faCircleCheck
);

// Tambahkan pengamanan autentikasi pada setiap perubahan rute
router.beforeEach((to, from, next) => {
  const isAuthenticated = localStorage.getItem("token"); // Periksa apakah pengguna sudah login (contoh: token disimpan di localStorage)

  // Jika halaman memerlukan autentikasi dan pengguna belum login, arahkan ke halaman login
  if (to.matched.some((route) => route.meta.requiresAuth) && !isAuthenticated) {
    next("/");
  } else {
    const requiredRoles = to.meta.roles;
    const userRole = localStorage.getItem("roles");
    if (requiredRoles && !requiredRoles.includes(userRole)) {
      // User does not have the required role, redirect to a unauthorized page or show an error message
      next("/unauthorized");
    } else {
      // User is authenticated and has the required role, proceed to the requested route
      next();
    }
  }
});

createApp(App)
  .use(router, VueSplide)
  .component("font-awesome-icon", FontAwesomeIcon)
  .mount("#app");
