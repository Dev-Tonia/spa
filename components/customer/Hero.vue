<script setup>
import { customerCheckout } from "../../lib/images";
</script>

<template>
  <section class="py-16">
    <div class="wrapper">
      <div>
        <h3 class="font-grifter font-bold text-3xl py-2">
          SAP Customer Checkout
        </h3>
        <p class="py-4 text-xl text-[#7A7474]">
          Discover our integrated point-of-sale (POS) software designed for
          retail, sports and entertainment, and catering businesses. Supporting
          all common POS requirements SAP Customer Checkout can be used as a
          standalone solution or integrated with SAP S/4HANA and all other SAP
          ERP systems.
        </p>
        <Button
          class="hover:bg-primary cursor-pointer bg-primary text-white font-medium space-x-2"
        >
          <span> Learn more</span>

          <Icon name="ri:arrow-down-line" class="text-2xl pl-1" />
        </Button>
        <div class="py-8">
          <img :src="customerCheckout" alt="" />
        </div>
      </div>
    </div>
  </section>
</template>

<style lang="scss" scoped></style>
