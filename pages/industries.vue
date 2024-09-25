<script setup></script>

<template>
  <LazyCommonReusableHero
    :data="{
      title: 'Industries',
      description: `SAP offers intelligent solutions designed to meet the unique challenges of diverse sectors, empowering organizations to optimize operations, drive innovation, and accelerate growth. SAP provides the tools and insights needed to stay ahead in a fast-evolving marketplace.`,
    }"
    scroll-to="features"
  />
  <IndustriesList />
  <LazyCommonContact />
</template>

<style lang="scss" scoped></style>
