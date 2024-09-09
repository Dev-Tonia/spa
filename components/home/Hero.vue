<script setup>
import { heroImg, heroImg2, heroImg3 } from "../../lib/images";
const slides = [
  {
    title: "Transform Your Business with Our ERP",
    highlight: " Expertise.",
    subtitle: "Streamline Operations, Enhance Efficiency, drive and growth",
    bgImage: heroImg,
  },
  {
    title: "We provide solution to grow your",
    highlight: "Business.",

    subtitle: "Everything you need to grow your business. Contact us today!",
    bgImage: heroImg2,
  },
  {
    title:
      "IDM help clients in the intelligent automation & transformation of their",
    highlight: " businesses.",
    subtitle: "Streamline Operations, Enhance Efficiency, drive and growth",
    bgImage: heroImg3,
  },
];
</script>

<template>
  <section class="h-full bg-primary/[2%] py-6">
    <Swiper
      :modules="[SwiperAutoplay, SwiperEffectCreative]"
      :loop="true"
      :effect="'creative'"
      :autoplay="{
        delay: 7000,
        disableOnInteraction: true,
      }"
      :creative-effect="{
        prev: {
          shadow: false,
          translate: ['-200%', 0, -1],
        },
        next: {
          translate: ['100%', 0, 0],
        },
      }"
      @slideChange="onSlideChange"
    >
      <SwiperSlide v-for="slide in slides" :key="slide">
        <div class="flex items-center justify-center pt-6">
          <!-- intro text -->
          <div class="px-6 sm:px-10 md:pr-0 md:pl-16 lg:pl-24 md:w-8/12">
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
                class="w-[120px] md:w-[140px] h-auto float-left pr-3"
                alt=""
              />
              <p
                class="text-3xl md:text-4xl lg:text-5xl xl:text-6xl text-baseBlack font-bold font-grifter leading-[57.6px]"
              >
                {{ slide.title }}
                <span class="text-primary"> {{ slide.highlight }}</span>
              </p>
            </div>
            <!-- Description -->
            <div class="my-8">
              <p class="text-2xl">
                {{ slide.subtitle }}
              </p>
            </div>
            <!-- CTA -->
            <div class="flex items-center space-x-5">
              <Button
                class="hover:bg-white cursor-pointer bg-white text-primary border border-primary font-medium"
                >Request A Demo
              </Button>
              <Button
                class="hover:bg-primary cursor-pointer bg-primary text-white font-medium"
                >Contact Us
              </Button>
            </div>
          </div>
          <!-- hero image -->
          <div class="w-4/12 hidden md:block">
            <img :src="slide.bgImage" class="w-full h-auto" alt="" />
          </div>
        </div>
      </SwiperSlide>
    </Swiper>
  </section>
</template>

<style lang="scss" scoped></style>
