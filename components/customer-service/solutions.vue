<template>
  <div class="wrapper">
    <div
      class="bg-secondary rounded-[20px] px-6 py-16 text-white overflow-hidden"
    >
      <div class="rounded-xl py-10 px-14 flex flex-col md:flex-row gap-10">
        <div class="md:w-7/12">
          <h5 class="font-bold font-grifter text-2xl">
            Contact center solution
          </h5>
          <p class="py-2">
            IDM Call Center Solution provides a versatile platform for domestic
            (Analog/ ISDN trunk lines) and international call center services
            (SIP trunks). utilizing advanced VoIP technology for enhanced
            features at lower costs. Its web-based design enables global
            operations, while customizable reports meet client needs. It’s the
            ultimate solution for efficient, flexible, and cost-effective call
            center management. We provide:
          </p>
          <div class="grid grid-cols-2 gap-4 py-5">
            <!-- card 1 -->
            <div class="text-baseBlack bg-white rounded-xl p-4 font-medium">
              Inbound Call Center Solutions
            </div>
            <!-- card 2 -->
            <div class="text-baseBlack bg-white rounded-xl p-4 font-medium">
              Outbound Call Center Solutions
            </div>
            <!-- card 3 -->
            <div class="text-baseBlack bg-white rounded-xl p-4 font-medium">
              Blended Call Center Services
            </div>
            <!-- card 4 -->
            <div class="text-baseBlack bg-white rounded-xl p-4 font-medium">
              Hosted Contact Center Solutions
            </div>
          </div>

          <Button
            class="hover:bg-primary cursor-pointer bg-primary text-white font-medium space-x-2"
            @click="navigateTo('/contact')"
          >
            Learn more
          </Button>
        </div>
        <div class="md:w-5/12">
          <img :src="solution" alt="" class="w-full" />
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { solution } from "../lib/images";
</script>

<style scoped></style>
