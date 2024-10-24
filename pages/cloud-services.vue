<template>
  <LazyCommonReusableHero
    class="text-white"
    :data="{
      title:
        'We provides highly scalable and affordable SAP Business one Cloud servers',
      description: `Our Cloud services empower companies to streamline their operations, gain real-time business insights, and maintain cost-efficiency without the need for on-premise infrastructure.`,

      img: cloud,
    }"
    scroll-to="cloud"
  />

  <section id="cloud">
    <LazyCommonSubHeader
      :data="{
        title: `SAP Business One Cloud service ensures lightning-fast, efficient business management.`,

        description: `We offer optimized and scalable hosting for both SAP Business One for SQL and version for HANA. Our servers are sized as per the recommendations of SAP and best practices in the industry. We have automated full backups every day and transaction log backups every hour. One copy of daily full backup is stored on offsite cloud for long term storage. Upgrades are maintained as and when required.`,
      }"
    />
  </section>

  <section class="bg-[#FAFAFA] py-16">
    <div class="wrapper">
      <LazyCommonSectionTitle
        :data="{
          title: 'Benefit of SAP Business One Cloud service',
          description: `SAP Business One Cloud Services deliver a powerful and flexible solution for small to medium-sized businesses looking to modernize their operations.`,
        }"
      />
      <div class="sm:flex gap-14 py-12">
        <div class="sm:w-1/2 pb-8">
          <h5 class="font-bold text-lg font-grifter text-baseBlack">
            Cost-Effective Scalability with Cloud-Based Infrastructure for IT
            Flexibility
          </h5>
          <p class="text-neutral-500">
            The ability to scale up or down the computing resources on a
            cloud-based infrastructure offers businesses a cost-effective way to
            meet their IT requirements without having to worry about the
            physical limitations of traditional hardware.
          </p>
          <div class="py-5">
            <button
              class="sm:text-base text-sm md:text-lg font-bold text-white bg-primary rounded-[8px] py-3 px-3 sm:px-5"
              @click="navigateTo('/contact')"
            >
              Contact Our Expert
            </button>
          </div>
        </div>
        <div class="sm:w-1/2">
          <div>
            <div
              class="bg-primary flex items-center justify-center text-white w-12 h-12 rounded-[8px] p-2"
            >
              <Icon name="ph:kanban" class="text-5xl" />
            </div>
            <h6 class="text-lg font-bold font-grifter py-5">
              Agile Cloud Hosting: Scale Resources Instantly to Meet Market
              Demands
            </h6>
            <p class="text-neutral-500 text-sm">
              With scalable cloud hosting, businesses can easily add or remove
              computing resources as required, providing them with the agility
              to respond quickly to changing market demands.
            </p>
          </div>
          <div class="pt-5">
            <div
              class="bg-primary flex items-center justify-center text-white w-12 h-12 rounded-[8px] p-2"
            >
              <Icon name="ph:cloud" class="text-5xl" />
            </div>
            <h6 class="text-lg font-bold font-grifter py-5">
              Scalable Cloud Hosting: The Power to Grow and Adapt Effortlessly
            </h6>
            <p class="text-neutral-500 text-sm">
              Scalable cloud hosting offers the flexibility to increase or
              decrease resources on-demand to meet the changing needs of your
              business.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { cloud } from "../lib/images";
</script>

<style lang="scss" scoped></style>
