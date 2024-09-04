<script setup>
// import { customerCheckout } from "../../lib/images";

const props = defineProps({
  data: {
    type: Object,
  },
});
</script>

<template>
  <section class="py-16">
    <div class="wrapper">
      <div>
        <h3 class="font-grifter text-baseBlack font-bold text-5xl py-2">
          {{ data.title }}
        </h3>
        <p class="py-4 text-xl text-[#7A7474]">
          {{ data.description }}
        </p>
        <Button
          class="hover:bg-primary cursor-pointer bg-primary text-white font-medium space-x-2"
        >
          <span> Learn more</span>

          <Icon name="ri:arrow-down-line" class="text-2xl pl-1" />
        </Button>
        <div class="py-8">
          <img :src="data.img" alt="" />
        </div>
      </div>
    </div>
  </section>
</template>

<style lang="scss" scoped></style>
