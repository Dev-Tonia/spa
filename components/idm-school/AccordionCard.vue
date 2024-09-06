<template>
  <div class="bg-secondary text-white p-3 rounded-md mt-4">
    <h6 class="font-grifter font-bold mb-4">{{ data.title }}</h6>
    <p class="text-neutral-300">
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
