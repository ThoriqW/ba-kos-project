<template>
  <div class="py-16 flex items-center justify-center bg-secondary-color">
    <div class="mx-5">
      <div class="text-center font-bold mb-3">
        <h1 class="text-2xl">
          Daftar Akun Pemilik <span class="text-button-color">Kos</span>
        </h1>
      </div>
      <div class="border border-secondary-color shadow-lg p-5">
        <form @submit.prevent="createMitra(store.formMitraRegistration)">
          <div class="my-3">
            <label class="text-sm" for="name">Nama Lengkap</label>
            <input
              v-model="store.formMitraRegistration.name"
              id="name"
              class="w-full p-2 mt-2"
              type="text"
            />
          </div>
          <div class="my-3">
            <label class="text-sm" for="phone_number">Nomor Handphone</label>
            <input
              v-model="store.formMitraRegistration.phone_number"
              class="w-full p-2 mt-2"
              id="phone_number"
              type="text"
            />
          </div>
          <div class="my-3">
            <label class="text-sm" for="number">Email</label>
            <input
              v-model="store.formMitraRegistration.email"
              class="w-full p-2 mt-2"
              id="email"
              type="text"
            />
          </div>
          <div class="my-3">
            <label class="text-sm" for="password">Password</label>
            <input
              v-model="store.formMitraRegistration.password"
              class="w-full p-2 mt-2"
              id="password"
              type="text"
            />
          </div>
          <div class="my-3">
            <label class="text-sm" for="ulangi-password">Ulangi Password</label>
            <input class="w-full p-2 mt-2" type="text" id="ulangi-password" />
          </div>
          <button
            class="w-full bg-button-color btn py-2 text-secondary-color my-3"
            type="submit"
          >
            Daftar
          </button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import { useRouter } from "vue-router";
import store from "@/store/store";

export default {
  name: "DaftarMitra",
  data() {
    return {
      store,
      router: useRouter(),
    };
  },
  methods: {
    async createMitra(data) {
      try {
        await axios.post("http://127.0.0.1:8000/api/mitras", data);
        await this.router.push({ name: "LoginMitra" });
      } catch (error) {
        if (error.response.status === 422) {
          error.value = error.response.data.errors;
        }
      }
    },
  },
};
</script>

<style lang="scss" scoped></style>
