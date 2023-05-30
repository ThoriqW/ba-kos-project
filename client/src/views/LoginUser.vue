<template>
  <div class="h-screen flex items-center justify-center bg-secondary-color">
    <div class="sm:mx-0 mx-6">
      <div class="text-center font-bold mb-3">
        <h1 class="text-2xl">
          Masuk ke <span class="text-button-color">Ba-Kos</span>
        </h1>
      </div>
      <div class="border border-secondary-color shadow-lg p-5">
        <form action="">
          <div class="my-3">
            <label class="text-sm" for="number">Nomor Handphone</label>
            <input class="w-full p-2 mt-2" type="text" />
          </div>
          <div class="my-3">
            <label class="text-sm" for="password">Password</label>
            <input class="w-full p-2 mt-2" type="text" />
          </div>
          <button
            class="w-full bg-button-color btn py-2 text-secondary-color my-3"
          >
            Masuk
          </button>
        </form>
      </div>
      <div
        class="bg-[#DB4437] cursor-pointer text-sm p-3 flex justify-center text-secondary-color mt-5"
      >
        <div class="flex items-center">
          <font-awesome-icon
            icon="fa-brands fa-google"
            class="text-secondary-color mr-2 text-base"
          />
          <p>Google</p>
        </div>
      </div>
      <div
        class="bg-[#3B5998] cursor-pointer text-sm p-3 flex justify-center text-secondary-color mt-5"
      >
        <div class="flex items-center">
          <font-awesome-icon
            icon="fa-brands fa-facebook"
            class="text-secondary-color mr-2 text-base"
          />
          <p>Facebook</p>
        </div>
      </div>
      <div class="border border-secondary-color shadow-lg p-3 text-center mt-5">
        <div class="text-sm">
          <p>
            Belum punya akun?
            <a class="text-button-color cursor-pointer">Daftar Sekarang.</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  // eslint-disable-next-line vue/multi-word-component-names
  name: "LoginUser",
};
</script>
