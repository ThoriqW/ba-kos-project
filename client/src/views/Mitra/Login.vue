<template>
  <div class="h-screen flex items-center justify-center bg-secondary-color">
    <div class="">
      <div class="text-center font-bold mb-3">
        <h1 class="text-2xl">
          Masuk ke <span class="text-button-color">Ba-Kos</span>
        </h1>
      </div>
      <div class="border border-secondary-color shadow-lg p-5">
        <form action="">
          <div class="my-3">
            <label class="text-sm" for="number">Nomor Handphone</label>
            <input
              class="w-full p-2 mt-2"
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
              type="text"
              name="password"
              id="password"
              required
            />
          </div>
          <button
            class="w-full bg-button-color btn py-2 text-secondary-color my-3"
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
export default {
  // eslint-disable-next-line vue/multi-word-component-names
  name: "LoginMitra",
};
</script>
