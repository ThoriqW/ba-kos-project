<template>
  <div class="p-4 sm:ml-80">
    <div class="mt-5 ml-5">
      <h1 class="text-2xl font-bold mb-1">Pasang foto terbaik kos Anda</h1>
      <p class="text-black-color text-opacity-50">
        Foto yang menarik adalah hal pertama yang diperhatikan oleh calon
        penyewa
      </p>
    </div>
    <form class="border-2 border-secondary-color p-4 mt-5 ml-5">
      <div class="mb-10">
        <p class="text-xl font-bold">Foto bangunan tampak depan</p>
        <p class="text-black-color text-opacity-50">
          Foto horizontal akan terlihat lebih bagus sebagai foto utama kos Anda.
        </p>
        <input
          type="file"
          class="py-3 px-2 focus:outline-none bg-secondary-color w-96 mt-3"
        />
      </div>
      <div class="mb-10">
        <p class="text-xl font-bold">Foto tampilan dalam bangunan</p>
        <p class="text-black-color text-opacity-50">
          Perlihatkan suasana di dalam dengan cahaya terang agar terlihat lebih
          jelas.
        </p>
        <input
          type="file"
          class="py-3 px-2 focus:outline-none bg-secondary-color w-96 mt-3"
        />
      </div>
      <div class="mb-10">
        <p class="text-xl font-bold">Foto tampak dari jalan</p>
        <p class="text-black-color text-opacity-50">
          Lewat foto ini, tunjukkan lingkungan sekitar depan kos ke calon
          penyewa.
        </p>
        <input
          type="file"
          class="py-3 px-2 focus:outline-none bg-secondary-color w-96 mt-3"
        />
      </div>
      <NextStep />
    </form>
  </div>
</template>

<script>
import NextStep from "./NextStep.vue";

export default {
  name: "FormFotoKos",
  components: {
    NextStep,
  },
};
</script>

<style lang="scss" scoped></style>
