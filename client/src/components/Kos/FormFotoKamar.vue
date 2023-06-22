<template>
  <div class="p-4 sm:ml-80">
    <div class="mt-5 ml-5">
      <h1 class="text-2xl font-bold mb-1">Tambahkan foto kamar</h1>
      <p class="text-black-color text-opacity-50">
        Foto yang menarik adalah hal pertama yang diperhatikan oleh calon
        penyewa
      </p>
    </div>
    <form class="border-2 border-secondary-color p-4 mt-5 ml-5">
      <div class="mb-10">
        <p class="text-xl font-bold">Foto depan kamar</p>
        <p class="text-black-color text-opacity-50">
          Foto bagian depan kamar dari pintu dengan cahaya terang dan jelas.
        </p>
        <input
          type="file"
          class="py-3 px-2 focus:outline-none bg-secondary-color w-96 mt-3"
        />
      </div>
      <div class="mb-10">
        <p class="text-xl font-bold">Foto dalam kamar</p>
        <p class="text-black-color text-opacity-50">
          Foto dari dalam kamar ke arah luar dengan cahaya terang dan jelas.
        </p>
        <input
          type="file"
          class="py-3 px-2 focus:outline-none bg-secondary-color w-96 mt-3"
        />
      </div>
      <div class="mb-10">
        <p class="text-xl font-bold">Foto kamar mandi</p>
        <p class="text-black-color text-opacity-50">
          Tunjukkan kondisi kamar mandi yang akan digunakan oleh penyewa kos.
          (opsional)
        </p>
        <input
          type="file"
          class="py-3 px-2 focus:outline-none bg-secondary-color w-96 mt-3"
        />
      </div>
      <div class="mb-10">
        <p class="text-xl font-bold">Foto lainnya</p>
        <p class="text-black-color text-opacity-50">
          Anda bisa tambahkan foto fasilitas umum kos di sini. (opsional)
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
  name: "FormFotoKamar",
  components: {
    NextStep,
  },
};
</script>

<style lang="scss" scoped></style>
