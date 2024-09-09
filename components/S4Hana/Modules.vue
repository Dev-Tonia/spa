<template>
  <section class="py-16 bg-secondary">
    <div class="wrapper">
      <!-- section title -->
      <div class="py-4">
        <h3
          class="font-grifter text-white font-bold text-3xl sm:text-4xl lg:text-5xl xl:text-6xl py-2"
        >
          Modules available on our platform
        </h3>

        <p class="py-4 text-lg md:text-xl text-[#7A7474]">
          SAP S/4HANA offers a wide range of capabilities that cover critical
          business processes such as finance, supply chain management,
          manufacturing, sales, and procurement.
        </p>
      </div>

      <div>
        <!-- <S4HanaS4card
          :data="{
            title: 'Financial (FI Module)',
            description: ` Financial planning sap is designed to simplify the process of financial management and to bring all transactions in an organization in a unified system. the setup brings transparency and allows the financial head to understand the strengths, reduce expenses when possible and make an infor med decision. the versatile and flexible module can be used by organizations of every type, helping them consolidate their date.`,
          }"
        > -->
        <div class="flex bg-white">
          <div class="">
            <img :src="fi" alt="" class="" />
          </div>

          <div class="-translate-x-14 translate-y-40">
            <img :src="fi_1" alt="" class="" />
          </div>
        </div>
        <!-- </S4HanaS4card> -->
      </div>
    </div>
  </section>
</template>

<script setup>
import { fi_1, fi } from "../../lib/images";
</script>

<style lang="scss" scoped></style>
