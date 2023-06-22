<template>
  <div class="flex justify-between">
    <button
      class="btn px-6 py-2 bg-button-color text-primary-color text-sm"
      :disabled="isButtonDisabled"
      @click.prevent="back()"
    >
      Kembali
    </button>
    <button
      class="btn px-6 py-2 bg-button-color text-primary-color text-sm"
      @click.prevent="next()"
    >
      Selanjutnya
    </button>
  </div>
</template>

<script>
export default {
  name: "NextStep",
  data() {
    return {
      step: this.$route.params.id,
      isButtonDisabled: false,
    };
  },
  methods: {
    next() {
      if (this.step >= 1 && this.step < 6) {
        this.step++;
        this.$router.push({
          name: "TambahDataKosView",
          params: { id: this.step },
        });
      }
    },
    back() {
      if (this.step > 1) {
        this.step--;
        this.$router.push({
          name: "TambahDataKosView",
          params: { id: this.step },
        });
      }
    },
  },
};
</script>

<style lang="scss" scoped></style>
