<template>
  <div class="p-4 sm:ml-80">
    <div class="mt-5 ml-5">
      <h1 class="text-2xl font-bold mb-1">Lengkapi data Kos</h1>
      <p>
        Yuk, bantu calon penyewa mengetahui kamar kos yang akan Anda sewakan.
      </p>
    </div>
    <form class="border-2 border-secondary-color p-4 mt-5 ml-5">
      <div class="mb-10">
        <p class="font-bold text-xl">Nama Kos?</p>
        <p class="text-black-color text-opacity-50">
          Saran: Kos (spasi) Nama Kos, Tanpa Nama Kecamatan dan Kota
        </p>
        <input
          type="text"
          class="py-3 px-2 focus:outline-none bg-secondary-color w-96 mt-3"
        />
      </div>
      <div class="mb-10">
        <p class="font-bold text-xl">Tipe Kos</p>
        <p class="text-black-color text-opacity-50">
          Pilih jenis kos yang sesuai
        </p>
        <div class="sm:flex mt-4">
          <label class="inline-flex items-center mr-10" for="tipeLakilaki">
            <input
              type="checkbox"
              value="LakiLaki"
              id="tipeLakilaki"
              class="w-4 h-4 text-button-color"
            />
            <span class="ml-4">Laki Laki</span>
          </label>
          <label class="inline-flex items-center" for="tipePerempuan">
            <input
              type="checkbox"
              value="Perempuan"
              id="tipePerempuan"
              class="w-4 h-4 text-button-color"
            />
            <span class="ml-4">Perempuan</span>
          </label>
        </div>
      </div>
      <div class="mb-5">
        <p class="font-bold text-xl">Deskripsi Kos?</p>
        <p class="text-black-color text-opacity-50">
          Ceritakan hal menarik tentang kos Anda.
        </p>
        <textarea
          type="text"
          id="deskripsi"
          name="deskripsi"
          cols="5"
          rows="5"
          class="py-3 px-2 focus:outline-none bg-secondary-color w-96 mt-3"
        >
        </textarea>
      </div>
      <div class="mb-10">
        <p class="font-bold text-xl">Kapan kon ini dibangun?</p>
        <p class="text-black-color text-opacity-50">
          Saran: Kos (spasi) Nama Kos, Tanpa Nama Kecamatan dan Kota
        </p>
        <select
          type="text"
          class="py-3 px-2 focus:outline-none bg-secondary-color w-96 mt-3"
        >
          <option value="" selected disabled hidden>Tahun</option>
          <option value="Belum Kawin">2023</option>
          <option value="Kawin">2022</option>
        </select>
      </div>
      <div class="mb-5">
        <p class="font-bold text-xl">Catatan Lainnya?</p>
        <p class="text-black-color text-opacity-50">(Opsional).</p>
        <textarea
          type="text"
          class="py-3 px-2 focus:outline-none bg-secondary-color w-96 mt-3"
        >
        </textarea>
      </div>
      <NextStep />
    </form>
  </div>
</template>

<script>
import NextStep from "./NextStep.vue";

export default {
  name: "FormDataKos",
  components: {
    NextStep,
  },
};
</script>

<style lang="scss" scoped></style>
