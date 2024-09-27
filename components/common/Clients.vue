<script setup>
import {
  towerEnergy,
  towerGroup,
  towerPower,
  onward,
  techMahindra,
  alex,
  asaba,
  buildingTower,
  hoesch,
  kolorkote,
  oxford,
} from "../../lib/images";

const clients = [
  towerEnergy,
  towerGroup,
  towerPower,
  onward,
  techMahindra,
  alex,
  asaba,
  buildingTower,
  hoesch,
  kolorkote,
  oxford,
];
</script>

<template>
  <section class="bg-white py-16">
    <h3 class="font-grifter font-bold text-3xl py-6 wrapper text-center">
      Our Esteemed & Valued Partners
    </h3>
    <swiper
      :breakpoints="{
        290: {
          slidesPerView: 4,
        },
        480: {
          slidesPerView: 5,
        },

        768: {
          slidesPerView: 6,
        },

        1024: {
          slidesPerView: 7.5,
        },
      }"
      :slidesPerView="1"
      :spaceBetween="10"
      :loop="true"
      :loopAdditionalSlides="1"
      :watchSlidesProgress="true"
      :autoplay="{
        delay: 2000,
        disableOnInteraction: true,
        pauseOnMouseEnter: true,
      }"
      :modules="[SwiperAutoplay, SwiperEffectCreative]"
    >
      <swiperSlide v-for="(item, index) in clients" :key="index">
        <div
          class="shadow-xl border p-3 h-full flex items-center justify-center"
        >
          <img :src="item" alt="" class="w-full" />
        </div>
      </swiperSlide>
    </swiper>
  </section>
</template>

<style scoped>
.swiper {
  width: 100%;
  display: grid;
}

.swiper-slide {
  color: white;
  flex-shrink: 0;
  display: block;
  height: 100%;
  max-height: 100%;
}
</style>
