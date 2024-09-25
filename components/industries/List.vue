<script setup>
import {
  retails,
  oilGas,
  manufacture,
  logistics,
  foodBeverages,
  automobile,
  professional,
  phm,
  packaging,
  electronic,
  trade,
  recycling,
} from "../../lib/images";

const contents = [
  {
    id: 3,
    icon: "ph:factory",
    img: manufacture,
    title: "Manufacturing",
    description:
      "We provide manufacturing solutions that help you optimize your supply chain, improve customer experience, and drive sales.",
  },
  {
    id: 1,
    icon: "fluent:building-retail-20-regular",
    img: retails,
    title: "Retail",
    description:
      "Manage POS, Inventory, Cash and Integrate Back End Procurement and SKU with ease.",
  },
  {
    id: 4,
    icon: "ph:van",
    img: logistics,
    title: "Logistics",
    description:
      "Functionality for complex warehousing, voluminous stock movements, bin management & distribution centres.",
  },
  {
    id: 7,
    icon: "ph:asclepius",
    img: phm,
    title: "Pharmaceuticals",
    description:
      "Comprehensive solution including recipe management, quality controls costing, batch management & traceability.",
  },
  {
    id: 5,
    icon: "ph:popcorn",
    img: foodBeverages,
    title: "Food & Beverages",
    description:
      "End to end solution for procurement, processing & distribution for food & beverages manufacturing.",
  },
  {
    id: 2,
    icon: "ph:gas-pump",
    img: oilGas,
    title: "Oil & Gas",
    description:
      "We offer proven best-practice solutions for companies specializing in the import, export, distribution, and marketing of oil and gas products.",
  },
  {
    id: 8,
    icon: "ph:briefcase",
    img: professional,
    title: "Professional Services",
    description:
      "Expedite Project Management, Improve Operations Planning. Listen to Customers with CRM & Manage assets efficiently.",
  },
  {
    id: 6,
    icon: "ph:car",
    img: automobile,
    title: "Automobile component",
    description:
      "Comprehensive solution including quality management, advance production & subcontracting.",
  },
  {
    id: 9,
    icon: "lucide:package-open",
    img: packaging,
    title: "Packaging ",
    description: `Tailored tools for production planning, inventory management, and quality control. It enhances efficiency, reduces waste, and streamlines the supply chain for packaging companies.`,
  },
  {
    id: 10,
    icon: "ph:lightning",
    img: electronic,
    title: "Electronic Components ",
    description: `Handle multi-level bill of materials & assemblies for manufacturing of machines & electronic components.`,
  },
  {
    id: 11,
    icon: "tabler:packages",
    img: trade,
    title: "Trade & Distribution ",
    description: `Handle Excise Trading, Wholesale & B2B Distribution, Supply Chain, Bill on Materials & much more.`,
  },
  {
    id: 12,
    icon: "ph:recycle",
    img: recycling,
    title: "Recycling ",
    description: `This solution streamlines operations by providing tools for waste collection, sorting, processing, and recycling, helping companies improve efficiency, compliance, and sustainability efforts.
`,
  },
];
</script>

<template>
  <section class="py-16 bg-secondary">
    <div class="wrapper">
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-10 my-10">
        <div
          class="bg-white text-black p-6 rounded-xl transition-all duration-300 ease-in-out hover:scale-105 hover:bg-neutral-100"
          v-for="(content, index) in contents"
          :key="content.id"
        >
          <div class="flex items-center gap-4 pb-6">
            <div
              class="bg-primary flex items-center justify-center text-white w-12 h-12 rounded-[8px] p-2"
            >
              <Icon :name="content.icon" class="text-5xl" />
            </div>
            <h5 class="text-2xl font-bold">{{ content.title }}</h5>
          </div>
          <div class="rounded-xl overflow-hidden pb-5">
            <img
              :src="content.img"
              alt=""
              loading="lazy"
              class="w-full h-auto"
            />
          </div>
          <p>
            {{ content.description }}
          </p>
        </div>
      </div>
    </div>
  </section>
</template>

<style lang="scss" scoped></style>
