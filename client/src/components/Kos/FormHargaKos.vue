<template>
  <div class="p-4 sm:ml-80">
    <div class="mt-5 ml-5">
      <h1 class="text-2xl font-bold mb-1">Berapa harga sewa per kamar?</h1>
    </div>
    <form class="border-2 border-secondary-color p-4 mt-5 ml-5">
      <div class="mb-10">
        <p class="text-xl font-bold">Harga Per Bulan</p>
        <input
          type="number"
          class="py-3 px-2 focus:outline-none bg-secondary-color w-96 mt-3"
        />
      </div>
      <div class="mb-10">
        <p class="text-xl font-bold">Jangka waktu minimum durasi sewa</p>
        <p class="text-black-color text-opacity-50">
          Foto dari dalam kamar ke arah luar dengan cahaya terang dan jelas.
        </p>
        <select
          type="text"
          class="py-3 px-2 focus:outline-none bg-secondary-color w-96 mt-3"
        >
          <option value="" selected disabled hidden>Minimun</option>
          <option value="1">Min. 1 Bulan</option>
          <option value="2">Min. 2 Bulan</option>
        </select>
      </div>
      <div class="mb-10">
        <p class="text-xl font-bold">Harga uang muka</p>
        <p class="text-black-color text-opacity-50">
          Uang muka/ DP akan diambil dari biaya sewa pertama. (opsional)
        </p>
        <select
          type="text"
          class="py-3 px-2 focus:outline-none bg-secondary-color w-96 mt-3"
        >
          <option value="" selected disabled hidden>%</option>
          <option value="10">10%</option>
          <option value="20">20%</option>
        </select>
      </div>
      <div class="mb-10">
        <p class="text-xl font-bold">Jumlah denda. (opsional)</p>
        <p class="text-black-color text-opacity-50">(opsional)</p>
        <input
          type="number"
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
  name: "FormHargaKos",
  components: {
    NextStep,
  },
};
</script>

<style lang="scss" scoped></style>
