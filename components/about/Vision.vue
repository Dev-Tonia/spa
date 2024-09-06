<script setup>
import { visionImg } from "../../lib/images";
</script>

<template>
  <section class="py-16">
    <div class="wrapper">
      <CommonSectionTitle
        :data="{
          title: 'Our Vision',
          description: `Increasing the global competitiveness of African enterprises is our main goal.`,
        }"
      />
      <div class="py-6">
        <img :src="visionImg" alt="" />
      </div>
      <div class="flex flex-col sm:flex-row gap-16">
        <div class="sm:w-1/2">
          <p class="font-grifter font-bold text-3xl py-2 text-baseBlack">01</p>
          <h6 class="font-grifter font-bold text-2xl pb-2 text-baseBlack">
            Fostering a World of Skilled Tech Pioneers
          </h6>
          <p class="text-[#655F5F]">
            At International Data Management Services Limited, we envision a
            world where every student is empowered with cutting-edge
            technological skills, fostering a generation of innovators,
            creators, and problem-solvers.
          </p>
        </div>
        <div class="sm:w-1/2">
          <p class="font-grifter font-bold text-3xl py-2 text-baseBlack">02</p>
          <h6 class="font-grifter font-bold text-2xl pb-2 text-baseBlack">
            Bridging the learning gap
          </h6>
          <p class="text-[#655F5F]">
            We believe in the transformative power of education and strive to
            bridge the gap between traditional learning and the demands of the
            modern world.
          </p>
        </div>
      </div>
    </div>
  </section>
</template>

<style lang="scss" scoped></style>
