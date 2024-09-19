<script setup>
import { vector, group1, group2, group3, group4 } from "../../lib/images";
</script>

<template>
  <section class="py-10">
    <div class="wrapper">
      <div
        class="bg-[#FFDADA] relative rounded-xl px-16 py-20 sm:py-16 overflow-hidden"
      >
        <img :src="vector" alt="" class="absolute top-0 -left-4" />
        <div class="flex">
          <div class="w-10/12 sm:w-7/12">
            <h3
              class="font-grifter font-bold text-2xl md:text-3xl lg:text-4xl py-4"
            >
              Book a consultation today
            </h3>
            <p class="text-[#4E4949]">
              Learn how IDM can your business scale the final piece in the
              puzzle of uninterrupted growth of your business.
            </p>
            <div class="pt-9">
              <NuxtLink
                class="md:text-lg font-bold text-white bg-primary rounded-[8px] py-3 px-5"
                to="/contact"
              >
                Contact Our Expert
              </NuxtLink>
            </div>
          </div>
          <img
            :src="group1"
            alt=""
            class="absolute top-0 right-16 w-[140px] min-[968px]:right-28 min-[968px]:w-[208px]"
          />
          <img
            :src="group2"
            alt=""
            class="absolute top-0 -right-2 w-[105px] min-[968px]:-right-4 min-[968px]:w-[185px]"
          />
          <img
            :src="group4"
            alt=""
            class="absolute right-8 top-10 w-[95px] sm:top-0 min-[968px]:right-28 min-[968px]:right-24 z-20 min-[968px]:w-[175px]"
          />
          <img
            :src="group3"
            alt=""
            class="absolute bottom-0 -right-4 w-[128px] min-[968px-right-4 min-[968px]:-right-3 min-[968px]:w-[220px]"
          />
        </div>
      </div>
    </div>
  </section>
</template>

<style lang="scss" scoped></style>
