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

      <!-- first card section -->
      <div class="md:flex space-y-6 md:space-y-0 gap-10 my-10">
        <S4HanaS4card
          :data="{
            title: 'Financial (FI Module)',
            description: `Financial planning SAP is designed to simplify the process of financial management and to bring all transactions in an organization in a unified system. The setup brings transparency and allows the financial head to understand the strengths, reduce expenses when possible and make an informed decision. The versatile and flexible module can be used by organizations of every type, helping them consolidate their data.`,
          }"
        >
          <div
            class="relative pt-10 h-0 pb-[100%] min-[470px]:pb-[80%] min-[550px]:pb-[70%] md:pb-[110%] lg:pb-[100%] xl:pb-[80%]"
          >
            <img
              :src="fi_1"
              alt="Financial image 2 "
              class="absolute w-[250px] min-[400px]:w-[300px] sm:w-[350px]"
            />
            <img
              :src="fi"
              alt="Financial image 1"
              class="absolute right-0 translate-y-1/2 w-[250px] min-[400px]:w-[300px] sm:w-[350px]"
            />
          </div>
        </S4HanaS4card>
        <S4HanaS4card
          :data="{
            title: 'Human Capital Management (HCM Module)',
            description: `SAP Human Capital is made for the HR management department allowing the professionals to easily keep track of an employee’s performance, suggest appraisals, evaluate their efficiency and handle promotions. The system can also be used to process payroll, employee onboarding and create a task flow to streamline processes irrespective of how big the employee count is in an enterprise.`,
          }"
        >
          <div
            class="relative pt-10 h-0 pb-[100%] min-[470px]:pb-[80%] min-[550px]:pb-[70%] md:pb-[110%] lg:pb-[100%] xl:pb-[80%]"
          >
            <img
              :src="hcm_1"
              alt="Financial image 2"
              class="absolute w-[250px] min-[400px]:w-[300px] sm:w-[350px]"
            />
            <img
              :src="hcm_2"
              alt="Financial image 1"
              class="absolute right-0 translate-y-1/2 w-[250px] min-[400px]:w-[300px] sm:w-[350px]"
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
            title: 'Production Planning (PP Module)',
            description: `An important module in the list, SAP Production Planning allows an administrator to manage everyday operations, plan sales, marketing activities, manage cost, materials inventory and distribute available resources accordingly for maximum results. The module simplifies planning and management, providing a better view of investments to make and utilize the resources generated to achieve their targets.`,
          }"
          class="w-full md:w-[40%] lg:w-1/3"
        >
          <div class="pt-10">
            <img :src="pp" alt="PP image" class="" />
          </div>
        </S4HanaS4card>

        <S4HanaS4card
          :data="{
            title: 'Sales and Distribution (SD Module)',
            description: `SAP Sales and Distribution is an important module for every industry that handles their customers directly. The module can be used to request a quote, create quotations, proposals, add or modify invoices among many other activities. When a professional acquires an SAP certification in one of these important modules, they can procure a job in the respective department. The module also helps streamline shipping, transportation, maintain feedback, bills and credit management.`,
          }"
          class="w-full md:w-[40%] lg:w-1/3"
        >
          <div class="pt-10">
            <img :src="sd" alt="SD image" class="" />
          </div>
        </S4HanaS4card>

        <S4HanaS4card
          :data="{
            title: 'Controlling',
            description: `Designed for enterprises with demanding requirements, SAP Controlling module provides decision makers with an overview of business operations and all its departments. The module makes it easier to manage costs, investments and track expenses. Controlling acts as a centralized system providing a center to monitor costs, profit and internal orders to make decisions based on immediate requirements.`,
          }"
          class="w-full md:w-[40%] lg:w-1/3"
        >
          <div class="pt-10">
            <img :src="controlling" alt="controlling image" class="" />
          </div>
        </S4HanaS4card>
      </div>

      <!-- third card section -->
      <div class="md:flex space-y-6 md:space-y-0 gap-10 my-10">
        <S4HanaS4card
          :data="{
            title: 'Quality Management',
            description: `Every enterprise is expected to maintain the highest level of quality. The SAP quality management module allows them to operate in a structured manner to deliver the best quality in all their products. Ranging from production, planning and inspection to sales and quality monitoring, everything is carried in a unified interface. The quality checks are regular and it simplifies audit management to ensure best quality irrespective of the number of products being shipped during a timeline.`,
          }"
        >
          <div
            class="relative pt-10 h-0 pb-[100%] min-[470px]:pb-[80%] min-[550px]:pb-[70%] md:pb-[110%] lg:pb-[100%] xl:pb-[80%]"
          >
            <img
              :src="qm_1"
              alt="Quality Management image 2 "
              class="absolute w-[250px] min-[400px]:w-[300px] sm:w-[350px]"
            />
            <img
              :src="qm_2"
              alt="Quality Management image 1"
              class="absolute right-0 translate-y-1/2 w-[250px] min-[400px]:w-[300px] sm:w-[350px]"
            />
          </div>
        </S4HanaS4card>
        <S4HanaS4card
          :data="{
            title: 'Project Systems',
            description: `SAP Project Systems is a module dedicated to helping a team or the entire organization plan a project in a planned manner. By using the module, the experts can start from planning to preparation, tracking and create detailed reports. When the module is followed successfully, it also helps assess project costs, elements involved and resources required to successfully carry out the proposed project.`,
          }"
        >
          <div
            class="relative pt-10 h-0 pb-[100%] min-[470px]:pb-[80%] min-[550px]:pb-[70%] md:pb-[110%] lg:pb-[100%] xl:pb-[80%]"
          >
            <img
              :src="ps_1"
              alt="Project Systems image 2"
              class="absolute w-[250px] min-[400px]:w-[300px] sm:w-[350px]"
            />
            <img
              :src="ps_2"
              alt="Project Systems image 1"
              class="absolute right-0 translate-y-1/2 w-[250px] min-[400px]:w-[300px] sm:w-[350px]"
            />
          </div>
        </S4HanaS4card>
      </div>

      <!-- fourth card section -->

      <div class="my-10">
        <div class="bg-white rounded-lg shadow-md p-4 min-[700px]:flex gap-10">
          <div class="min-[700px]:w-6/12">
            <h3 class="text-lg font-semibold mt-4">
              Financial Supply Chain Management
            </h3>
            <p class="text-gray-600 mt-2">
              Another important module in the list, SAP financial supply chain
              management deals with credit management and to easily manage an
              enterprise’s financial requirements with enough headroom. The
              module is used to manage cash, liquidity state, treasure and also
              foresee risks involved in an investment. Further, into the
              lifecycle of the financial supply chain, it can also be used to
              manage disputes, payments and acts as a platform to monitor
              collections for the products supplied during a specific time
              period.
            </p>
          </div>

          <div class="min-[700px]:w-6/12 pt-4 min-[700px]:pt-0">
            <div
              class="relative h-0 pb-[95%] min-[410px]:pb-[80%] min-[490px]:pb-[70%] min-[600px]:pb-[60%]"
            >
              <img
                :src="fscm_1"
                alt="Financial image 2 "
                class="absolute w-[290px] min-[500px]:w-[310px]"
              />
              <img
                :src="fscm_2"
                alt="Financial image 1"
                class="absolute right-0 translate-y-1/2 w-[290px] min-[500px]:w-[310px]"
              />
            </div>
          </div>
        </div>
      </div>

      <!--fifth card  -->
      <div
        class="flex flex-wrap md:justify-center lg:justify-start lg:flex-nowrap gap-10 my-10"
      >
        <S4HanaS4card
          :data="{
            title: 'Materials Management (MM Module)',
            description: `This SAP module deals with everything related to materials management including purchasing the necessary materials, maintaining an inventory, evaluate the inventory, keeping track of the quality of goods supplied by a vendor, rate them and verify invoices sent by the vendor. The module can also be used to keep track of statutory requirements.`,
          }"
          class="w-full md:w-1/2 lg:w-1/3"
        >
          <div class="pt-10">
            <img :src="mm" alt="PP image  " class="" />
          </div>
        </S4HanaS4card>
        <S4HanaS4card
          :data="{
            title: 'Plant Maintenance (PM Module)',
            description: `For enterprises which have dedicated manufacturing plants, SAP plant maintenance module allows them to take control of various aspects of maintaining an industrial setup. The unified system facilitates engineers to plan maintenance, breakdown, preventive measures and predictive systems to ensure continuous production.`,
          }"
          class="w-full md:w-[40%] lg:w-1/3"
        >
          <div class="pt-10">
            <img :src="pm" alt="SD image " class="" />
          </div>
        </S4HanaS4card>
        <S4HanaS4card
          :data="{
            title: 'Learn more about SAP S/4 HANA',
            description: `Businesses can achieve higher customer satisfaction, increased sales, and streamlined operations.`,
          }"
          class="w-full md:w-1/2 lg:w-1/3"
        >
          <div class="pt-10">
            <img :src="learn_s4" alt="controlling image  " class="" />
          </div>
        </S4HanaS4card>
      </div>
    </div>
  </section>
</template>

<script setup>
import {
  fi_1,
  fi,
  hcm_1,
  hcm_2,
  sd,
  pp,
  controlling,
  qm_1,
  qm_2,
  ps_1,
  ps_2,
  learn_s4,
  pm,
  mm,
  fscm_2,
  fscm_1,
} from "../../lib/images";
</script>

<style lang="scss" scoped></style>
