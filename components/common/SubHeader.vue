<template>
  <section class="py-10">
    <div class="wrapper">
      <div class="flex gap-10 justify-between">
        <div class="w-1/2">
          <h3 class="text-baseBlack text-3xl font-bold font-grifter">
            {{ data.title }}
          </h3>
        </div>
        <div class="w-1/2">
          <p class="text-neutral-500 text-lg">
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
