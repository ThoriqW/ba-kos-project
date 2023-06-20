<template>
  <!-- <button
    data-drawer-target="default-sidebar"
    data-drawer-toggle="default-sidebar"
    aria-controls="default-sidebar"
    type="button"
    class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
  >
    <span class="sr-only">Open sidebar</span>
    <svg
      class="w-6 h-6"
      aria-hidden="true"
      fill="currentColor"
      viewBox="0 0 20 20"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        clip-rule="evenodd"
        fill-rule="evenodd"
        d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"
      ></path>
    </svg>
  </button> -->

  <aside
    id="sidebar-mitra"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar"
  >
    <div class="h-full px-3 py-4 overflow-y-auto bg-secondary-color">
      <ul class="space-y-4 font-medium">
        <li class="py-5 pl-3 border-b-2 border-gray-color">
          <router-link to="/" class="text-lg font-bold flex items-center mr-10">
            Ba-Kos <span class="text-button-color">Palu</span>
          </router-link>
        </li>
        <li>
          <a
            href="#"
            class="flex items-center p-2 text-gray-900 rounded-lg bg-button-color"
          >
            <div class="flex justify-center w-5">
              <font-awesome-icon icon="fa-solid fa-house" />
            </div>
            <span class="flex-1 ml-3 whitespace-nowrap">Home</span>
          </a>
        </li>
        <li>
          <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg">
            <div class="flex justify-center w-5">
              <font-awesome-icon icon="fa-solid fa-building" />
            </div>
            <span class="flex-1 ml-3 whitespace-nowrap">Property Saya</span>
          </a>
        </li>
        <li>
          <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg">
            <div class="flex justify-center w-5">
              <font-awesome-icon icon="fa-solid fa-bullhorn" />
            </div>
            <span class="flex-1 ml-3 whitespace-nowrap">Fitur Promosi</span>
          </a>
        </li>
        <li>
          <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg">
            <div class="flex justify-center w-5">
              <font-awesome-icon icon="fa-solid fa-chart-simple" />
            </div>
            <span class="flex-1 ml-3 whitespace-nowrap">Statistik</span>
          </a>
        </li>
        <li>
          <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg">
            <div class="flex justify-center w-5">
              <font-awesome-icon icon="fa-solid fa-user-shield" />
            </div>
            <span class="flex-1 ml-3 whitespace-nowrap">Akun</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>

  <div class="p-4 sm:ml-64">
    <Breedcrumb :crumbs="crumbs"></Breedcrumb>
    <div class="mt-4 px-5 p-4 border-2 border-secondary-color">
      <div class="flex items-center justify-between">
        <h1 class="text-3xl font-bold">Halo, Thoriq Wajedi</h1>
        <a href="#">
          <font-awesome-icon
            class="mx-3 text-3xl text-gray-color"
            icon="fa-solid fa-circle-user"
          />
        </a>
      </div>
    </div>
    <div class="flex">
      <div class="mr-4">
        <div class="mt-4 px-5 p-4 border-2 border-secondary-color">
          <p class="font-bold">Jumlah Property</p>
          <div class="flex items-center">
            <div class="flex w-8">
              <font-awesome-icon
                class="text-button-color"
                icon="fa-solid fa-building"
              />
            </div>
            <p class="text-2xl mr-4">10</p>
          </div>
        </div>
        <div class="mt-4 px-5 p-4 border-2 border-secondary-color">
          <p class="font-bold">Property Kosong</p>
          <div class="flex items-center">
            <div class="flex w-8">
              <font-awesome-icon
                class="text-cancel-color"
                icon="fa-solid fa-building"
              />
            </div>
            <p class="text-2xl mr-4">3</p>
          </div>
        </div>
      </div>
      <div class="flex flex-auto mr-4">
        <div class="mt-4 px-5 p-4 border-2 border-secondary-color w-full">
          <p>Data Property</p>
        </div>
      </div>
      <div class="flex flex-auto">
        <div class="mt-4 px-5 p-4 border-2 border-secondary-color w-full">
          <p>Pendapatan</p>
        </div>
      </div>
    </div>
    <div class="mt-4 px-5 p-4 border-2 border-secondary-color">
      <h1 class="text-xl font-bold">Kelola Property Anda</h1>
      <div class="flex">
        <div
          class="flex-auto mt-4 mr-4 px-5 p-4 border-2 border-secondary-color"
        >
          <div class="flex items-center">
            <div class="flex w-10">
              <font-awesome-icon
                class="text-2xl text-button-color"
                icon="fa-solid fa-circle-plus"
              />
            </div>
            <p>Tambah Property</p>
          </div>
        </div>
        <div
          class="flex-auto mt-4 mr-4 px-5 p-4 border-2 border-secondary-color"
        >
          <div class="flex items-center">
            <div class="flex w-10">
              <font-awesome-icon
                class="text-2xl text-button-color"
                icon="fa-solid fa-user"
              />
            </div>
            <p>Pusat Bantuan</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Breedcrumb from "@/components/Breedcrumb.vue";

export default {
  name: "DashboardMitraView",
  components: {
    Breedcrumb,
  },
  data() {
    return {
      crumbs: [{ name: "Home", url: "/" }, { name: "Dashboard" }],
    };
  },
};
</script>

<style lang="scss" scoped></style>
