<template>
  <div class="border-b-2 border-secondary-color">
    <nav
      class="container max-w-screen-xl mx-auto px-5 sm:flex sm:justify-between sm:items-center py-2"
    >
      <div class="flex justify-between py-2">
        <router-link to="/" class="text-lg font-bold flex items-center mr-10">
          Ba-Kos <span class="text-button-color">Palu</span>
        </router-link>
        <div class="flex sm:hidden">
          <button
            @click="isOpen = !isOpen"
            type="button"
            aria-controls="navbar-default"
            aria-expanded="false"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="w-8 h-8"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
              />
            </svg>
          </button>
        </div>
      </div>
      <div
        class="relative flex items-center border border-secondary-color hidden lg:block"
        id="dynamic-navbar"
      >
        <input
          class="text-sm p-2 focus:outline-none sm:w-[350px]"
          id="search-location-navbar"
          type="text"
          placeholder="Masukan nama lokasi"
        />
        <button
          class="btn px-6 py-2 bg-button-color text-primary-color text-sm"
        >
          Cari
        </button>
      </div>
      <div
        :class="{
          block: isOpen,
          hidden: !isOpen,
        }"
        class="py-2 w-full sm:w-auto sm:block"
        id="mobile-menu"
      >
        <div class="sm:flex sm:items-center left-0">
          <ul class="sm:flex sm:mr-6 font-medium">
            <li
              class="mb-2 sm:my-0 sm:mr-6 sm:relative sm:after:h-0.5 sm:after:duration-150 sm:after:block sm:after:absolute sm:after:w-0 sm:after:bg-button-color sm:hover:after:w-full"
            >
              <router-link to="/">Home </router-link>
            </li>
            <li
              class="my-2 sm:my-0 sm:mr-6 sm:relative sm:after:h-0.5 sm:after:duration-150 sm:after:block sm:after:absolute sm:after:w-0 sm:after:bg-button-color sm:hover:after:w-full"
            >
              <router-link to="/kos">Kos</router-link>
            </li>
          </ul>
          <div v-if="isAuthenticated" class="mr-2">
            <p><span>Hello! </span>{{ userData.name }}</p>
          </div>
          <button
            v-if="isAuthenticated"
            type="button"
            class="btn px-6 py-2 bg-button-color text-primary-color text-sm"
            @click.prevent="logout"
          >
            Keluar
          </button>
          <button
            v-else
            type="button"
            class="btn px-6 py-2 bg-button-color text-primary-color text-sm"
            @click.prevent="store.toggleModal"
          >
            Masuk
          </button>
        </div>
      </div>
    </nav>
  </div>
</template>

<script>
import store from "@/store/store";
import { useRouter } from "vue-router";

export default {
  name: "NavigationBar",
  props: {
    toggleModal: Function,
  },
  data() {
    return {
      isOpen: false,
      store,
      url: this.$router.currentRoute.value.fullPath,
      isAuthenticated: false,
      userData: {},
      router: useRouter(),
    };
  },
  mounted() {
    if (this.url === "/") {
      document.getElementById("dynamic-navbar").classList.toggle("lg:block");
    }
    // Check if the user is already authenticated (e.g., token exists in local storage)
    if (localStorage.getItem("token")) {
      this.isAuthenticated = true;
      if (localStorage.getItem("userData")) {
        this.userData = JSON.parse(localStorage.getItem("userData"));
        console.log(this.userData);
      }
    }
  },
  methods: {
    //logout user/mitra
    logout() {
      // Clear the token from local storage
      localStorage.removeItem("token");
      // Update the login status
      this.isAuthenticated = false;
      // Redirect to the login page
      this.router.push({ name: "Home" });
    },
  },
};
</script>
