<template>
  <section class="py-16">
    <div class="wrapper">
      <div class="text-center py-4">
        <h3 class="font-grifter text-baseBlack font-bold text-5xl py-2">
          What we can do with Power BI
        </h3>
        <p class="py-4 text-xl text-[#7A7474]">
          Unlock the full potential of your data with Power BI, a versatile
          business analytics tool designed to transform complex data into
          meaningful insights
        </p>
      </div>
      <div class="space-y-10">
        <PowerBiCanDoCard
          class="bg-secondary text-white flex-row-reverse"
          :data="{
            img: biIntergration,
            number: '01',
            title: 'Power BI Integration',
            description:
              'Our power BI contractors design, build, and deploy power BI to make it a feature-pocked tool for your business needs that delivers value for your teams from first day itself with more actionable insights.',
            numClass: 'text-neutral-200',
            titleClass: 'text-neutral-50',
            decClass: 'text-neutral-200',
          }"
        />
        <PowerBiCanDoCard
          class="bg-[#D9D9D9]"
          :data="{
            img: biImplemention,
            number: '02',
            title: 'Power BI Implementation',
            description:
              'We use the result to prepare the implementation roadmap, set up and roll out Power BI in incremental and transparent stages. Our BI and analytics consultants start by delivering comprehensive business analysis services along with an end-to end technology assessment.',
            numClass: 'text-neutral-500',
            titleClass: 'text-baseBlack',
            decClass: 'text-neutral-500',
          }"
        />
        <PowerBiCanDoCard
          class="bg-secondary text-white flex-row-reverse"
          :data="{
            img: biDevelopment,
            number: '03',
            title: 'Power BI Development',
            description:
              'We also offer services of integrating power BI visualizations into your external portals to help you make your embedded power BI analytics visible to your partners and vendors who don’t use the platform.',
            numClass: 'text-neutral-200',
            titleClass: 'text-neutral-50',
            decClass: 'text-neutral-200',
          }"
        />
        <PowerBiCanDoCard
          class="bg-[#D9D9D9]"
          :data="{
            img: biCustomzation,
            number: '04',
            title: 'Power BI Customization',
            description:
              'We deliver full-scale report and dashboard customization to help you get a multi-dimensional perspective of all your data sets while staying within your branded environment.',
            numClass: 'text-neutral-500',
            titleClass: 'text-baseBlack',
            decClass: 'text-neutral-500',
          }"
        />
      </div>
    </div>
  </section>
</template>

<script setup>
import {
  biIntergration,
  biImplemention,
  biDevelopment,
  biCustomzation,
} from "../../lib/images";
</script>

<style lang="scss" scoped></style>
