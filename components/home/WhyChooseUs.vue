<script setup>
import { eInvoice } from "~/lib/images";

const contents = [
  {
    id: 1,
    title: "25+ Years of Experience",
    description:
      "Decades of practical implementation experience across business technology, ERP, education, and customer care solutions.",
    icon: "solar:medal-ribbons-star-linear",
  },
  {
    id: 2,
    title: "Trusted by Leading Organizations",
    description:
      "Organizations across key industries rely on IDM to improve operations, strengthen processes, and support growth.",
    icon: "ph:buildings-light",
  },
  {
    id: 3,
    title: "Certified ERP Consultants",
    description:
      "Our consultants bring certified expertise and deep product knowledge to every ERP implementation and support engagement.",
    icon: "fluent:certificate-24-regular",
  },
  {
    id: 4,
    title: "Industry-Specific Solutions",
    description:
      "We tailor solutions around the realities of each sector, from manufacturing and retail to education and professional services.",
    icon: "carbon:industry",
  },
  {
    id: 5,
    title: "Customer-First Approach",
    description:
      "Every engagement is shaped around business goals, user needs, and measurable outcomes for the organizations we serve.",
    icon: "fluent:people-community-24-regular",
  },
  {
    id: 6,
    title: "End-to-End Support",
    description:
      "From consultation and implementation to training, optimization, and ongoing support, IDM stays with you across the journey.",
    icon: "carbon:flow",
  },
  {
    id: 7,
    title: "Local Presence Across Africa",
    description:
      "Our African footprint helps us deliver responsive service with a strong understanding of local business environments.",
    icon: "gis:africa-o",
  },
  {
    id: 8,
    title: "24/7 Technical Support",
    description:
      "Our technical support helps teams keep essential systems running and resolve issues quickly when they arise.",
    icon: "fluent:person-support-24-regular",
  },
];

const service = {
  title: "E-Invoicing",
  image: eInvoice,
  description:
    "Digital invoicing and compliance support that helps businesses report transactions in real time and stay aligned with government requirements.",
  icon: "ph:receipt",
  featureTitle: "Benefits of e-invoicing",
  features: [
    "Real-time reporting",
    "Reduced errors and fraud",
    "Faster processing",
    "Improved compliance",
    "IRN number",
    "QR code",
  ],
  to: "/e-invoicing",
};
</script>

<template>
  <section class="bg-[#FAFAFA] py-12">
    <div class="wrapper">
      <div class="max-w-5xl mx-auto">
        <OtherServicesServiceCard :service="service" :index="2" />
      </div>

      <div class="text-center max-w-3xl mx-auto mt-10">
        <h3
          class="font-opensans font-bold text-3xl sm:text-4xl lg:text-5xl leading-tight"
        >
          Why Choose
          <span class="text-primary"> IDM </span>
        </h3>
        <p class="text-lg md:text-xl text-neutral-600 py-3">
          IDM combines proven experience, certified expertise, and
          customer-focused support to help African enterprises run stronger
          business processes.
        </p>
      </div>

      <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4 mt-8">
        <div
          class="bg-white border border-[#E7EBEF] rounded-[8px] p-6 transition-colors duration-700 ease-in-out content-wrapper"
          v-for="content in contents"
          :key="content.id"
        >
          <div
            class="w-14 h-14 bg-primary text-white rounded-xl flex items-center justify-center icon-wrapper"
          >
            <Icon :name="content.icon" class="text-4xl" />
          </div>

          <div class="pt-6">
            <h5 class="font-opensans text-baseBlack text-xl font-bold leading-[26px]">
              {{ content.title }}
            </h5>
            <p class="text-[#7A7474] text-base pt-3">
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
  @apply bg-primary;
}

.content-wrapper:hover h5 {
  @apply text-white;
}

.content-wrapper:hover p {
  @apply text-neutral-50;
}

.content-wrapper:hover .icon-wrapper {
  @apply text-primary bg-white;
}
</style>
