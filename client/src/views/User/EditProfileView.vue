<template>
  <NavigationBar />
  <Breedcrumb :crumbs="crumbs"></Breedcrumb>
  <div class="container max-w-screen-xl mx-auto px-5">
    <section class="flex justify-center align-center my-9">
      <div class="border-2 border-secondary-color w-full sm:w-4/5">
        <div class="p-4 mb-2 border-b-2 border-secondary-color">
          <p class="font-bold sm:text-xl text-lg">Data Pribadi</p>
        </div>
        <div class="p-4 flex flex-col items-center justify-center">
          <form
            @submit.prevent="editProfile(store.formUserProfile)"
            class="mt-4 sm:w-4/5"
          >
            <div class="w-full flex flex-col items-center">
              <div
                class="w-32 h-32 rounded-full bg-[url('../assets/image/user.png')] border-2 border-secondary-color relative overflow-hidden flex justify-center align-center bg-cover bg-center"
                id="image-profile"
              ></div>
              <div class="relative mt-2 cursor-pointer">
                <label
                  for="image-input"
                  class="cursor-pointer bg-button-color text-white px-4 py-2"
                >
                  Ganti Foto
                </label>
                <input
                  id="image-input"
                  type="file"
                  class="absolute inset-0 opacity-0 cursor-pointer w-full h-full"
                  @change="selectProfileImage"
                />
              </div>
            </div>
            <div class="my-5 sm:flex sm:items-center">
              <label class="mr-2 text-sm w-5/12" for="name">Nama Lengkap</label>
              <input
                class="w-full p-2 border-2 border-secondary-color mt-2 sm:mt-0"
                type="text"
                name="name"
                id="name"
              />
            </div>
            <div class="my-5 sm:flex text-sm sm:items-center">
              <label class="mr-2 w-5/12" for="gender">Jenis Kelamin</label>
              <div class="w-full sm:flex mt-5 sm:mt-0" id="gender">
                <label class="inline-flex items-center mr-10">
                  <input
                    type="checkbox"
                    v-model="store.formUserProfile.gender"
                    value="LakiLaki"
                    id="LakiLaki"
                    class="w-4 h-4 text-button-color"
                  />
                  <span class="ml-4">Laki Laki</span>
                </label>
                <label class="inline-flex items-center">
                  <input
                    type="checkbox"
                    v-model="store.formUserProfile.gender"
                    value="Perempuan"
                    id="Perempuan"
                    class="w-4 h-4 text-button-color"
                  />
                  <span class="ml-4">Perempuan</span>
                </label>
              </div>
            </div>
            <div class="my-5 sm:flex sm:items-center">
              <label class="mr-2 text-sm w-5/12" for="tanggal-lahir"
                >Tanggal Lahir</label
              >
              <input
                class="w-full p-2 border-2 border-secondary-color mt-2 sm:mt-0"
                v-model="store.formUserProfile.birthdate"
                type="date"
                name="tanggal-lahir"
                id="tanggal-lahir"
              />
            </div>
            <div class="my-5 sm:flex sm:items-center">
              <label class="mr-2 text-sm w-5/12" for="kota-asal"
                >Kota Asal</label
              >
              <input
                class="w-full p-2 border-2 border-secondary-color mt-2 sm:mt-0"
                v-model="store.formUserProfile.city"
                type="text"
                name="kota-asal"
                id="kota-asal"
              />
            </div>
            <div class="my-5 sm:flex sm:items-center">
              <label class="mr-2 text-sm w-5/12" for="status">Status</label>
              <select
                class="w-full p-2 border-2 border-secondary-color mt-2 sm:mt-0"
                v-model="store.formUserProfile.status"
                type="text"
                name="status"
                id="status"
              >
                <option value="Belum Kawin">Belum Kawin</option>
                <option value="Kawin">Kawin</option>
              </select>
            </div>
            <div class="my-5 sm:flex text-sm sm:items-center">
              <label class="mr-2 w-5/12" for="pekerjaan">Pekerjaan</label>
              <div class="w-full sm:flex mt-5 sm:mt-0" id="pekerjaan">
                <label class="inline-flex items-center mr-10">
                  <input
                    v-model="store.formUserProfile.job"
                    type="checkbox"
                    id="Mahasiswa"
                    value="Mahasiswa"
                    class="w-4 h-4 text-button-color"
                  />
                  <span class="ml-4">Mahasiswa</span>
                </label>
                <label class="inline-flex items-center mr-10">
                  <input
                    v-model="store.formUserProfile.job"
                    type="checkbox"
                    value="Karyawan"
                    id="Karyawan"
                    class="w-4 h-4 text-button-color"
                  />
                  <span class="ml-4">Karyawan</span>
                </label>
                <label class="inline-flex items-center">
                  <input
                    type="checkbox"
                    v-model="store.formUserProfile.job"
                    value="Lainnya"
                    id="Lainnya"
                    class="w-4 h-4 text-button-color"
                  />
                  <span class="ml-4">Lainnya</span>
                </label>
              </div>
            </div>
            <div class="my-5 sm:flex sm:items-center">
              <label class="mr-2 text-sm w-5/12" for="kampus">Kampus</label>
              <input
                class="w-full p-2 border-2 border-secondary-color mt-2 sm:mt-0"
                type="text"
                name="kampus"
                id="kampus"
              />
            </div>
            <div class="flex">
              <button
                class="btn px-3 py-2 bg-button-color mt-2 mr-4 text-primary-color"
                type="submit"
              >
                Simpan
              </button>
              <button
                class="btn px-3 py-2 bg-cancel-color mt-2 text-primary-color"
              >
                Batal
              </button>
            </div>
            <p v-if="error">
              {{ error }}
            </p>
          </form>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import NavigationBar from "@/components/NavigationBar.vue";
import Breedcrumb from "@/components/Breedcrumb.vue";
import store from "@/store/store";
import axios from "axios";
import { useRouter } from "vue-router";

export default {
  name: "EditProfileView",
  components: {
    NavigationBar,
    Breedcrumb,
  },
  data() {
    return {
      store,
      error: null,
      router: useRouter(),
      crumbs: ["Home", "/", "User"],
      profileImage: "",
    };
  },
  methods: {
    async editProfile(data) {
      try {
        this.convertToString(data);
        await axios.post("http://127.0.0.1:8000/api/v1/user-profiles", data);
        await this.router.push({ name: "UserKosSayaView" });
      } catch (error) {
        if (error.response && error.response.status === 500) {
          this.error = error.response.data;
          console.log(this.error);
        }
      }
    },
    selectProfileImage(event) {
      const file = event.target.files[0];
      const reader = new FileReader();
      reader.addEventListener("load", () => {
        this.profileImage = reader.result;
        document.querySelector(
          "#image-profile"
        ).style.backgroundImage = `url(${this.profileImage})`;
      });
      if (file) {
        reader.readAsDataURL(file);
      }
    },
    convertToString(data) {
      data.job = data.job.join(", ");
      data.gender = data.gender.join(", ");
    },
  },
};
</script>

<style scoped></style>
