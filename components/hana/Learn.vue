<script setup>
import { sap_hana_learn } from "../../lib/images";
</script>
<template>
  <section class="py-16">
    <div class="wrapper">
      <div>
        <h3
          class="font-grifter text-baseBlack font-bold text-3xl sm:text-4xl lg:text-5xl xl:text-6xl py-2"
        >
          Learn how it works
        </h3>

        <p class="py-4 text-lg md:text-xl text-[#7A7474]">
          SAP HANA stores data in memory in a columnar format. Doing so enables
          the product to deliver real-time or near-real-time transactions and
          analytics. For SAP, the columnar format offers better access to, and
          processing of data compared to traditional, row-based memory.
        </p>
        <p class="py-4 text-lg md:text-xl text-[#7A7474]">
          SAP HANA operates on the SUSE Linux Server, which manages memory
          reservations for various processes. Linux OS allocates memory
          dynamically as needed by SAP HANA, which uses a memory pool to manage
          in-memory data, system tables, and computations. High data compression
          in HANA reduces overall storage requirements.
        </p>
      </div>
      <div>
        <img :src="sap_hana_learn" loading="lazy" alt="" />
      </div>
    </div>
  </section>
</template>

<style scoped></style>
