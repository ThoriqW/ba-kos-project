<template>
  <nav class="bg-secondary-color">
    <div class="container max-w-screen-xl mx-auto px-5 p-4 text-sm">
      <ol class="list-none flex">
        <li v-for="(crumb, index) in crumbs" :key="index">
          <a
            :href="crumb.url"
            :class="{
              'pointer-events-none': isLast(index),
              'font-bold': isLast(index),
            }"
            class="text-gray-color hover:text-gray-800 mr-2 cursor-pointer"
          >
            {{ crumb }}
          </a>
        </li>
      </ol>
    </div>
  </nav>
</template>

<script>
export default {
  // eslint-disable-next-line vue/multi-word-component-names
  name: "Breedcrumb",
  props: {
    crumbs: {
      type: Array,
      required: true,
    },
  },
  methods: {
    isLast(index) {
      return index === this.crumbs.length - 1;
    },
  },
};
</script>

<style scoped></style>
