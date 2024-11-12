<script setup>
import {
  heroImg,
  heroImg2,
  heroImg3,
  heroImg4,
  heroImg5,
} from "../../lib/images";
const slides = [
  {
    title: "Perfecting business ",
    highlight: "process.",
    subtitle: "Streamline Operations, Enhance Efficiency, drive and growth",
    bgImage: heroImg,
  },
  {
    title: "Pioneering IT-Enabled Services in  ",
    highlight: "Africa.",
    subtitle:
      "Shaping Africa’s future with reliable, transformative IT solutions.",
    bgImage: heroImg2,
  },
  {
    title: "Preparing young minds for global  ",
    highlight: " ICT.",
    subtitle:
      "Equipping the next generation with the tools to shape the global ICT landscape",
    bgImage: heroImg3,
  },
  {
    title: "IDM@School, The future of",
    highlight: "learning.",
    subtitle: "Leading the next frontier of innovation and technology",
    bgImage: heroImg4,
  },
  {
    title: "Empowering Education Through Seamless",
    highlight: "Management.",
    subtitle:
      "Streamlining education processes to enhance learning outcomes and student success",
    bgImage: heroImg5,
  },
];
</script>

<template>
  <section class="h-[90%] bg-primary/[4%]">
    <Swiper
      :modules="[SwiperAutoplay, SwiperEffectCreative, SwiperPagination]"
      :loop="true"
      :effect="'creative'"
      :speed="1000"
      :autoplay="{
        delay: 4000,
        disableOnInteraction: false,
      }"
      :pagination="{
        el: '.swiper-pagination',
        clickable: true,
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
            <div class="flex items-center py-5">
              <div
                class="text-primary bg-primary/5 rounded-3xl p-2 flex items-center space-x-2"
              >
                <Icon name="solar:star-rings-outline" class="text-3xl" />
                <span class="text-sm font-medium">
                  Best for small and mid-sized Enterprises
                </span>
              </div>
            </div>
            <!-- Title -->
            <div class="">
              <img
                src="../../assets/imgs/Group.svg"
                class="w-[120px] md:w-[140px] h-auto float-left pr-3"
                alt="Logo"
              />
              <p
                class="text-3xl md:text-4xl lg:text-5xl xl:text-6xl text-baseBlack font-bold font-grifter leading-[57.6px]"
              >
                {{ slide.title }}
                <span class="text-primary">{{ slide.highlight }}</span>
              </p>
            </div>
            <!-- Description -->
            <div class="my-8">
              <p class="text-2xl">{{ slide.subtitle }}</p>
            </div>
            <!-- CTA -->
            <div class="flex items-center space-x-5">
              <CommonModal
                title="Request A Demo"
                class="hover:bg-white cursor-pointer bg-white text-primary border border-primary font-medium"
              />
              <Button
                class="hover:bg-primary cursor-pointer bg-primary text-white font-medium"
                @click="navigateTo('/contact')"
                >Contact Us
              </Button>
            </div>
          </div>
          <!-- hero image -->
          <div class="w-4/12 hidden md:block">
            <img :src="slide.bgImage" class="w-full h-auto" alt="Hero Image" />
          </div>
        </div>
      </SwiperSlide>

      <!-- Pagination -->
      <div class="swiper-pagination"></div>
    </Swiper>
  </section>
</template>

<style scoped>
.swiper-slide {
  transition-timing-function: cubic-bezier(0.45, 0, 0.55, 1);
}

.swiper-pagination .swiper-pagination-bullet-active {
  background: #a52424 !important;
}
.--swiper-pagination-bullet-inactive-color {
  background: #000 !important;
}
</style>
