<template>
  <div class="bg-white rounded-lg shadow-md p-4">
    <div>
      <h3 class="text-lg font-semibold mt-4">{{ data.title }}</h3>
      <p class="text-gray-600 mt-2">{{ data.description }}</p>
    </div>

    <div class="">
      <slot></slot>
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

<style scoped></style>
