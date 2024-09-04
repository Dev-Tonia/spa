<template>
  <div class="bg-white rounded-xl p-8 shadow-sm">
    <h6 class="text-baseBlack text-lg font-bold leading-snug py-4">
      {{ content.title }}
    </h6>
    <p class="text-[#908b8b] text-sm leading-[16.80px]">
      {{ content.description }}
    </p>
    <div v-if="content.btn" class="flex justify-end pt-6">
      <Button class="bg-primary text-white hover:bg-primary px-3"
        >Learn More
      </Button>
    </div>
  </div>
</template>

<script setup>
const props = defineProps({
  content: {
    type: Object,
  },
});
</script>

<style lang="scss" scoped></style>
