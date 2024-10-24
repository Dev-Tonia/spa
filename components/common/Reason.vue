<script setup>
const props = defineProps({
  contents: Array,
  title: String,
  description: String,
  extraClass: String,
});
</script>

<template>
  <section class="bg-secondary text-white py-16" id="why-sap-customer-checkout">
    <div class="wrapper">
      <h3 class="font-grifter font-bold text-2xl md:text-3xl py-2">
        {{ title }}
      </h3>
      <p class="py-4 text-lg md:text-xl">
        {{ description }}
      </p>

      <div :class="`grid gap-6  sm:gap-8 lg:gap-12 my-16 ${extraClass}`">
        <div v-for="(item, index) in contents" :key="index">
          <div
            class="bg-primary flex items-center justify-center text-white w-12 h-12 rounded-[8px] p-2"
          >
            <Icon :name="item.icon" class="text-5xl" />
          </div>
          <div class="">
            <h2 class="font-bold text-xl py-6">{{ item.title }}</h2>
            <ul class="list-disc pl-8">
              <li v-for="(item, index) in item.items" :key="index">
                {{ item }}
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style lang="scss" scoped></style>
