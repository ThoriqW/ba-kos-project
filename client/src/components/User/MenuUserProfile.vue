<template>
  <div>
    <div class="flex border-b-2 border-secondary-color p-4 items-center">
      <div
        class="bg-gray-color w-24 h-24 rounded-full mr-4 relative overflow-hidden"
      >
        <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2">
          <!-- Content to be centered -->
          <font-awesome-icon
            class="text-7xl text-secondary-color"
            icon="fa-solid fa-user"
          />
        </div>
      </div>
      <div class="flex-auto">
        <div>
          <h1 class="font-bold text-xl mb-2">Moh Thoriq Wajedi</h1>
        </div>
        <router-link
          to="/user/edit-profile"
          class="btn px-4 py-2 bg-button-color text-primary-color sm:text-sm text-xs mt-2"
        >
          Edit Profile
        </router-link>
      </div>
    </div>
    <div class="p-4 font-medium text-gray-color">
      <div class="border-b-2 border-secondary-color mb-5 mt-5">
        <div
          class="mb-2"
          :class="{ 'text-black-color': this.urlPath === '/user/kos-saya' }"
        >
          <router-link class="flex items-center" to="/user/kos-saya">
            <div class="flex justify-center mr-2 w-5">
              <font-awesome-icon icon="fa-solid fa-house" />
            </div>
            <p>Kos Saya</p>
          </router-link>
        </div>
      </div>
      <div class="border-b-2 border-secondary-color mb-5">
        <div
          class="mb-2"
          :class="{ 'text-black-color': this.urlPath === '/user/booking' }"
        >
          <router-link class="flex items-center" to="/user/booking">
            <div class="flex justify-center mr-2 w-5">
              <font-awesome-icon icon="fa-solid fa-bookmark" />
            </div>
            Booking
          </router-link>
        </div>
      </div>
      <div class="border-b-2 border-secondary-color mb-5">
        <div class="mb-2">
          <router-link class="flex items-center" to="/user/booking">
            <div class="flex justify-center mr-2 w-5">
              <font-awesome-icon icon="fa-solid fa-file" />
            </div>
            Riwayat Kos
          </router-link>
        </div>
      </div>
      <div class="border-b-2 border-secondary-color mb-5">
        <div class="mb-2">
          <router-link class="flex items-center" to="/user/booking">
            <div class="flex justify-center mr-2 w-5">
              <font-awesome-icon icon="fa-solid fa-comment-dollar" />
            </div>
            Riwayat Transaksi
          </router-link>
        </div>
      </div>
      <div class="border-b-2 border-secondary-color mb-5">
        <div class="mb-2">
          <router-link class="flex items-center" to="/user/booking">
            <div class="flex justify-center mr-2 w-5">
              <font-awesome-icon icon="fa-solid fa-user-shield" />
            </div>
            Verivikasi Akun
          </router-link>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "MenuUserProfile",
  data() {
    return {
      urlPath: this.$router.currentRoute._value.fullPath,
    };
  },
};
</script>

<style lang="scss" scoped></style>
