<script setup>
import { businessSap } from "../lib/images";
</script>

<template>
  <LazyCommonReusableHero
    :data="{
      title: 'SAP Business one Add-ons',
      description:
        'Integrating a report scheduler with email and WhatsApp within SAP Business One offers significant benefits, including automation, enhanced communication, improved efficiency, and better decision-making. ',
      img: businessSap,
    }"
    scroll-to="features"
  />
  <LazyAddOnFeatures />
  <LazyCommonContact />
</template>

<style lang="scss" scoped></style>
