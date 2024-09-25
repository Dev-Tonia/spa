<script setup>
import { business_one } from "../lib/images";
</script>
<template>
  <LazyCommonReusableHero
    class="text-white"
    :data="{
      title: 'SAP Business One',
      description: `IDM is a leading ERP consulting team specializing in SAP Business One, tailored for small, medium, and large businesses. As one of the largest SAP Business One partners in West Africa, we have completed numerous implementations, including SAP Business One for HANA, helping clients maximize ROI and achieve business growth through expert support and turnaround services.`,
      img: business_one,
    }"
    scroll-to="features"
  />

  <LazyCommonSubHeader
    :data="{
      title: 'SAP Business one, best practice core platform.',
      description: `The SAP Business One is an integrated application that integrates all transactional, reporting & controlling process in the entire company. Applications such as CRM, SCM & ERP directly derive their data from standard transactional data – Sales, Purchase, Production, Logistics, Accounting, Finance, CRM, Services etc.
This state of art application developed by SAP is based on the latest client server Technology duly adapted for today’s businesses.`,
    }"
  />
  <LazyBussinessOneFeatures />
  <LazyCommonContact />
</template>

<style scoped></style>
