<script setup>
const contents = [
  {
    id: 1,
    tile: "Data-Driven Data",
    description: `Unify your data to make tactical, insight backeddecisions for
              higher profitability and realibility. Smart algorithms and
              technology won’t miss a thing.`,
    icon: "ph:chart-line-light",
  },
  {
    id: 2,
    tile: "Custom Visualisation",
    description: `Raw data transform to charts, pies, graphs for quick extraction and easy to decipher, intelligent data presentations. Highly navigable dashboards`,
    icon: "ph:eye",
  },
  {
    id: 3,
    tile: "Data Integration",
    description:
      "BI brings together all your data from varied sources and ends. So your teams don’t miss out on any part of business. Live reports get  updated in real time.",
    icon: "carbon:gears",
  },
  {
    id: 4,
    tile: "Easy Access",
    description: `With ready dashboards that are highly customizable and integrative and live reporting features, everything is just out there, useable by non-tech personnel too.`,
    icon: "mdi:hand-tap",
  },
  {
    id: 5,
    tile: "AI and Machine Learning ",
    description: `Backed by the latest technology, BI reporting and analytics and smart predictives, trends and competitive analysis. Can be activated with voice commands.`,
    icon: "hugeicons:ai-brain-04",
  },
  {
    id: 6,
    tile: "Scalable",
    description: `Start with what you  need, integrate existing technologies, set up alerts and scale up or down with cost-effective augmentations or deletions.`,
    icon: "ph:arrow-square-out",
  },
];
</script>

<template>
  <section class="bg-neutral-50 py-16">
    <div class="wrapper">
      <CommonSectionTitle
        :data="{
          title: 'Why Power BI',
          description: `Power BI is a powerful tool that will provides businesses with valuable insights into their data. It can be used to create interactive dashboards and reports, as well as to perform advanced analytics. With Power BI, businesses can gain a better understanding of their data and make more informed decisions.`,
        }"
      />
      <div class="grid grid-cols-3 gap-10 py-9">
        <div
          class="px-6 py-11 bg-white shadow rounded-xl content-wrapper transition-colors duration-700 ease-in-out"
          v-for="content in contents"
        >
          <div
            class="w-16 h-16 bg-primary text-white rounded-xl flex items-center justify-center icon-wrapper"
          >
            <Icon :name="content.icon" class="text-5xl" />
          </div>

          <div class="pt-10">
            <h6 class="text-baseBlack text-2xl font-bold leading-[28.80px]">
              {{ content.tile }}
            </h6>
            <p class="w-11/12 text-[#7A7474] text-base font-normal">
              {{ content.description }}
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
.content-wrapper:hover {
  @apply bg-white;
}

.content-wrapper:hover {
  @apply bg-primary;
}
.content-wrapper:hover h6 {
  @apply text-white;
}
.content-wrapper:hover p {
  @apply text-neutral-50;
}
.content-wrapper:hover .icon-wrapper {
  @apply text-primary bg-white;
}
</style>
