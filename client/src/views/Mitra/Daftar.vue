<template>
  <div class="py-16 flex items-center justify-center bg-secondary-color">
    <div class="mx-5">
      <div class="text-center font-bold mb-3">
        <h1 class="text-2xl">
          Daftar Akun Pemilik <span class="text-button-color">Kos</span>
        </h1>
      </div>
      <div class="border border-secondary-color shadow-lg p-5">
        <form action="">
          <div class="my-3">
            <label class="text-sm" for="number">Nama Lengkap</label>
            <input class="w-full p-2 mt-2" type="text" />
          </div>
          <div class="my-3">
            <label class="text-sm" for="password">Nomor Handphone</label>
            <input class="w-full p-2 mt-2" type="text" />
          </div>
          <div class="my-3">
            <label class="text-sm" for="number">Email</label>
            <input class="w-full p-2 mt-2" type="text" />
          </div>
          <div class="my-3">
            <label class="text-sm" for="password">Password</label>
            <input class="w-full p-2 mt-2" type="text" />
          </div>
          <div class="my-3">
            <label class="text-sm" for="password">Ulangi Password</label>
            <input class="w-full p-2 mt-2" type="text" />
          </div>
          <button
            class="w-full bg-button-color btn py-2 text-secondary-color my-3"
          >
            Daftar
          </button>
        </form>
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
  name: "DaftarMitra",
};
</script>

<style lang="scss" scoped></style>
