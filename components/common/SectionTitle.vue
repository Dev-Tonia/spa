<template>
  <div>
    <h3
      class="font-opensans text-baseBlack font-bold text-2xl sm:text-3xl lg:text-4xl py-2"
    >
      {{ data.title }}
    </h3>

    <p class="py-4 text-base sm:text-lg text-[#7A7474] leading-7">
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
