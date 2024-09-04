<script setup>
import { powerBi } from "../lib/images";
</script>

<template>
  <CommonReusableHero
    :data="{
      title:
        'Gain valuable insights with the assistance of our Power BI experts',
      description: `Integrate high impact analytics and business intelligence products with minimal upfront costs.`,
      img: powerBi,
    }"
  />
  <PowerWhyPowerBi />
  <PowerWhatBiCanDo />
  <CommonContact />
</template>

<style lang="scss" scoped></style>
