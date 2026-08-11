<template>
  <section class="py-16 bg-secondary" id="features">
    <div class="wrapper">
      <!-- section title -->
      <div class="py-4">
        <h3
          class="font-grifter text-white font-bold text-3xl sm:text-4xl lg:text-5xl xl:text-6xl py-2"
        >
          Features of SAP Business One
        </h3>

        <p class="py-4 text-lg md:text-xl text-[#e4e3e3]">
          SAP Business one offers a wide range of capabilities that cover
          critical business processes such as finance, supply chain management,
          manufacturing, sales, and procurement.
        </p>
      </div>

      <!-- first card section -->
      <div class="md:flex space-y-6 md:space-y-0 gap-10 my-10">
        <S4HanaS4card
          :data="{
            title: 'Accounting and Financials',
            description: `Manage your general ledger, journals, budgets and accounts receivable and payable. Payment runs, real time financial numbers, drill down and full multi-currency capabilities.`,
          }"
          class="md:w-1/2"
        >
          <div class="mt-10 grid grid-cols-1 min-[520px]:grid-cols-2 gap-4">
            <img
              :src="af_1"
              alt="Financial image 2 "
              class="w-full max-w-[420px] justify-self-start rounded-lg object-cover shadow-sm"
              loading="lazy"
            />
            <img
              :src="af_2"
              alt="Financial image 1"
              class="w-full max-w-[420px] justify-self-end rounded-lg object-cover shadow-sm min-[520px]:mt-12"
              loading="lazy"
            />
          </div>
        </S4HanaS4card>
        <S4HanaS4card
          :data="{
            title: 'Sales and Customer Management',
            description: `Manage the entire sales process from first contact to closing the sale from customer data management to after-sales support. Sales pipeline visibility, flexible sales process, complete tracking.`,
          }"
          class="md:w-1/2"
        >
          <div class="mt-10 grid grid-cols-1 min-[520px]:grid-cols-2 gap-4">
            <img
              :src="scm_1"
              alt="Financial image 2"
              class="w-full max-w-[420px] justify-self-start rounded-lg object-cover shadow-sm"
              loading="lazy"
            />
            <img
              :src="scm_2"
              alt="Financial image 1"
              loading="lazy"
              class="w-full max-w-[420px] justify-self-end rounded-lg object-cover shadow-sm min-[520px]:mt-12"
            />
          </div>
        </S4HanaS4card>
      </div>
      <!-- second card section -->
      <div
        class="flex flex-wrap md:justify-center lg:justify-start lg:flex-nowrap gap-10 my-10"
      >
        <S4HanaS4card
          :data="{
            title: 'Purchasing and Operations',
            description: `Control the entire procurement process. Materials resource planning, minimum inventory levels and production planning. Schedule your material and production requirements.`,
          }"
          class="w-full md:w-[40%] lg:w-1/3"
        >
          <div class="pt-10">
            <img :src="po" alt="PP image  " loading="lazy" class="" />
          </div>
        </S4HanaS4card>
        <S4HanaS4card
          :data="{
            title: 'Inventory and Distribution',
            description: `Manage inventory across multiple warehouses and locations, and track and record stock movements. Moving average, FIFO and standard costing methods. Manage serial and batch items. Multiple units of measure.`,
          }"
          class="w-full md:w-[40%] lg:w-1/3"
        >
          <div class="pt-10">
            <img :src="pi" alt="SD image " loading="lazy" class="" />
          </div>
        </S4HanaS4card>
        <S4HanaS4card
          :data="{
            title: 'Integration with SAP Crystal Reports',
            description: `Software lets you design and deliver reports via the Web or embedded in enterprise applications.`,
          }"
          class="w-full md:w-[40%] lg:w-1/3"
        >
          <div class="pt-10">
            <img
              :src="icp"
              alt=" Integration image  "
              loading="lazy"
              class=""
            />
          </div>
        </S4HanaS4card>
      </div>
      <!-- third card section -->
      <div class="md:flex space-y-6 md:space-y-0 gap-10 my-10">
        <S4HanaS4card
          :data="{
            title: 'Universal code base',
            description: `40 countries supports different time zones and helps you Comply with legal requirements Integration with on-demand Web services, cloud-based applications, and mobile devices provides anywhere, anytime access to tools and information`,
          }"
          class="md:w-1/2"
        >
          <div class="mt-10 grid grid-cols-1 min-[520px]:grid-cols-2 gap-4">
            <img
              :src="ucb_1"
              alt="Quality Management image 2 "
              loading="lazy"
              class="w-full max-w-[420px] justify-self-start rounded-lg object-cover shadow-sm"
            />
            <img
              :src="ucb_2"
              alt="Quality Management image 1"
              class="w-full max-w-[420px] justify-self-end rounded-lg object-cover shadow-sm min-[520px]:mt-12"
              loading="lazy"
            />
          </div>
        </S4HanaS4card>
        <S4HanaS4card
          :data="{
            title: 'SAP Business One Analytics Powered by HANA',
            description: `Delivers in-memory technology and analytics innovations without disruption to the customer’s business.`,
          }"
          class="md:w-1/2"
        >
          <div class="mt-10 grid grid-cols-1 min-[520px]:grid-cols-2 gap-4">
            <img
              :src="ps_1"
              alt="Project Systems image 2"
              loading="lazy"
              class="w-full max-w-[420px] justify-self-start rounded-lg object-cover shadow-sm"
            />
            <img
              :src="ps_2"
              alt="Project Systems image 1"
              loading="lazy"
              class="w-full max-w-[420px] justify-self-end rounded-lg object-cover shadow-sm min-[520px]:mt-12"
            />
          </div>
        </S4HanaS4card>
      </div>
    </div>
  </section>
</template>

<script setup>
import {
  af_1,
  af_2,
  scm_1,
  scm_2,
  po,
  pi,
  icp,
  ucb_1,
  ucb_2,
  ps_1,
  ps_2,
} from "../../lib/images";
</script>

<style lang="scss" scoped></style>
