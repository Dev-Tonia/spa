<template>
  <div class="bg-white rounded-lg shadow-md p-4">
    <div>
      <h3 class="font-opensans mt-4 text-[1.35rem] font-bold text-gray-900 leading-snug">
        {{ data.title }}
      </h3>
      <p class="text-gray-600 mt-1.5">{{ data.description }}</p>
    </div>

    <div class="mt-2">
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
