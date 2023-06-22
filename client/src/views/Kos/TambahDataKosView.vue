<template>
  <aside
    id="sidebar-mitra"
    class="fixed top-0 left-0 z-40 w-80 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar"
  >
    <div class="h-full px-3 py-4 overflow-y-auto bg-secondary-color">
      <ul class="space-y-4 font-medium">
        <li class="py-5 pl-3 border-b-2 border-gray-color">
          <router-link to="/" class="text-lg font-bold flex items-center mr-10">
            Ba-Kos <span class="text-button-color">Palu</span>
          </router-link>
        </li>
        <li class="text-xl font-bold">
          <div class="flex items-center p-2 rounded-lg text-black-color">
            <span class="flex-1">Data Kos</span>
            <font-awesome-icon
              class="text-xl text-button-color"
              icon="fa-solid fa-circle-check "
            />
          </div>
        </li>
        <li class="text-xl font-bold">
          <div class="flex items-center p-2 rounded-lg text-gray-color">
            <span
              class="flex-1"
              :class="
                this.$route.params.id > 1
                  ? 'text-black-color'
                  : 'text-gray-color'
              "
              >Alamat Kos</span
            >
            <font-awesome-icon
              class="text-xl"
              :class="
                this.$route.params.id > 1
                  ? 'text-button-color'
                  : 'text-gray-color'
              "
              icon="fa-solid fa-circle-check"
            />
          </div>
        </li>
        <li class="text-xl font-bold">
          <div class="flex items-center p-2 rounded-lg text-gray-color">
            <span
              class="flex-1"
              :class="
                this.$route.params.id > 2
                  ? 'text-black-color'
                  : 'text-gray-color'
              "
              >Foto Kos</span
            >
            <font-awesome-icon
              class="text-xl"
              :class="
                this.$route.params.id > 2
                  ? 'text-button-color'
                  : 'text-gray-color'
              "
              icon="fa-solid fa-circle-check"
            />
          </div>
        </li>
        <li class="text-xl font-bold">
          <div class="flex items-center p-2 rounded-lg text-gray-color">
            <span
              class="flex-1"
              :class="
                this.$route.params.id > 3
                  ? 'text-black-color'
                  : 'text-gray-color'
              "
              >Foto Kamar</span
            >
            <font-awesome-icon
              class="text-xl"
              :class="
                this.$route.params.id > 3
                  ? 'text-button-color'
                  : 'text-gray-color'
              "
              icon="fa-solid fa-circle-check"
            />
          </div>
        </li>
        <li class="text-xl font-bold">
          <div class="flex items-center p-2 rounded-lg text-gray-color">
            <span
              class="flex-1"
              :class="
                this.$route.params.id > 4
                  ? 'text-black-color'
                  : 'text-gray-color'
              "
              >Fasilitas</span
            >
            <font-awesome-icon
              class="text-xl"
              :class="
                this.$route.params.id > 4
                  ? 'text-button-color'
                  : 'text-gray-color'
              "
              icon="fa-solid fa-circle-check"
            />
          </div>
        </li>
        <li class="text-xl font-bold">
          <div class="flex items-center p-2 rounded-lg text-gray-color">
            <span
              class="flex-1"
              :class="
                this.$route.params.id > 5
                  ? 'text-black-color'
                  : 'text-gray-color'
              "
              >Harga</span
            >
            <font-awesome-icon
              class="text-xl"
              :class="
                this.$route.params.id > 5
                  ? 'text-button-color'
                  : 'text-gray-color'
              "
              icon="fa-solid fa-circle-check"
            />
          </div>
        </li>
      </ul>
    </div>
  </aside>

  <div v-if="this.$route.params.id == 1">
    <FormDataKos />
  </div>
  <div v-if="this.$route.params.id == 2">
    <FormAlamatKos />
  </div>
  <div v-if="this.$route.params.id == 3">
    <FormFotoKos />
  </div>
  <div v-if="this.$route.params.id == 4">
    <FormFotoKamar />
  </div>
  <div v-if="this.$route.params.id == 5">
    <FormFasilitasKos />
  </div>
  <div v-if="this.$route.params.id == 6">
    <FormHargaKos />
  </div>
</template>

<script>
import FormDataKos from "@/components/Kos/FormDataKos.vue";
import FormAlamatKos from "@/components/Kos/FormAlamatKos.vue";
import FormFotoKos from "@/components/Kos/FormFotoKos.vue";
import FormFotoKamar from "@/components/Kos/FormFotoKamar.vue";
import FormFasilitasKos from "@/components/Kos/FormFasilitasKos.vue";
import FormHargaKos from "@/components/Kos/FormHargaKos.vue";

export default {
  name: "TambahDataKosView",
  components: {
    FormDataKos,
    FormAlamatKos,
    FormFotoKos,
    FormFotoKamar,
    FormFasilitasKos,
    FormHargaKos,
  },
  watch: {
    $route(to, from) {
      if (to.params.id !== from.params.id) {
        this.scrollToTop();
      }
    },
  },
  methods: {
    scrollToTop() {
      window.scrollTo(0, 0);
    },
  },
};
</script>

<style lang="scss" scoped></style>
