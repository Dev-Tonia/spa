<script setup>
import { hana } from "../lib/images";
</script>

<template>
  <CommonReusableHero
    class="text-white"
    :data="{
      title: 'SAP Fiori',
      description: `SAP’s UX strategy is about the design and development of delightful applications according to the SAP Fiori concept. SAP Fiori apps adhere to this concept and can be deployed on-cloud or on-premise.`,
      img: hana,
    }"
  />
  <FioriSubHeader />
  <FioriWhyFiori />
  <LazyFioriArch />
  <LazyCommonContact />
</template>

<style scoped></style>
