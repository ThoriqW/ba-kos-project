<template>
  <div class="p-4 sm:ml-80">
    <div class="mt-5 ml-5">
      <h1 class="text-2xl font-bold mb-1">Cari alamat kos anda di peta</h1>
      <p class="text-black-color text-opacity-50">
        Posisikan pin untuk tampilkan alamat kos. <br />
        Silakan lengkapi dengan nomor rumah dan RT/RW, jika belum ada.
      </p>
    </div>
    <form class="border-2 border-secondary-color p-4 mt-5 ml-5">
      <div class="mb-10">
        <p class="text-xl font-bold">Alamat</p>
        <textarea
          name="alamat"
          id="alamat"
          cols="5"
          rows="5"
          class="py-3 px-2 focus:outline-none bg-secondary-color w-96 mt-3"
        ></textarea>
      </div>
      <div class="mb-10">
        <p class="font-bold text-xl">Provinsi</p>
        <select
          id="provinsi"
          name="provinsi"
          type="text"
          class="py-3 px-2 focus:outline-none bg-secondary-color w-96 mt-3"
        >
          <option value="" selected disabled hidden></option>
          <option value="Belum Kawin">2023</option>
          <option value="Kawin">2022</option>
        </select>
      </div>
      <div class="mb-10">
        <p class="font-bold text-xl">Kabupaten/Kota</p>
        <select
          id="kabupaten"
          name="kabupaten"
          type="text"
          class="py-3 px-2 focus:outline-none bg-secondary-color w-96 mt-3"
        >
          <option value="" selected disabled hidden></option>
          <option value="Belum Kawin">2023</option>
          <option value="Kawin">2022</option>
        </select>
      </div>
      <div class="mb-10">
        <p class="font-bold text-xl">Kecamatan</p>
        <select
          id="kecamatan"
          name="kecamata"
          type="text"
          class="py-3 px-2 focus:outline-none bg-secondary-color w-96 mt-3"
        >
          <option value="" selected disabled hidden></option>
          <option value="Belum Kawin">2023</option>
          <option value="Kawin">2022</option>
        </select>
      </div>
      <div class="mb-10">
        <p class="text-xl font-bold">Catatan Alamat</p>
        <p class="text-black-color text-opacity-50">
          Deskripsi patokan agar kos mudah ditemukan. (opsional)
        </p>
        <textarea
          name="alamat"
          id="alamat"
          cols="5"
          rows="5"
          class="py-3 px-2 focus:outline-none bg-secondary-color w-96 mt-3"
        ></textarea>
      </div>
      <NextStep />
    </form>
  </div>
</template>

<script>
import NextStep from "./NextStep.vue";

export default {
  name: "FormAlamatKos",
  components: {
    NextStep,
  },
};
</script>

<style lang="scss" scoped></style>
