<script setup>
import { heroImg, textImg } from "../../lib/images";
</script>

<template>
  <section class="h-full bg-primary/[2%] py-6">
    <div class="flex items-center justify-center pt-6">
      <div class="pl-3 sm:pl-5 md:pl-20 md:w-8/12">
        <!-- intro -->
        <div class="flex items-center py-5">
          <div
            class="text-primary bg-primary/5 rounded-3xl p-2 flex items-center space-x-2"
          >
            <Icon name="solar:star-rings-outline" class="text-3xl" />
            <span class="text-sm font-medium">
              Best for Small and large businesses
            </span>
          </div>
        </div>
        <!-- Title -->
        <div class="">
          <img
            src="../../assets/imgs/Group.svg"
            class="w-[150px] h-auto float-left"
            alt=""
          />
          <p class="text-5xl text-baseBlack font-bold font-grifter">
            Transform Your Business with Our ERP
            <span class="text-primary"> Expertise. </span>
          </p>
        </div>
        <!-- Description -->
        <div class="my-8">
          <p class="text-2xl">
            Streamline Operations, Enhance Efficiency, drive and growth
          </p>
        </div>
        <!-- CTA -->
        <div class="flex items-center space-x-5">
          <Button
            class="hover:bg-white cursor-pointer bg-white text-primary border border-primary font-medium"
            >Free Demo
          </Button>
          <Button
            class="hover:bg-primary cursor-pointer bg-primary text-white font-medium"
            >Contact Us
          </Button>
        </div>
      </div>
      <div class="w-4/12 hidden md:block">
        <img :src="heroImg" class="w-full h-auto" alt="" />
      </div>
    </div>
  </section>
</template>

<style lang="scss" scoped></style>
