<template>
  <div
    class="header-home bg-[url('../assets/image/image-header.webp')] bg-cover bg-center"
    loading="lazy"
  >
    <div class="bg-black-color/70 bg-no-repeat h-72 relative">
      <div
        class="container max-w-screen-xl mx-auto px-5 absolute bottom-[-50px] left-1/2 transform -translate-x-1/2 md:block hidden"
      >
        <div
          class="grid grid-cols-5 gap-3 bg-primary-color p-3 border border-secondary-color shadow-lg"
        >
          <div>
            <p class="font-medium">Pilih Lokasi</p>
            <input
              class="text-sm p-2 focus:outline-none border border-secondary-color w-full mt-2"
              type="text"
              placeholder="Semua Kota"
            />
          </div>
          <div>
            <p class="font-medium">Tipe Kos</p>
            <input
              class="text-sm p-2 focus:outline-none border border-secondary-color w-full mt-2"
              type="text"
              placeholder="Putra/Putri"
            />
          </div>
          <div>
            <p class="font-medium">Rentan Harga</p>
            <input
              class="text-sm p-2 focus:outline-none border border-secondary-color w-full mt-2 font-Lato"
              type="number"
              placeholder="500.000"
            />
          </div>
          <div class="relative">
            <input
              class="text-sm p-2 focus:outline-none border border-secondary-color w-full mt-2 absolute bottom-0 font-Lato"
              type="number"
              placeholder="1.000.000"
            />
          </div>
          <div class="relative">
            <button
              class="w-full text-sm bg-button-color btn p-2 text-secondary-color absolute bottom-0"
            >
              Cari
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "HeaderKosPage",
};
</script>

<style scoped></style>
