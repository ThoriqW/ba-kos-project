<template>
  <NavigationBar></NavigationBar>
  <Breedcrumb :crumbs="crumbs"></Breedcrumb>
  <div class="container max-w-screen-xl mx-auto px-5">
    <section class="my-9">
      <div class="flex flex-col lg:flex-row border-2 border-secondary-color">
        <div class="basis-1/3 border-r-2 border-secondary-color">
          <MenuUserProfile></MenuUserProfile>
        </div>
        <div class="flex-auto p-4">
          <KosSayaUser></KosSayaUser>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import NavigationBar from "@/components/NavigationBar.vue";
import Breedcrumb from "@/components/Breedcrumb.vue";
import KosSayaUser from "@/components/KosSayaUser.vue";
import MenuUserProfile from "@/components/MenuUserProfile.vue";

export default {
  name: "UserKosSaya",
  components: {
    NavigationBar,
    Breedcrumb,
    KosSayaUser,
    MenuUserProfile,
  },
  data() {
    return {
      crumbs: ["Home", "/", "User"],
    };
  },
};
</script>

<style lang="scss" scoped></style>
