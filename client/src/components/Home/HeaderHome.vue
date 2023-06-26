<template>
  <div
    class="header-home bg-[url('../assets/image/image-header.webp')] bg-cover bg-center"
  >
    <div class="bg-black-color/70 bg-no-repeat py-16">
      <div class="container max-w-screen-xl mx-auto px-5">
        <h1 class="sm:text-5xl text-2xl font-bold text-primary-color">
          Mau ba kos <br />
          dimana?
        </h1>
        <div class="mt-4 relative flex items-center">
          <input
            class="text-sm p-2 focus:outline-none sm:w-[350px]"
            type="text"
            id="search-location-header"
            placeholder="Masukan nama lokasi"
          />
          <button
            class="btn px-6 py-2 bg-button-color text-primary-color text-sm"
          >
            Cari
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "HeaderHome",
};
</script>
