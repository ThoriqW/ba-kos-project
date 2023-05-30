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
  faChevronRight
);

createApp(App)
  .use(router, VueSplide)
  .component("font-awesome-icon", FontAwesomeIcon)
  .mount("#app");
