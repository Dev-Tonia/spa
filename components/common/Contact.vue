<script setup>
import { vector, group1, group2, group3, group4 } from "../../lib/images";
</script>

<template>
  <section class="py-10">
    <div class="wrapper">
      <div class="bg-[#FFDADA] relative rounded-xl p-16 overflow-hidden">
        <img :src="vector" alt="" class="absolute top-0 -left-4" />
        <div class="flex">
          <div class="w-7/12">
            <h3 class="font-grifter font-bold text-4xl py-4">
              Book a consultation today
            </h3>
            <p class="text-[#4E4949]">
              Learn how IDM can your business scale the final piece in the
              puzzle of uninterrupted growth of your business.
            </p>
            <div class="pt-9">
              <NuxtLink
                class="text-lg font-bold text-white bg-primary rounded-[8px] py-3 px-5"
                to="/contact
          "
              >
                Contact Our Expert
              </NuxtLink>
            </div>
          </div>
          <div class="">
            <img :src="group1" alt="" class="absolute top-0 right-28" />
            <img :src="group2" alt="" class="absolute top-0 -right-4" />
            <img :src="group4" alt="" class="absolute right-28 z-20" />
            <img :src="group3" alt="" class="absolute bottom-0 -right-4" />
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style lang="scss" scoped></style>
