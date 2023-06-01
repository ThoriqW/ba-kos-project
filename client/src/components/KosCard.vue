<template>
  <a
    class="border-2 border-secondary-color shadow-lg cursor-pointer"
    @click="navigateToDetail"
  >
    <div class="flex justify-center h-[120px] sm:h-[200px]">
      <img
        class="object-cover"
        :src="require(`@/assets/image/${imgURL}`)"
        alt="image-kos"
        loading="lazy"
        fetchpriority="high"
      />
    </div>
    <div>
      <div class="flex text-xs p-2 font-medium items-center justify-between">
        <div class="flex items-center">
          <p class="mr-3 border font-bold border-secondary-color p-1">
            {{ type }}
          </p>
          <font-awesome-icon class="mr-1" icon="fa-solid fa-star" />
          <p class="font-Lato">{{ rating }}</p>
        </div>
        <font-awesome-icon
          icon="fa-solid fa-heart"
          class="click text-button-color"
        />
      </div>
      <div class="px-2">
        <p class="font-bold">{{ name }}</p>
        <div class="text-sm flex items-center mt-1">
          <span
            ><font-awesome-icon
              icon="fa-solid fa-location-dot"
              class="text-gray-color mr-1"
          /></span>
          <p class="text-gray-color">{{ kec }}</p>
        </div>
      </div>
      <div class="p-2">
        <p class="text-sm">
          <span class="font-bold text-button-color font-Lato sm:text-base">{{
            harga
          }}</span>
        </p>
      </div>
    </div>
  </a>
</template>

<script>
export default {
  name: "KosCard",
  methods: {
    navigateToDetail() {
      this.$router.push({ name: "KosDetailPage", params: { id: this.kosId } });
    },
  },
  props: {
    name: String,
    desc: String,
    imgURL: String,
    type: String,
    rating: String,
    harga: String,
    kec: String,
    kosId: String,
    urlImage: String,
  },
};
</script>
