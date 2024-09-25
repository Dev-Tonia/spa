<script setup>
import { ref } from "vue";
import { brandLogo } from "../../lib/images.js";
import { navLinks } from "../../lib/nav";
const date = ref(new Date());
const currentYear = date.value.getFullYear();

// accordion
const isOpen = ref(true);
const toggleIsOpen = () => {
  isOpen.value = !isOpen.value;
};
</script>

<template>
  <footer class="bg-[#000017] text-gray-300 pt-9 pb-4">
    <div class="md:grid md:grid-cols-3 gap-6 wrapper">
      <div class="mb-6 md:mb-0 md:col-span-1">
        <div>
          <NuxtLink to="/" class="">
            <img
              :src="brandLogo"
              class="mr-3 h-12 object-contain"
              alt="brand Logo"
            />
          </NuxtLink>
        </div>
        <div class="py-4">
          <p class="mb-2">
            International Data Management Services Limited (IDM), incorporated
            in Nigeria in 1981 is affiliated with Comcraft Services Limited,
            United Kingdom.
          </p>
          <p>
            <span class="text-primary">IDM's</span> is on the mission To Make
            Africa Enterprises Globally Competitive. Provide African Enterprises
            Perfect Business Processes. To Facilitate a Culture of Customer Care
            Management in African Enterprises.
          </p>
        </div>
      </div>
      <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3 md:col-span-2">
        <div>
          <h2 class="mb-6 text-sm font-semibold uppercase dark:text-white">
            Service
          </h2>
          <ul class="">
            <li class="mb-2">
              <div class="space-x-8 font-medium mb-4" @click="toggleIsOpen">
                <span>SAP</span> <Icon name="ep:arrow-down-bold" />
              </div>
              <div v-if="isOpen" class="ml-3">
                <NuxtLink
                  class="hover:underline block text-sm mb-2"
                  v-for="(service, index) in navLinks.services.items"
                  :key="index"
                  :href="service.to"
                >
                  {{ service.name }}
                </NuxtLink>
              </div>
            </li>
            <!-- <li>
              <NuxtLink class="hover:underline text-sm font-medium" to="/">
                Schools
              </NuxtLink>
            </li> -->
          </ul>
        </div>
        <div>
          <h2 class="mb-6 text-sm font-semibold uppercase">Industries</h2>
          <ul class="">
            <li
              class="mb-2"
              v-for="(industry, index) in navLinks.industries.items"
              :key="index"
            >
              <NuxtLink :href="industry.to" class="hover:underline">{{
                industry.name
              }}</NuxtLink>
            </li>
          </ul>
        </div>
        <div>
          <h2 class="mb-6 text-sm font-semibold uppercase">Solutions</h2>
          <ul class="">
            <li
              class="mb-2"
              v-for="(solution, index) in navLinks.solutions.items"
              :key="index"
            >
              <NuxtLink :href="solution.to" class="hover:underline">{{
                solution.name
              }}</NuxtLink>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <hr class="my-2 border-gray-400 sm:mx-auto lg:my-4" />
    <div class="flex items-center sm:justify-center flex-col wrapper">
      <div class="flex items-center gap-3">
        <span class="text-gray-300 inline-block mb-2"> Follows on:</span>
        <LayoutSocials class="gap-x-2" />
      </div>
      <div class="text-sm text-gray-300 sm:text-center mb-4 sm:mb-0">
        © {{ currentYear }}
        <NuxtLink to="/" class="hover:underline text-primary font-medium">
          IDM
        </NuxtLink>
        . All Rights Reserved.
      </div>
    </div>
  </footer>
</template>

<style scoped></style>
