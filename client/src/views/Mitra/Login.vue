<template>
  <div class="h-screen flex items-center justify-center bg-secondary-color">
    <div class="">
      <div class="text-center font-bold mb-3">
        <h1 class="text-2xl">
          Masuk ke <span class="text-button-color">Ba-Kos</span>
        </h1>
      </div>
      <div class="border border-secondary-color shadow-lg p-5">
        <form @submit.prevent="loginMitra(store.formLoginMitra)">
          <div class="my-3">
            <label class="text-sm" for="number">Nomor Handphone</label>
            <input
              class="w-full p-2 mt-2"
              v-model="store.formLoginMitra.email"
              type="text"
              name="number"
              id="number"
              required
            />
          </div>
          <div class="my-3">
            <label class="text-sm" for="password">Password</label>
            <input
              class="w-full p-2 mt-2"
              v-model="store.formLoginMitra.password"
              type="text"
              name="password"
              id="password"
              required
            />
          </div>
          <button
            class="w-full bg-button-color btn py-2 text-secondary-color my-3"
            type="submit"
          >
            Masuk
          </button>
        </form>
      </div>
      <div class="border-2 border-secondary-color p-3 text-center mt-5">
        <div class="text-sm">
          <p>
            Belum punya akun?
            <router-link
              to="/daftar-mitra"
              class="text-button-color cursor-pointer"
              >Daftar Sekarang.
            </router-link>
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import store from "@/store/store";
import { useRouter } from "vue-router";
import axios from "axios";

export default {
  // eslint-disable-next-line vue/multi-word-component-names
  name: "LoginMitra",
  data() {
    return {
      store,
      error: null,
      router: useRouter(),
    };
  },
  methods: {
    async loginMitra(data) {
      try {
        await axios
          .post("http://127.0.0.1:8000/api/v1/auth/mitras/login", data)
          .then((response) => {
            const token = response.data.token;
            const roles = response.data.user.roles[0].name;
            const userData = response.data.user;

            localStorage.setItem("userData", JSON.stringify(userData));
            localStorage.setItem("token", token);
            localStorage.setItem("roles", roles);

            this.router.push({ name: "Home" });
            console.log(response.data.message);
            console.log(userData);
            console.log(roles);
          });
      } catch (error) {
        this.error = error.response.data;
        console.log(this.error);
      }
    },
  },
};
</script>
