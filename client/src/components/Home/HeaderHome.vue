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
                class="block w-full p-4 pl-10 text-sm text-gray-900 border bg-secondary-color focus:outline-none focus:border-button-color"
                placeholder="Search"
                required
              />
              <button
                type="submit"
                class="text-white absolute right-2.5 bottom-2.5 bg-button-color font-medium text-sm px-4 py-2"
              >
                Search
              </button>
            </div>
          </form>
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
