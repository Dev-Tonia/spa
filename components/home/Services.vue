<script setup>
import { idmSchool, sapBusiness, sapHana, sapCloud } from "../../lib/images";

const contents = [
  {
    id: 1,
    img: sapHana,
    title: "SAP S/4HANA",
    description:
      "S/4HANA: A cutting-edge Enterprise Resource Planning (ERP) system that streamlines business processes, accelerates decision-making, and enables real-time insights",
  },
  {
    id: 2,
    img: sapBusiness,
    title: "SAP Business One",
    description:
      "SAP Business One: Unparalleled ERP for small and medium-sized enterprises, integrating CRM, sales, inventory, and financials.",
  },
  {
    id: 3,
    img: sapCloud,
    title: "SAP Cloud",
    description:
      "B1Cloud is a Premium Cloud Hosting for SAP Business One, SQL & HANA at the fraction of the cost. It's an ideal cloud-based solution for MSMEs to run and reap all the benefits of SAP Business One without having to invest in infrastructure & complete peace of mind.",
  },
  {
    id: 4,
    img: idmSchool,
    title: "IDM @ School",
    description:
      "Realizing the importance of starting ICT education early, IDM has a fully developed program to offer IT education to school children from elementary levels.",
  },
];
</script>

<template>
  <section class="py-10">
    <div class="wrapper">
      <div class="flex items-center justify-center text-center">
        <div class="w-6/12">
          <h3 class="text-4xl font-bold font-grifter leading-[48px] py-2">
            Complete Consulting Services We Provider
          </h3>
          <p class="font-medium text-lg">
            We are committed to meticulously planning, executing, and delivering
            exceptional services and results.
          </p>
        </div>
      </div>

      <div class="py-10">
        <div class="grid gap-10 grid-cols-2">
          <div
            class="border-[#E7EBEF] border bg-white rounded-[8px] p-6"
            v-for="(content, index) in contents"
            :key="content.title"
          >
            <div class="flex items-center space-x-4">
              <img :src="content.img" alt="" />
              <h3 class="font-bold text-2xl">{{ content.title }}</h3>
            </div>
            <div class="py-5">
              {{ content.description }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped></style>
