<template>
  <NavigationBar></NavigationBar>
  <Breedcrumb :crumbs="crumbs"></Breedcrumb>
  <div class="container max-w-screen-xl mx-auto px-5">
    <section class="my-9">
      <div class="flex border-2 flex-col lg:flex-row border-secondary-color">
        <div class="basis-1/3 border-r-2 border-secondary-color">
          <MenuUserProfile></MenuUserProfile>
        </div>
        <div class="flex-auto p-4">
          <BookingUser></BookingUser>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import NavigationBar from "@/components/NavigationBar.vue";
import Breedcrumb from "@/components/Breedcrumb.vue";
import MenuUserProfile from "@/components/MenuUserProfile.vue";
import BookingUser from "@/components/BookingUser.vue";

export default {
  name: "UserBooking",
  components: {
    NavigationBar,
    Breedcrumb,
    MenuUserProfile,
    BookingUser,
  },
  data() {
    return {
      crumbs: ["Home", "/", "User"],
    };
  },
};
</script>

<style lang="scss" scoped></style>
