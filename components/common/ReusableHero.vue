<script setup>
// import { customerCheckout } from "../../lib/images";

const props = defineProps({
  data: {
    type: Object,
  },
  scrollTo: {
    type: String,
  },
  className: {
    type: String,
  },
  imgClass: {
    type: String,
  },
});
</script>

<template>
  <section class="relative overflow-hidden py-16 sm:py-20 lg:py-24">
    <div class="hero-bg"></div>
    <div class="wrapper relative z-10">
      <div
        class="grid items-center gap-10 lg:grid-cols-[1.05fr_0.95fr] rounded-[32px] border border-white/60 bg-white/70 p-6 sm:p-8 lg:p-10 backdrop-blur-xl"
      >
        <div class="max-w-2xl">
          <div class="inline-flex items-center gap-2 rounded-full border border-primary/15 bg-primary/5 px-4 py-2 text-sm font-semibold text-primary">
            <span class="h-2 w-2 rounded-full bg-primary"></span>
            <span>Modern digital solutions</span>
          </div>

          <h3
            class="mt-5 font-opensans text-3xl font-bold tracking-tight text-baseBlack sm:text-4xl lg:text-6xl"
          >
            {{ data.title }}
          </h3>

          <p class="mt-5 max-w-xl text-base leading-8 text-[#6B7280] sm:text-lg">
            {{ data.description }}
          </p>

          <div class="mt-8 flex flex-col gap-4 sm:flex-row">
            <Button
              class="bg-primary px-6 py-6 text-white hover:bg-primary"
              @click="navigateTo(`#${scrollTo}`)"
            >
              <span>Learn more</span>
              <Icon name="ri:arrow-down-line" class="ml-2 text-2xl" />
            </Button>

            <Button
              variant="outline"
              class="border border-slate-200 bg-white px-6 py-6 text-baseBlack hover:bg-slate-50"
              @click="navigateTo('/contact')"
            >
              Contact us
            </Button>
          </div>

        </div>

        <div class="relative">
          <div class="absolute -inset-6 -z-10 rounded-[36px] bg-gradient-to-br from-primary/20 via-transparent to-slate-900/10 blur-2xl"></div>
          <div class="rounded-[28px] border border-white/70 bg-white p-4">
            <div class="overflow-hidden rounded-[22px] bg-gradient-to-br from-slate-50 to-slate-100">
              <img
                :src="data.img"
                alt=""
                class="h-full w-full object-cover"
                :class="imgClass"
              />
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
.hero-bg {
  position: absolute;
  inset: 0;
  background:
    radial-gradient(circle at 15% 20%, rgba(165, 36, 36, 0.18), transparent 28%),
    radial-gradient(circle at 85% 25%, rgba(15, 23, 42, 0.12), transparent 22%),
    linear-gradient(180deg, rgba(255, 255, 255, 0.92), rgba(248, 250, 252, 1));
}
</style>
