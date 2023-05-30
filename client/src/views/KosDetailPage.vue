<template>
  <NavigationBar></NavigationBar>
  <Breedcrumb :crumbs="crumbs"></Breedcrumb>
  <div v-if="kos" class="container max-w-screen-xl mx-auto px-5">
    <section class="my-14">
      <div class="flex md:h-[500px]">
        <div class="md:flex md:w-[850px] md:mr-3">
          <img
            class="object-cover w-full"
            :src="require(`../assets/image/${kos.img}`)"
            alt=""
          />
        </div>
        <div class="flex-auto flex flex-col md:block hidden">
          <div class="h-1/2 flex">
            <img
              class="object-cover w-full mb-3"
              :src="require(`../assets/image/${kos.img}`)"
              alt=""
            />
          </div>
          <div class="h-1/2 flex">
            <img
              class="object-cover w-full"
              :src="require(`../assets/image/${kos.img}`)"
              alt=""
            />
          </div>
        </div>
      </div>

      <!-- Deskripsi -->
      <div class="flex mt-3">
        <div class="w-[850px] mr-3">
          <div class="flex">
            <div
              class="w-[70px] h-[65px] bg-secondary-color border-2 border-button-color mr-3 flex justify-center items-center"
            >
              <div class="flex flex-col text-sm">
                <font-awesome-icon class="mb-1" icon="fa-solid fa-image" />
                Foto
              </div>
            </div>
            <div
              class="w-[70px] h-[65px] bg-secondary-color flex justify-center items-center"
            >
              <div class="flex flex-col text-sm">
                <font-awesome-icon class="mb-1" icon="fa-solid fa-video" />
                Video
              </div>
            </div>
          </div>
          <div class="mt-3">
            <h1 class="text-3xl font-bold">{{ kos.name }} | {{ kos.kec }}</h1>
            <div class="mt-3">
              <div class="flex">
                <p
                  class="bg-button-color text-secondary-color py-1 px-2 text-xs mr-8"
                >
                  PUTRI
                </p>
                <div class="flex items-center mr-8">
                  <font-awesome-icon
                    icon="fa-solid fa-location-dot"
                    class="mr-2"
                  />
                  <p>{{ kos.kec }}</p>
                </div>
                <div class="flex items-center">
                  <font-awesome-icon class="mr-1" icon="fa-solid fa-star" />
                  <p class="font-Lato">{{ kos.rating }}</p>
                </div>
              </div>
            </div>
          </div>

          <hr class="w-full border-b-2 border-secondary-color my-4" />

          <div class="flex flex-col mt-3">
            <h1 class="text-xl font-medium mb-3">Spesifikasi Kos</h1>
            <div class="flex flex-colo">
              <div class="flex text-sm items-center mr-5">
                <font-awesome-icon
                  class="mr-2"
                  icon="fa-solid fa-square-parking"
                />
                <p>{{ kos.spesifikasi[0] }}</p>
              </div>
              <div class="flex text-sm items-center">
                <font-awesome-icon class="mr-2" icon="fa-solid fa-bolt" />
                <p>{{ kos.spesifikasi[1] }}</p>
              </div>
            </div>
          </div>

          <hr class="w-full border-b-2 border-secondary-color my-4" />

          <div class="flex flex-col mt-3">
            <h1 class="text-xl font-medium mb-3">Fasilitas Kos</h1>
            <div class="flex flex-colo">
              <div class="flex text-sm items-center mr-5 mb-5">
                <font-awesome-icon
                  class="mr-2"
                  icon="fa-solid fa-square-parking"
                />
                <p>{{ kos.fasilitas[0] }}</p>
              </div>
              <div class="flex text-sm items-center mr-5 mb-5">
                <font-awesome-icon class="mr-2" icon="fa-solid fa-bolt" />
                <p>{{ kos.fasilitas[1] }}</p>
              </div>
              <div class="flex text-sm items-center mr-5 mb-5">
                <font-awesome-icon class="mr-2" icon="fa-solid fa-bolt" />
                <p>{{ kos.fasilitas[2] }}</p>
              </div>
            </div>
            <div class="flex flex-colo">
              <div class="flex text-sm items-center mr-5 mb-5">
                <font-awesome-icon
                  class="mr-2"
                  icon="fa-solid fa-square-parking"
                />
                <p>{{ kos.fasilitas[3] }}</p>
              </div>
              <div class="flex text-sm items-center mr-5 mb-5">
                <font-awesome-icon class="mr-2" icon="fa-solid fa-bolt" />
                <p>{{ kos.fasilitas[4] }}</p>
              </div>
              <div class="flex text-sm items-center mr-5 mb-5">
                <font-awesome-icon class="mr-2" icon="fa-solid fa-bolt" />
                <p>{{ kos.fasilitas[5] }}</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Harga Info -->
        <div class="flex-auto">
          <div class="shadow-lg">
            <div class="flex-flex-col">
              <div class="flex flex-col p-3">
                <p class="text-xs">MULAI</p>
                <p class="font-Lato text-lg">
                  {{ kos.harga }} <span> / Bulan</span>
                </p>
              </div>
              <div class="flex p-3 items-center bg-secondary-color">
                <font-awesome-icon icon="fa-brands fa-facebook" class="mr-3" />
                <p>Hubungi Pemiliki</p>
              </div>
              <div class="flex p-3 items-center bg-button-color">
                <font-awesome-icon icon="fa-solid fa-heart" class="mr-3" />
                <p>Simpan</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

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
import Footer from "@/components/Footer.vue";
import WhyChooseUsSection from "@/components/WhyChooseUsSection.vue";
import store from "@/store/store";
import Breedcrumb from "@/components/Breedcrumb.vue";

export default {
  name: "KosDetailPage",
  components: {
    NavigationBar,
    Footer,
    WhyChooseUsSection,
    Breedcrumb,
  },
  data() {
    return {
      kos: null,
      store,
      crumbs: ["Home", "/", "Kos", "/", "Profile Kos"],
    };
  },
  mounted() {
    console.log(this.$route.params.id); // For debugging purposes
    this.fetchKosDetail();
  },
  methods: {
    fetchKosDetail() {
      for (let i = 0; i < this.store.kosData.length; i++) {
        if (this.store.kosData[i].id === this.$route.params.id) {
          this.kos = this.store.kosData[i];
          console.log(this.kos);
        }
      }
    },
  },
};
</script>

<style></style>
