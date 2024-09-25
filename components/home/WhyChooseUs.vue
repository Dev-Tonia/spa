<script setup>
import { whyChooseImg } from "../../lib/images";

const contents = [
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
              v-for="(content, index) in contents"
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
    </div>
  </section>
</template>

<style scoped></style>
