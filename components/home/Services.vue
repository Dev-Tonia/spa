<script setup>
import { idmSchool, sapBusiness, idmErp, sapCloud } from "../../lib/images";

const contents = [
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
  {
    id: 1,
    img: idmErp,
    title: "School ERP",
    description:
      "School ERP systems help schools maintain accurate records, ensure smooth operations, and improve transparency and accountability.",
  },
];
</script>

<template>
  <section class="py-10">
    <div class="wrapper">
      <div class="flex items-center justify-center text-center">
        <div class="md:w-11/12 lg:w-9/12">
          <h3
            class="text-2xl sm:text-3xl lg:text-4xl font-bold font-opensans leading-9 md:leading-[48px] py-2"
          >
            We provide complete consulting services to transform /
            <span class="capitalize">perfect business process</span>
          </h3>
          <p class="font-medium text-lg">
            We are committed to meticulously planning, executing, and delivering
            exceptional services and results.
          </p>
        </div>
      </div>

      <div class="py-5">
        <div class="grid gap-5 md:grid-cols-2">
          <div
            v-for="(content, index) in contents"
            :key="content.title"
            class="group relative overflow-hidden rounded-2xl border border-[#E7EBEF] bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-primary/20 hover:shadow-lg"
          >
            <div
              class="absolute inset-x-0 top-0 h-1 origin-left scale-x-0 bg-primary transition-transform duration-300 group-hover:scale-x-100"
            ></div>
            <div class="flex flex-col items-center gap-4 sm:flex-row sm:gap-5">
              <div
                class="flex h-20 w-24 shrink-0 items-center justify-center rounded-xl border border-[#E7EBEF] bg-slate-50 p-3 transition-colors duration-300 group-hover:border-primary/30 group-hover:bg-primary/5"
              >
                <img
                  :src="content.img"
                  alt=""
                  class="max-h-12 w-full object-contain"
                />
              </div>
              <h3
                class="text-center font-opensans text-xl font-bold text-baseBlack sm:text-left sm:text-2xl"
              >
                {{ content.title }}
              </h3>
            </div>
            <p
              class="mt-5 border-t border-[#E7EBEF] pt-4 text-base leading-7 text-neutral-600"
            >
              {{ content.description }}
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped></style>
