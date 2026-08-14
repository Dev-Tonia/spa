<script setup>
const props = defineProps({
  content: {
    type: Object,
  },
});
</script>

<template>
  <div
    class="px-6 py-11 bg-white shadow rounded-xl content-wrapper transition-colors duration-700 ease-in-out"
  >
    <div
      class="w-14 h-14 min-[920px]:w-16 min-[920px]:h-16 bg-primary text-white rounded-xl flex items-center justify-center icon-wrapper"
    >
      <Icon :name="content.icon" class="text-4xl min-[920px]:text-5xl" />
    </div>

    <div class="pt-10">
      <h6 class="font-grifter text-baseBlack text-xl sm:text-2xl font-bold leading-tight">
        {{ content.tile }}
      </h6>
      <p class="w-11/12 text-[#7A7474] text-sm sm:text-base font-normal leading-7">
        {{ content.description }}
      </p>
    </div>
  </div>
</template>

<style scoped>
.content-wrapper:hover {
  @apply bg-white;
}

.content-wrapper:hover {
  @apply bg-primary;
}
.content-wrapper:hover h6 {
  @apply text-white;
}
.content-wrapper:hover p {
  @apply text-neutral-50;
}
.content-wrapper:hover .icon-wrapper {
  @apply text-primary bg-white;
}
</style>
