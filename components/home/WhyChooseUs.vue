<script setup>
import { whyChooseImg } from "../../lib/images";

const sapContents = [
  {
    id: 1,
    title: "Improved Efficiency",
    description:
      "Our SAP solutions help you optimize resource allocation, reduce waste, and streamline processes, leading to significant cost savings over time.",
    icon: "carbon:improve-relevance",
  },
  {
    id: 2,
    title: "Expert support",
    description:
      "Our SAP consultants are certified and regularly undergo training to stay updated with the latest SAP advancements.",
    icon: "fluent:person-support-24-regular",
  },
  {
    id: 3,
    title: "Proven result",
    description:
      "Our SAP services are distinguished by a track record of success, measurable impact, and client satisfaction.",
    icon: "carbon:result-old",
  },
];

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
</script>

<template>
  <section class="bg-[#FAFAFA] py-16">
    <div class="wrapper">
      <div class="flex gap-x-10 lg:gap-x-16 justify-center items-center">
        <div class="w-7/12 hidden md:block">
          <img :src="whyChooseImg" alt="" class="rounded-xl h-auto w-full" />
        </div>
        <div class="md:w-5/12">
          <div>
            <h3 class="font-grifter font-bold text-4xl">
              Why you should choose our
              <span class="text-primary"> SAP services </span>
            </h3>
            <p class="text-xl text-neutral-600">
              SAP services offer a reliable, powerful, and forward-thinking
              platform to help you achieve your business objectives.
            </p>
          </div>
          <div>
            <div
              class="flex space-x-4 my-10"
              v-for="(content, index) in sapContents"
              :key="index"
            >
              <div>
                <div
                  class="h-14 w-14 rounded-full bg-primary/10 flex items-center justify-center"
                >
                  <Icon :name="content.icon" class="text-primary text-2xl" />
                </div>
              </div>
              <div>
                <h5 class="font-bold text-2xl text-[#221F1F]">
                  {{ content.title }}
                </h5>
                <p class="text-neutral-700">
                  {{ content.description }}
                </p>
              </div>
            </div>
          </div>
          <Button
            class="bg-primary text-white hover:bg-primary px-3 cursor-pointer"
            @click="navigateTo('/about')"
            >Learn More
          </Button>
        </div>
      </div>

      <div class="text-center max-w-3xl mx-auto mt-16">
        <h3
          class="font-grifter font-bold text-3xl sm:text-4xl lg:text-5xl leading-tight"
        >
          Why Choose
          <span class="text-primary"> IDM </span>
        </h3>
        <p class="text-lg md:text-xl text-neutral-600 py-4">
          IDM combines proven experience, certified expertise, and
          customer-focused support to help African enterprises run stronger
          business processes.
        </p>
      </div>

      <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4 mt-12">
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

          <div class="pt-8">
            <h5 class="text-baseBlack text-xl font-bold leading-[26px]">
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
