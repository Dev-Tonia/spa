<template>
  <!-- <section class="py-16 bg-secondary">
      <div class="wrapper">
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
          <S4HanaS4card
            :data="{
              title: 'Financial (FI Module)',
              description: ` Financial planning sap is designed to simplify the process of financial management and to bring all transactions in an organization in a unified system. the setup brings transparency and allows the financial head to understand the strengths, reduce expenses when possible and make an infor med decision. the versatile and flexible module can be used by organizations of every type, helping them consolidate their date.`,
            }"
          >
            
  
            <div class="relative w-full aspect-square max-w-md mx-auto">
              <div class="absolute inset-0">
                <img
                  :src="fi_1"
                  alt="Financial image 2"
                  class="absolute top-4 left-4 w-full h-full object-cover shadow-lg transform -rotate-3 z-10"
                />
                <img
                  :src="fi"
                  alt="Financial image 1"
                  class="absolute top-0 left-0 w-full h-full object-cover shadow-lg transform rotate-3 z-20"
                />
              </div>
            </div>
          </S4HanaS4card>
        </div>
      </div>
    </section> -->

  <section class="py-16 bg-secondary">
    <div class="wrapper">
      <!-- section title -->
      <div class="py-4">
        <h3
          class="font-grifter text-white font-bold text-3xl sm:text-4xl lg:text-5xl xl:text-6xl py-2"
        >
          Features of SAP Business One
        </h3>

        <p class="py-4 text-lg md:text-xl text-[#7A7474]">
          SAP S/4HANA offers a wide range of capabilities that cover critical
          business processes such as finance, supply chain management,
          manufacturing, sales, and procurement.
        </p>
      </div>

      <!-- first card section -->
      <div class="flex gap-10 my-10">
        <S4HanaS4card
          :data="{
            title: 'Accounting and Financials',
            description: `Manage your general ledger, journals, budgets and accounts receivable and payable. Payment runs, real time financial numbers, drill down and full multi-currency capabilities.`,
          }"
          class="w-1/2"
        >
          <div class="relative pt-10 h-0 md:pb-[85%] lg:pb-[80%] xl:pb-[70%]">
            <img
              :src="af_1"
              alt="Financial image 2 "
              class="absolute w-[350px]"
              loading="lazy"
            />
            <img
              :src="af_2"
              alt="Financial image 1"
              class="absolute right-0 translate-y-1/2 w-[350px]"
              loading="lazy"
            />
          </div>
        </S4HanaS4card>
        <S4HanaS4card
          :data="{
            title: 'Sales and Customer Management',
            description: `Manage the entire sales process from first contact to closing the sale from customer data management to after-sales support. Sales pipeline visibility, flexible sales process, complete tracking.`,
          }"
          class="w-1/2"
        >
          <div class="relative pt-10 h-0 pb-[70%]">
            <img
              :src="scm_1"
              alt="Financial image 2"
              class="absolute w-[350px]"
              loading="lazy"
            />
            <img
              :src="scm_2"
              alt="Financial image 1"
              loading="lazy"
              class="absolute right-0 translate-y-1/2 w-[350px]"
            />
          </div>
        </S4HanaS4card>
      </div>
      <!-- second card section -->
      <div class="flex gap-10 my-10 flex-grow">
        <S4HanaS4card
          :data="{
            title: 'Purchasing and Operations',
            description: `Control the entire procurement process. Materials resource planning, minimum inventory levels and production planning. Schedule your material and production requirements.`,
          }"
          class="w-[33.33%]"
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
          class="w-[33.33%]"
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
          class="w-[33.33%]"
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
      <div class="flex gap-10 my-10">
        <S4HanaS4card
          :data="{
            title: 'Universal code base',
            description: `40 countries supports different time zones and helps you Comply with legal requirements Integration with on-demand Web services, cloud-based applications, and mobile devices provides anywhere, anytime access to tools and information`,
          }"
          class="w-1/2"
        >
          <div class="relative pt-10 h-0 pb-[70%]">
            <img
              :src="ucb_1"
              alt="Quality Management image 2 "
              loading="lazy"
              class="absolute w-[350px]"
            />
            <img
              :src="ucb_2"
              alt="Quality Management image 1"
              class="absolute right-0 translate-y-1/2 w-[350px]"
              loading="lazy"
            />
          </div>
        </S4HanaS4card>
        <S4HanaS4card
          :data="{
            title: 'SAP Business One Analytics Powered by HANA',
            description: `Delivers in-memory technology and analytics innovations without disruption to the customer’s business.`,
          }"
          class="w-1/2"
        >
          <div class="relative pt-10 h-0 pb-[70%]">
            <img
              :src="ps_1"
              alt="Project Systems image 2"
              loading="lazy"
              class="absolute w-[350px]"
            />
            <img
              :src="ps_2"
              alt="Project Systems image 1"
              loading="lazy"
              class="absolute right-0 translate-y-1/2 w-[350px]"
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
