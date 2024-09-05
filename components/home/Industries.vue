<script setup>
import {
  retails,
  oilGas,
  manufacture,
  logistics,
  foodBeverages,
  automobile,
} from "../../lib/images";

const contents = [
  {
    id: 3,
    img: manufacture,
    title: "Manufacturing",
    description:
      "We provide manufacturing solutions that help you optimize your supply chain, improve customer experience, and drive sales.",
  },
  {
    id: 1,
    img: retails,
    title: "Retail",
    description:
      "Manage POS, Inventory, Cash and Integrate Back End Procurement and SKU with ease.",
  },
  {
    id: 4,
    img: logistics,
    title: "Logistics",
    description:
      "Functionality for complex warehousing, voluminous stock movements, bin management & distribution centres.",
  },
  {
    id: 6,
    img: automobile,
    title: "Automobile component",
    description:
      "Comprehensive solution including quality management, advance production & subcontracting.",
  },
  {
    id: 5,
    img: foodBeverages,
    title: "Food & Beverages",
    description:
      "End to end solution for procurement, processing & distribution for food & beverages manufacturing.",
  },
  {
    id: 2,
    img: oilGas,
    title: "Oil & Gas",
    description:
      "We offer proven best-practice solutions for companies specializing in the import, export, distribution, and marketing of oil and gas products.",
  },
];
</script>

<template>
  <section class="py-16">
    <div class="wrapper">
      <!-- header -->
      <div class="md:flex justify-between">
        <div class="md:w-10/12 lg:w-7/12">
          <h3 class="font-grifter font-bold text-4xl py-4">
            Industries we serve
          </h3>
          <p class="text-lg md:text-xl text-neutral-600">
            We strive to consistently and efficiently plan, execute and deliver
            high quality services and results across serval Industries
          </p>
        </div>
        <div class="md:w-2/12 lg:w-5/12 pt-6 md:pt-0 flex justify-end">
          <NuxtLink
            class="text-lg font-bold flex items-center"
            to="
          "
            ><span>View All</span
            ><Icon class="text-3xl" name="flowbite:arrow-right-outline"
          /></NuxtLink>
        </div>
      </div>

      <!-- list of industries we serve -->
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-10 my-10">
        <div
          class="bg-secondary text-[#FAFAFA] p-6 rounded-xl transition-all duration-300 ease-in-out hover:scale-105 hover:bg-secondary/95"
          v-for="(content, index) in contents"
          :key="content.id"
        >
          <div class="rounded-xl overflow-hidden">
            <img :src="content.img" alt="" class="w-full h-auto" />
          </div>
          <h5 class="text-2xl font-bold py-2">{{ content.title }}</h5>
          <p>
            {{ content.description }}
          </p>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped></style>
