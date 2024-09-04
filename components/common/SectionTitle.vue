<template>
  <div>
    <h3 class="font-grifter text-baseBlack font-bold text-5xl py-2">
      {{ data.title }}
    </h3>

    <p class="py-4 text-xl text-[#7A7474]">
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
