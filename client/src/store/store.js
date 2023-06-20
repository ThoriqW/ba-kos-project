import { reactive } from "vue";
import { rekomendasiKos } from "@/data/kos";
import { kosData } from "@/data/kos";

export default reactive({
  //data daftar rekomendasi kos
  rekomendasiKos: rekomendasiKos,
  kosData: kosData,

  //toggle modal login
  toggleModal() {
    document.getElementById("modal").classList.toggle("hidden");
  },

  formUserRegistration: {
    name: "",
    phone_number: "",
    email: "",
    password: "",
  },

  formMitraRegistration: {
    name: "",
    phone_number: "",
    email: "",
    password: "",
  },

  formUserProfile: {
    user_id: "",
    profile_photo: "",
    gender: [],
    birthdate: "",
    city: "",
    status: "",
    job: [],
  },

  formLoginUser: {
    email: "",
    password: "",
  },

  formLoginMitra: {
    email: "",
    password: "",
  },
});
