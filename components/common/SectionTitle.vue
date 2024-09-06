<template>
  <div>
    <h3
      class="font-grifter text-baseBlack font-bold text-3xl sm:text-4xl lg:text-5xl xl:text-6xl py-2"
    >
      {{ data.title }}
    </h3>

    <p class="py-4 text-lg md:text-xl text-[#7A7474]">
      {{ data.description }}
    </p>
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
