<template>
  <div
    class="fixed z-10 overflow-y-auto top-0 w-full left-0 hidden overscroll-none"
    id="modal"
  >
    <div
      class="flex items-center justify-center min-height-100vh pt-4 px-4 pb-20 text-center sm:block sm:p-0"
    >
      <div class="fixed inset-0 transition-opacity">
        <div class="absolute inset-0 bg-gray-900 opacity-75" />
      </div>
      <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
        >&#8203;</span
      >
      <div
        class="inline-block align-center bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg w-full"
        role="dialog"
        aria-modal="true"
        aria-labelledby="modal-headline"
      >
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
          <div class="text-2xl font-bold">
            <h1>Masuk Sebagai</h1>
          </div>
          <router-link
            to="/login-user"
            class="flex p-5 my-2 border border-secondary-color shadow-lg cursor-pointer"
          >
            <h1>Pencari Kos</h1>
          </router-link>
          <router-link
            to="/login-mitra"
            class="flex p-5 my-2 border border-secondary-color shadow-lg cursor-pointer"
          >
            <h1>Pemilik Kos</h1>
          </router-link>
        </div>
        <div class="bg-gray-200 px-4 py-3 text-right">
          <button
            type="button"
            class="py-2 px-4 bg-button-color text-white mr-2"
            @click.prevent="store.toggleModal"
          >
            <i class="fas fa-times"></i> Cancel
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import store from "@/store/store";

export default {
  name: "ModalLogin",
  data() {
    return {
      store,
    };
  },
};
</script>

<style scoped></style>
