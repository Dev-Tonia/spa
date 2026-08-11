<script setup>
import { vector, group1, group2, group3, group4 } from "../../lib/images";
</script>

<template>
  <section class="py-10">
    <div class="wrapper">
      <div
        class="bg-[#FFDADA] relative rounded-xl px-8 py-16 sm:px-16 overflow-hidden"
      >
        <img :src="vector" alt="" class="absolute top-0 -left-4" />
        <div class="flex items-center justify-center">
          <div
            class="min-[400px]:w-10/12 sm:w-7/12 z-[12] flex items-center justify-center flex-col text-center"
          >
            <p class="max-w-2xl text-base sm:text-lg leading-7 text-[#2F2A2A]">
              Learn how IDM can help your business scale and become the final
              piece in the puzzle of uninterrupted growth.
            </p>
            <div class="pt-9">
              <button
                class="sm:text-base text-sm md:text-lg font-bold text-white bg-primary rounded-[8px] py-3 px-4 sm:px-5 shadow-md"
                @click="navigateTo('/contact')"
              >
                Contact Our Expert
              </button>
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
            class="absolute right-8 top-10 w-[95px] min-[968px]:top-20 min-[968px]:right-24 z-10 min-[968px]:w-[175px]"
          />
          <img
            :src="group3"
            alt=""
            class="absolute bottom-0 -right-4 w-[128px] min-[968px]:-right-3 min-[968px]:w-[220px]"
          />
        </div>
      </div>
    </div>
  </section>
</template>

<style lang="scss" scoped></style>
