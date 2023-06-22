<template>
  <div class="p-4 sm:ml-80">
    <div class="mt-5 ml-5">
      <h1 class="text-2xl font-bold mb-1">Fasilitas yang ada di kos</h1>
      <p class="text-black-color text-opacity-50">
        Silakan centang fasilitas yang ada dan sesuai untuk tipe kos ini.
      </p>
    </div>
    <form class="border-2 border-secondary-color p-4 mt-5 ml-5">
      <div class="mb-10">
        <p class="text-xl font-bold">Fasilitas Umum</p>
        <div class="mt-4">
          <div class="mb-1">
            <label class="inline-flex items-center mr-10" for="wifi">
              <input
                type="checkbox"
                value="WiFi"
                id="wifi"
                class="w-4 h-4 text-button-color"
              />
              <span class="ml-4">WiFi</span>
            </label>
          </div>
          <div class="mb-1">
            <label class="inline-flex items-center" for="air-jernih">
              <input
                type="checkbox"
                value="Air Jernih"
                id="air-jernih"
                class="w-4 h-4 text-button-color"
              />
              <span class="ml-4">Air Jernih</span>
            </label>
          </div>
          <div class="mb-1">
            <label class="inline-flex items-center" for="kamar-mandi-dalam">
              <input
                type="checkbox"
                value="Kamar Mandi Dalam"
                id="kamar-mandi-dalam"
                class="w-4 h-4 text-button-color"
              />
              <span class="ml-4">Kamar Mandi Dalam</span>
            </label>
          </div>
          <div class="mb-1">
            <label class="inline-flex items-center" for="kamar-mandi-luar">
              <input
                type="checkbox"
                value="Kamar Mandi Luar"
                id="kamar-mandi-luar"
                class="w-4 h-4 text-button-color"
              />
              <span class="ml-4">Kamar Mandi Luar</span>
            </label>
          </div>
        </div>
      </div>
      <div class="mb-10">
        <p class="text-xl font-bold">Fasilitas Kamar</p>
        <div class="mt-4">
          <div class="mb-1">
            <label class="inline-flex items-center mr-10" for="ac">
              <input
                type="checkbox"
                value="AC"
                id="ac"
                class="w-4 h-4 text-button-color"
              />
              <span class="ml-4">AC</span>
            </label>
          </div>
          <div class="mb-1">
            <label class="inline-flex items-center" for="kasur">
              <input
                type="checkbox"
                value="Kasur"
                id="kasur"
                class="w-4 h-4 text-button-color"
              />
              <span class="ml-4">Air Jernih</span>
            </label>
          </div>
          <div class="mb-1">
            <label class="inline-flex items-center" for="jendela">
              <input
                type="checkbox"
                value="Jendela"
                id="jendela"
                class="w-4 h-4 text-button-color"
              />
              <span class="ml-4">Jendela</span>
            </label>
          </div>
          <div class="mb-1">
            <label class="inline-flex items-center" for="ventilasi">
              <input
                type="checkbox"
                value="Ventilasi"
                id="ventilasi"
                class="w-4 h-4 text-button-color"
              />
              <span class="ml-4">Ventilasi</span>
            </label>
          </div>
        </div>
      </div>
      <div class="mb-10">
        <p class="text-xl font-bold">Fasilitas Kamar Mandi</p>
        <div class="mt-4">
          <div class="mb-1">
            <label class="inline-flex items-center mr-10" for="shower">
              <input
                type="checkbox"
                value="Shower"
                id="shower"
                class="w-4 h-4 text-button-color"
              />
              <span class="ml-4">Shower</span>
            </label>
          </div>
          <div class="mb-1">
            <label class="inline-flex items-center" for="ember-mandi">
              <input
                type="checkbox"
                value="Ember Mandi"
                id="ember-mandi"
                class="w-4 h-4 text-button-color"
              />
              <span class="ml-4">Ember Mandi</span>
            </label>
          </div>
          <div class="mb-1">
            <label class="inline-flex items-center" for="kamar-mandi-dalam">
              <input
                type="checkbox"
                value="Kamar Mandi Dalam"
                id="kamar-mandi-dalam"
                class="w-4 h-4 text-button-color"
              />
              <span class="ml-4">Kamar Mandi Dalam</span>
            </label>
          </div>
          <div class="mb-1">
            <label class="inline-flex items-center" for="kamar-mandi-luar">
              <input
                type="checkbox"
                value="Kamar Mandi Luar"
                id="kamar-mandi-luar"
                class="w-4 h-4 text-button-color"
              />
              <span class="ml-4">Kamar Mandi Luar</span>
            </label>
          </div>
        </div>
      </div>
      <div class="mb-10">
        <p class="text-xl font-bold">Parkir</p>
        <div class="mt-4">
          <div class="mb-1">
            <label class="inline-flex items-center mr-10" for="parkir-motor">
              <input
                type="checkbox"
                value="Parkir Motor"
                id="parkir-motor"
                class="w-4 h-4 text-button-color"
              />
              <span class="ml-4">Parkir Motor</span>
            </label>
          </div>
          <div class="mb-1">
            <label class="inline-flex items-center" for="parkir-mobil">
              <input
                type="checkbox"
                value="Parkir Mobil"
                id="parkir-mobil"
                class="w-4 h-4 text-button-color"
              />
              <span class="ml-4">Parkir Mobil</span>
            </label>
          </div>
        </div>
      </div>
      <NextStep />
    </form>
  </div>
</template>

<script>
import NextStep from "./NextStep.vue";

export default {
  name: "FormFasilitasKos",
  components: {
    NextStep,
  },
};
</script>

<style lang="scss" scoped></style>
