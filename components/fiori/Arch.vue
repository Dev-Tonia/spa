<script setup>
import { Fiori_arch } from "../../lib/images";
</script>
<template>
  <section class="py-16 bg-secondary" id="sap-fiori-arch">
    <div class="wrapper">
      <!-- section title -->
      <div class="py-4">
        <h3
          class="font-grifter text-white font-bold text-3xl sm:text-4xl lg:text-5xl xl:text-6xl py-2"
        >
          SAP Fiori Architrcture
        </h3>

        <p class="py-4 text-lg md:text-xl text-[#7A7474]">
          The SAP Fiori architecture introduces the high-level architecture of
          SAP Fiori. The SAP Fiori apps are built with SAPUI5 technology for web
          applications and iOS native and can be used on smartphones, tablets,
          and desktop computers. The SAP Fiori launchpad is used to launch and
          run the apps. The business data that is consumed in the apps is
          retrieved at runtime from the back-end systems by using OData
          services.
        </p>
      </div>

      <div>
        <img :src="Fiori_arch" loading="lazy" alt="" />
      </div>
    </div>
  </section>
</template>

<style scoped></style>
