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
  <LazyCommonSubHeader
    :data="{
      title: 'Reimagine the SAP user experience with SAP Fiori',
      description: ` SAP Fiori is the new user experience (UX) for SAP software. It
            applies modern design principles for a completely reimagined user
            experience. SAP Fiori UX represents a personalized, role-based user
            experience (UX) for SAP software with responsive and simple user
            experience across devices (smart phones, tablets etc.) and
            deployment options. Using modern design principles, it simplifies
            the UX across all lines of business, tasks, and devices`,
    }"
  />
  <FioriWhyFiori />
  <LazyFioriArch />
  <LazyCommonContact />
</template>

<style scoped></style>
