<script setup>
import { customerCheckout } from "../lib/images";
</script>

<template>
  <LazyCommonReusableHero
    :data="{
      title: 'SAP Customer Checkout',
      description: `Discover our integrated point-of-sale (POS) software designed for retail, sports and entertainment, and catering businesses. Supporting all common POS requirements SAP Customer Checkout can be used as a standalone solution or integrated with SAP S/4HANA and all other SAP ERP systems.`,
      img: customerCheckout,
    }"
    scroll-to="why-sap-customer-checkout"
  />
  <LazyCustomerReasonToUse />
  <LazyCustomerUseCase />
  <LazyCommonContact />
</template>

<style lang="scss" scoped></style>
