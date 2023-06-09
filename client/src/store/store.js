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
});
