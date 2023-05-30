<template>
  <div class="container max-w-screen-xl mx-auto px-5 py-10">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
      <div>
        <h1 class="sm:text-2xl text-sm font-bold text-secondary-color">
          Ba-Kos Palu
        </h1>
      </div>
      <div>
        <h1 class="sm:text-lg text-sm font-medium">BANTUAN</h1>
        <div class="mt-5 grid grid-cols-1 gap-2">
          <div class="flex items-center">
            <span
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="w-4 h-4 text-secondary-color"
              >
                <path
                  fill-rule="evenodd"
                  d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z"
                  clip-rule="evenodd"
                />
              </svg>
            </span>
            <p class="text-sm">Tentang Kami</p>
          </div>
          <div class="flex items-center">
            <span
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="w-4 h-4 text-secondary-color"
              >
                <path
                  fill-rule="evenodd"
                  d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z"
                  clip-rule="evenodd"
                />
              </svg>
            </span>
            <p class="text-sm">Pusat Bantuan</p>
          </div>
        </div>
      </div>
      <div>
        <h1 class="sm:text-lg text-sm font-medium">KEBIJAKAN</h1>
        <div class="mt-5 grid grid-cols-1 gap-2">
          <div class="flex items-center">
            <span
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="w-4 h-4 text-secondary-color"
              >
                <path
                  fill-rule="evenodd"
                  d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z"
                  clip-rule="evenodd"
                />
              </svg>
            </span>
            <p class="text-sm">Kebijakan Privasi</p>
          </div>
          <div class="flex items-center">
            <span
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="w-4 h-4 text-secondary-color"
              >
                <path
                  fill-rule="evenodd"
                  d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z"
                  clip-rule="evenodd"
                />
              </svg>
            </span>
            <p class="text-sm">Syarat dan Ketentuan</p>
          </div>
        </div>
      </div>
      <div>
        <h1 class="sm:text-lg text-sm font-medium">HUBUNGI KAMI</h1>
        <div class="mt-5 grid grid-cols-1 gap-2">
          <div class="flex">
            <font-awesome-icon
              icon="fa-brands fa-facebook"
              class="text-secondary-color mr-3"
            />
            <font-awesome-icon
              icon="fa-brands fa-twitter"
              class="text-secondary-color mr-3"
            />
            <font-awesome-icon
              icon="fa-brands fa-instagram"
              class="text-secondary-color mr-3"
            />
          </div>
          <div class="flex items-center">
            <font-awesome-icon
              icon="fa-brands fa-google"
              class="text-secondary-color mr-3"
            />
            <p class="text-sm">cs@ba-kos.com</p>
          </div>
          <div class="flex items-center">
            <font-awesome-icon
              icon="fa-brands fa-whatsapp"
              class="text-secondary-color mr-3"
            />
            <p class="text-sm">082296709235</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center py-5 bg-secondary-color">
    <p>© 2023 ba-kos.com. All rights reserved</p>
  </div>
</template>

<script>
export default {
  // eslint-disable-next-line vue/multi-word-component-names
  name: "Footer",
};
</script>
