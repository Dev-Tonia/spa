<template>
  <div class="flex items-center space-x-6">
    <Icon name="jam:menu" class="text-5xl" />
    <h6 class="text-baseBlack text-4xl font-bold leading-[28.80px]">
      {{ data.title }}
    </h6>
  </div>
  <p class="text-[#7A7474] pt-7">
    {{ data.description }}
  </p>
</template>

<script setup>
const props = defineProps({
  data: {
    type: Object,
  },
});
</script>

<style lang="scss" scoped></style>
