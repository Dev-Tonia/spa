<script setup>
import { hana } from "../lib/images";
</script>

<template>
  <LazyCommonReusableHero
    class="text-white"
    :data="{
      title: 'SAP S/4 HANA',
      description: `Our SAP S/4 HANA is designed to run on the SAP HANA in-memory database, providing real-time processing speeds, advanced analytics, and simplified data models.`,
      img: hana,
    }"
    scroll-to="sap-s4-hana-modules"
  />
  <LazyS4HanaModules />
  <LazyCommonContact />
</template>

<style scoped></style>
