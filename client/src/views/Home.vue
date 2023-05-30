<template>
  <ModalLogin></ModalLogin>
  <NavigationBar></NavigationBar>
  <HeaderHome></HeaderHome>

  <Breedcrumb :crumbs="crumbs"></Breedcrumb>

  <div class="container max-w-screen-xl mx-auto px-5">
    <!-- Rekomendasi Section -->
    <section class="my-14">
      <div class="flex items-center justify-between mb-5">
        <div>
          <h1 class="sm:text-2xl text-1xl font-bold">
            Kos <span class="text-button-color">Rekomendasi</span>
          </h1>
        </div>
        <div class="flex items-center">
          <span class="border-2 h-[20px] mx-5"></span>
          <button
            class="btn px-4 py-2 bg-button-color text-primary-color sm:text-sm text-xs"
          >
            Lihat semua
          </button>
        </div>
      </div>
      <Splide :options="{ rewind: true }" aria-label="Rekomendasi Kos">
        <SplideSlide>
          <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <KosCard
              v-for="kos in store.rekomendasiKos"
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
        </SplideSlide>
        <SplideSlide>
          <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <KosCard
              v-for="kos in store.rekomendasiKos"
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
        </SplideSlide>
      </Splide>
    </section>

    <hr class="w-full border-b-2 border-secondary-color" />

    <!-- Area Section -->
    <section class="my-14">
      <div class="sm:flex sm:items-center mb-5">
        <div>
          <h1 class="sm:text-2xl text-1xl font-bold mr-2 mb-2 sm:mb-0">
            Cari Kos di <span class="text-button-color">Area</span>
          </h1>
        </div>
      </div>
      <AreaSection></AreaSection>
    </section>

    <hr class="w-full border-b-2 border-secondary-color" />

    <!-- Sekitar Campus Section -->
    <section class="my-14">
      <div class="sm:flex sm:items-center mb-5">
        <div>
          <h1 class="sm:text-2xl text-1xl font-bold mr-2 mb-2 sm:mb-0">
            Cari Kos di Sekitar <span class="text-button-color">Kampus</span>
          </h1>
        </div>
      </div>
      <CampusSection></CampusSection>
    </section>

    <hr class="w-full border-b-2 border-secondary-color" />
  </div>

  <!-- CTA Section -->
  <section class="my-14">
    <CallToActionSection></CallToActionSection>
  </section>

  <div class="container max-w-screen-xl mx-auto px-5">
    <hr class="w-full border-b-2 border-secondary-color" />
    <!-- Why Section -->
    <section class="my-14">
      <div class="sm:flex sm:items-center mb-5">
        <div>
          <h1 class="sm:text-2xl text-1xl font-bold mr-2 mb-2 sm:mb-0">
            Mengapa Memilih <span class="text-button-color">Ba-Kos</span>
          </h1>
        </div>
      </div>
      <WhyChooseUsSection></WhyChooseUsSection>
    </section>
    <hr class="w-full border-b-2 border-secondary-color" />
  </div>

  <!-- Footer -->
  <section class="mt-14 bg-button-color">
    <Footer></Footer>
  </section>
</template>

<script>
import NavigationBar from "@/components/NavigationBar.vue";
import HeaderHome from "@/components/HeaderHome.vue";
import KosCard from "@/components/KosCard.vue";
import AreaSection from "@/components/AreaSection.vue";
import CampusSection from "@/components/CampusSection.vue";
import CallToActionSection from "@/components/CallToActionSection.vue";
import WhyChooseUsSection from "@/components/WhyChooseUsSection.vue";
import Footer from "@/components/Footer.vue";
import ModalLogin from "@/components/ModalLogin.vue";
import Breedcrumb from "@/components/Breedcrumb.vue";

import store from "@/store/store";

import { Splide, SplideSlide } from "@splidejs/vue-splide";
import "@splidejs/vue-splide/css";

export default {
  // eslint-disable-next-line vue/multi-word-component-names
  name: "Home",
  components: {
    NavigationBar,
    HeaderHome,
    KosCard,
    AreaSection,
    CampusSection,
    CallToActionSection,
    WhyChooseUsSection,
    Footer,
    Splide,
    SplideSlide,
    ModalLogin,
    Breedcrumb,
  },
  data() {
    return {
      store,
      crumbs: ["Home"],
    };
  },
};
</script>
