<template>
  <ModalLogin></ModalLogin>
  <NavigationBar></NavigationBar>
  <Breedcrumb :crumbs="crumbs"></Breedcrumb>
  <HeaderKosPage></HeaderKosPage>
  <div class="container max-w-screen-xl mx-auto px-5 sm:mt-28">
    <hr class="w-full border-b-2 border-secondary-color" />
    <section class="my-14">
      <p class="mb-2">Page {{ currentPage }} dari {{ totalPages }}</p>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <KosCard
          v-for="kos in paginatedData"
          :imgURL="kos.img"
          :type="kos.type"
          :rating="kos.rating"
          :name="kos.name"
          :kec="kos.kec"
          :harga="kos.harga"
          :desc="kos.desc"
          :kosId="kos.id"
          v-bind:key="kos.id"
        ></KosCard>
      </div>
      <div class="flex justify-center mt-3">
        <button
          class="btn m-3 mt-4 text-black-color"
          @click="previousPage"
          :disabled="currentPage === 1"
        >
          <font-awesome-icon class="text-xl" icon="fa-solid fa-angles-left" />
        </button>
        <button
          class="btn m-3 mt-4 text-black-color"
          @click="nextPage"
          :disabled="currentPage === totalPages"
        >
          <font-awesome-icon class="text-xl" icon="fa-solid fa-angles-right" />
        </button>
      </div>
    </section>
    <hr class="w-full border-b-2 border-secondary-color" />
  </div>
  <section class="mt-14 bg-button-color">
    <Footer></Footer>
  </section>
</template>

<script>
import NavigationBar from "@/components/NavigationBar.vue";
import KosCard from "@/components/KosCard.vue";
import HeaderKosPage from "@/components/HeaderKosPage.vue";
import Footer from "@/components/Footer.vue";
import Breedcrumb from "@/components/Breedcrumb.vue";
import ModalLogin from "@/components/ModalLogin.vue";

import store from "@/store/store";

export default {
  name: "KosView",
  components: {
    NavigationBar,
    HeaderKosPage,
    KosCard,
    Footer,
    Breedcrumb,
    ModalLogin,
  },
  data() {
    return {
      store,
      pageSize: 8, // Number of items per page
      currentPage: 1, // Current page number
      crumbs: [{ name: "Home", url: "/" }, { name: "Kos" }],
    };
  },
  computed: {
    totalPages() {
      return Math.ceil(this.store.kosData.length / this.pageSize);
    },
    paginatedData() {
      const startIndex = (this.currentPage - 1) * this.pageSize;
      const endIndex = startIndex + this.pageSize;
      return this.store.kosData.slice(startIndex, endIndex);
    },
  },
  methods: {
    previousPage() {
      if (this.currentPage > 1) {
        console.log("tes");
        this.currentPage--;
      }
    },
    nextPage() {
      if (this.currentPage < this.totalPages) {
        this.currentPage++;
      }
    },
  },
};
</script>

<style scoped></style>
