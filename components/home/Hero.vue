<script setup>
import {
  heroImg,
  heroImg5,
  smilingModel,
  schoolGirlWriting,
  schoolBgTransparent,
} from "../../lib/images";
const slides = [
  {
    title: "Perfecting business ",
    highlight: "processes.",
    subtitle: "Streamline Operations, Enhance Efficiency, and Drive Growth",
    bgImage: heroImg,
    imageClass: "scale-100",
  },
  {
    title: "Pioneering IT-Enabled Services in  ",
    highlight: "Africa.",
    subtitle:
      "Shaping Africa’s future with reliable, transformative IT solutions.",
    bgImage: smilingModel,
    imageClass: "scale-100",
  },
  {
    title: "Preparing young minds for global  ",
    highlight: " ICT.",
    subtitle:
      "Equipping the next generation with the tools to shape the global ICT landscape",
    bgImage: schoolGirlWriting,
    imageClass: "scale-100",
  },
  {
    title: "IDM@School, The future of",
    highlight: "learning.",
    subtitle: "Leading the next frontier of innovation and technology",
    bgImage: schoolBgTransparent,
    imageClass: "scale-100",
  },
  {
    title: "Empowering Education Through Seamless",
    highlight: "Management.",
    subtitle:
      "Streamlining education processes to enhance learning outcomes and student success",
    bgImage: heroImg5,
    imageClass: "scale-100",
  },
];
</script>

<template>
  <!-- Background with radial gradients -->
  <div class="hero-sec"></div>

  <!-- Main content section -->
  <section class="hero-carousel relative z-10 min-h-[70vh]">
    <Swiper
      class="hero-swiper"
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
    >
      <SwiperSlide v-for="slide in slides" :key="slide">
        <div class="flex min-h-[70vh] items-center justify-center py-6">
          <!-- intro text -->
          <div class="px-6 sm:px-10 md:pr-0 md:pl-16 lg:pl-24 md:w-8/12">
            <!-- Title -->
            <div class="">
              <p
                class="text-2xl md:text-3xl lg:text-4xl xl:text-5xl uppercase text-baseBlack font-bold font-opensans leading-[57.6px]"
              >
                {{ slide.title }}
                <span class="text-primary">{{ slide.highlight }}</span>
              </p>
            </div>
            <!-- Description -->
            <div class="my-6">
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
          <div
            class="hidden w-4/12 md:flex md:pr-10 lg:pr-16 md:pl-4 h-[60vh]"
          >
            <div class="flex h-full w-full items-center justify-center">
              <img
                :src="slide.bgImage"
                class="h-full w-full object-contain object-center transition-transform duration-300"
                :class="slide.imageClass"
                alt="Hero Image"
              />
            </div>
          </div>
        </div>
      </SwiperSlide>

      <!-- Pagination -->
      <div class="swiper-pagination"></div>
    </Swiper>
  </section>
</template>

<style scoped>
.hero-carousel :deep(.swiper),
.hero-carousel :deep(.swiper-wrapper),
.hero-carousel :deep(.swiper-slide) {
  cursor: grab;
  user-select: none;
}

.hero-carousel :deep(.swiper:active),
.hero-carousel :deep(.swiper-wrapper:active),
.hero-carousel :deep(.swiper-slide:active) {
  cursor: grabbing;
}

.swiper-slide {
  transition-timing-function: cubic-bezier(0.45, 0, 0.55, 1);
}

.hero-carousel :deep(.swiper-pagination-bullet) {
  background: #000;
}

.hero-carousel :deep(.swiper-pagination-bullet-active) {
  background: #a52424;
}

.hero-sec {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 0;
  background:
    radial-gradient(
      circle at 12% 33%,
      rgba(238, 9, 9, 0.25),
      rgba(222, 28, 28, 0.1) 15%,
      hsla(0, 90%, 47%, 0) 35%
    ),
    radial-gradient(
      circle at 85% 55%,
      rgba(51, 51, 51, 0.25),
      rgba(51, 51, 51, 0.1) 15%,
      hsla(0, 0%, 100%, 0) 35%
    ),
    radial-gradient(
      circle at 50% 50%,
      rgba(255, 255, 255, 0.8),
      transparent 70%
    );
}
</style>
