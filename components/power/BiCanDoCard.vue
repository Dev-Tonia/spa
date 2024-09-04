<template>
  <div class="rounded-xl py-10 px-14 flex gap-14">
    <div class="w-5/12">
      <img :src="data.img" alt="" class="w-full" />
    </div>
    <div class="w-7/12">
      <small :class="['text-neutral-200 font-bold text-2xl', data.numClass]">{{
        data.number
      }}</small>
      <h5 :class="[' font-bold font-grifter text-3xl', data.titleClass]">
        {{ data.title }}
      </h5>
      <p :class="['py-5 text-xl font-medium', data.decClass]">
        {{ data.description }}
      </p>
      <Button
        class="hover:bg-primary cursor-pointer bg-primary text-white font-medium space-x-2"
      >
        Contact us
      </Button>
    </div>
  </div>
</template>

<script setup>
const props = defineProps({
  data: {
    type: Object,
  },
});
</script>

<style lang="scss" scoped></style>
