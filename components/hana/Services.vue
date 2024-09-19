<script setup>
import { sap_hana } from "../../lib/images";
</script>
<template>
  <section class="bg-[#FAFAFA] py-16">
    <div class="wrapper">
      <CommonSectionTitle
        :data="{
          title: 'SAP HANA Services',
          description: `Transform your business with SAP HANA Services, offering real-time analytics, simplified data management, and accelerated decision-making.`,
        }"
      />
      <div class="flex gap-14 py-12">
        <div class="w-1/2">
          <div class="">
            <div
              class="bg-primary flex items-center justify-center text-white w-12 h-12 rounded-[8px] p-2"
            >
              <Icon name="bi:database" class="text-5xl" />
            </div>
            <h6 class="text-lg font-bold font-grifter py-5">
              SAP HANA Database
            </h6>
            <p class="text-neutral-500 text-sm">
              SAP HANA Database is a hybrid in–memory database. SAP HANA
              Database is the heart of SAP in-memory technology. In SAP HANA,
              Database table are of two types Row Store and Column Store
            </p>
          </div>
        </div>
        <div class="w-1/2">
          <div>
            <div
              class="bg-primary flex items-center justify-center text-white w-12 h-12 rounded-[8px] p-2"
            >
              <Icon name="game-icons:platform" class="text-5xl" />
            </div>
            <h6 class="text-lg font-bold font-grifter py-5">
              SAP HANA Platform
            </h6>
            <p class="text-neutral-500 text-sm">
              SAP HANA Platform is a development platform with an in-memory data
              store which allows the customers to analyse a large volume of data
              in real time. SAP HANA Platform works as a development platform,
              which provides infrastructure and tools for building a
              high-performance application based on SAP HANA Extended
              Application Services (SAP HANA XS).
            </p>
          </div>
        </div>
      </div>
      <div>
        <img :src="sap_hana" loading="lazy" alt="" />
      </div>
    </div>
  </section>
</template>

<style scoped></style>
