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
        <form class="sm:w-[350px]">
          <label
            for="search"
            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"
            >Search</label
          >
          <div class="relative">
            <div
              class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
            >
              <svg
                aria-hidden="true"
                class="w-5 h-5 text-gray-500 dark:text-gray-400"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                ></path>
              </svg>
            </div>
            <input
              type="search"
              id="search"
              class="block w-full p-3 pl-10 text-sm text-gray-900 border border-secondary-color focus:outline-none focus:border-button-color"
              placeholder="Search"
              required
            />
            <button
              type="submit"
              class="text-white absolute right-2.5 bottom-1.5 bg-button-color font-medium text-sm px-4 py-2"
            >
              Search
            </button>
          </div>
        </form>
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
          <div v-if="isAuthenticated" class="flex items-center">
            <button
              type="button"
              class="btn px-6 py-2 bg-button-color text-primary-color text-sm"
              @click.prevent="logout"
            >
              Keluar
            </button>
            <div v-if="userData.roles[0].name == 'mitra'">
              <router-link to="/mitra/dashboard">
                <font-awesome-icon
                  class="mx-3 text-xl"
                  icon="fa-solid fa-circle-user"
                />
              </router-link>
            </div>
            <div v-else>
              <router-link to="/user/kos-saya">
                <font-awesome-icon
                  class="mx-3 text-xl"
                  icon="fa-solid fa-circle-user"
                />
              </router-link>
            </div>
          </div>
          <button
            v-else
            type="button"
            class="btn px-4 py-2 bg-button-color text-primary-color text-sm"
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
