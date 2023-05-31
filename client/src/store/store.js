import { reactive } from "vue";
import { rekomendasiKos } from "@/data/kos";
import { kosData } from "@/data/kos";

export default reactive({
  //data daftar rekomendasi kos
  rekomendasiKos: rekomendasiKos,
  kosData: kosData,

  //toggle modal login
  toggleModal() {
    const body = document.querySelector("body");
    document.getElementById("modal").classList.toggle("hidden");
    if (!document.getElementById("modal").classList.contains("hidden")) {
      // Disable scroll
      body.style.overflow = "hidden";
    } else {
      // Enable scroll
      body.style.overflow = "auto";
    }
  },
});
