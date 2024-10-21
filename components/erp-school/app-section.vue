<template>
  <section class="bg-gray-100 pt-16">
    <div class="wrapper">
      <div class="min-[850px]:flex-row flex flex-col gap-6">
        <div class="min-[850px]:w-8/12 text-center min-[850px]:text-start">
          <div class="text-baseBlack">
            <h1
              class="text-3xl md:text-4xl lg:text-5xl font-bold font-grifter mb-4"
            >
              Edunext Mobile App
            </h1>
            <p class="text-2xl mb-6">
              A Revolutionary Mobile Application for Schools
            </p>
          </div>
          <div
            class="flex items-center min-[850px]:justify-start justify-center min-[415px]:flex-row flex-col gap-6"
          >
            <button
              class="bg-baseBlack py-2 px-4 flex items-center justify-center gap-4 rounded-xl min-[415px]:w-fit w-full"
            >
              <Icon name="logos:google-play-icon" class="text-4xl" />
              <div class="text-white flex flex-col items-start">
                <span class="text-xs sm:text-base">Available on</span>
                <span class="font-bold sm:text-lg">Google Play</span>
              </div>
            </button>
            <button
              class="bg-baseBlack py-2 px-4 flex items-center justify-center gap-4 rounded-xl min-[415px]:w-fit w-full"
            >
              <Icon name="bi:apple" class="text-4xl" />
              <div class="text-white flex flex-col items-start">
                <span class="text-xs sm:text-base">Available on</span>
                <span class="font-bold sm:text-lg">App Store </span>
              </div>
            </button>
          </div>
        </div>
        <div class="min-[850px]:w-4/12">
          <div>
            <img :src="mobileApp" alt="" class="w-96 mx-auto" />
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { mobileApp } from "~/lib/images";
</script>
