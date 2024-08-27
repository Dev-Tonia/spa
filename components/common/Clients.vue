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
  interdialog,
  kolorkote,
  Logo_digischool,
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
  interdialog,
  kolorkote,
  Logo_digischool,
];
</script>

<template>
  <section class="bg-white py-16">
    <h3 class="font-grifter font-bold text-4xl py-6 wrapper text-center">
      Our Esteemed & Valued Partners
    </h3>
    <swiper
      :breakpoints="{
        290: {
          slidesPerView: 2,
        },
        480: {
          slidesPerView: 3,
        },

        768: {
          slidesPerView: 4,
        },

        1024: {
          slidesPerView: 5,
        },
      }"
      :slidesPerView="1"
      :spaceBetween="10"
      :loop="true"
      :autoplay="{
        delay: 7000,
        disableOnInteraction: true,
      }"
      :modules="[SwiperAutoplay, SwiperEffectCreative]"
    >
      <swiperSlide v-for="(item, index) in clients" :key="index">
        <div class="shadow-xl border p-3">
          <img :src="item" alt="" class="w-full h-auto" />
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
