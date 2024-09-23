<template>
  <section class="py-10">
    <div class="wrapper">
      <div class="sm:flex gap-10 justify-between">
        <div class="sm:w-1/2 pb-6">
          <h3
            class="text-baseBlack text-xl sm:text-2xl md:text-3xl font-bold font-grifter"
          >
            {{ data.title }}
          </h3>
        </div>
        <div class="sm:w-1/2">
          <p class="text-neutral-500 text-base sm:text-lg">
            {{ data.description }}
          </p>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
const props = defineProps({ data: Object });
</script>

<style lang="scss" scoped></style>
