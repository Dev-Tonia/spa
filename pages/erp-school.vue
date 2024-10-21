<template>
  <LazyCommonReusableHero
    :data="{
      title: 'The School Manager (TSM)',
      description: `The School Manager, TSM is a cloud-based ERP solution designed exclusively for educational establishments especially schools keeping in view their set of requirements. It acts as a potent tool enabling and ensuring the proper functioning of the operations of the school. `,
      img: erpSchool,
    }"
    scroll-to="key_modules"
  />
  <LazyErpSchoolKeyModules />
  <LazyErpSchoolAppSection />
  <LazyErpSchoolBenefits />
  <LazyCommonContact />
</template>

<script setup lang="ts">
import { erpSchool } from "../lib/images";
</script>

<style scoped></style>
