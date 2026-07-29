<script setup>
import { idmSap4 } from "../../lib/images";

const principles = [
  {
    title: "Innovation with purpose",
    description:
      "We use technology to solve real operational problems, not just to add more tools.",
    icon: "carbon:idea",
  },
  {
    title: "Reliable delivery",
    description:
      "Our work is built around stable systems, clear support, and practical implementation.",
    icon: "carbon:delivery",
  },
  {
    title: "Human-centered training",
    description:
      "We help teams and students grow their confidence with clear, accessible learning.",
    icon: "fluent:people-24-regular",
  },
];
</script>

<template>
  <section class="bg-white py-16 md:py-20">
    <div class="wrapper">
      <div class="grid gap-6 lg:grid-cols-2 mt-10">
        <div
          class="rounded-[28px] border border-[#ECECEC] bg-[#FAFAFA] p-8 shadow-[0_16px_50px_rgba(26,26,26,0.05)]"
        >
          <p
            class="font-grifter text-sm font-bold uppercase tracking-[0.24em] text-primary"
          >
            Our Mission
          </p>
          <h3
            class="mt-4 font-grifter text-3xl font-bold leading-tight text-baseBlack"
          >
            Perfect business processes and transform education across Africa.
          </h3>
          <p class="mt-4 text-lg leading-8 text-[#655F5F]">
            Through ERP, digital transformation, customer care, AI, and smart
            learning solutions, we help organizations improve operational
            excellence, elevate customer experiences, and prepare learners and
            teams for a globally competitive future.
          </p>
        </div>

        <div
          class="rounded-[28px] border border-[#ECECEC] bg-baseBlack p-8 text-white shadow-[0_16px_50px_rgba(26,26,26,0.12)]"
        >
          <p
            class="font-grifter text-sm font-bold uppercase tracking-[0.24em] text-white/70"
          >
            Our Vision
          </p>
          <h3 class="mt-4 font-grifter text-3xl font-bold leading-tight">
            Africa's most trusted technology partner.
          </h3>
          <p class="mt-4 text-lg leading-8 text-white/85">
            We want to be recognized for transforming businesses and education
            through innovation, strong partnerships, and digital excellence.
          </p>
          <div class="mt-6 rounded-2xl bg-white/10 p-5">
            <p class="text-sm uppercase tracking-[0.22em] text-white/60">
              Our focus
            </p>
            <p class="mt-2 text-base leading-7 text-white/90">
              Build solutions that are easy to adopt, reliable in production,
              and meaningful to the people who use them every day.
            </p>
          </div>
        </div>
      </div>

      <div class="mt-14 grid items-center gap-10 lg:grid-cols-[0.95fr_1.05fr]">
        <div
          class="overflow-hidden rounded-[32px] border border-[#ECECEC] bg-[#FAFAFA] p-3 shadow-[0_18px_55px_rgba(26,26,26,0.08)]"
        >
          <img
            :src="idmSap4"
            alt="IDM vision and technology impact"
            class="h-full w-full rounded-[24px] object-cover"
          />
        </div>

        <div>
          <p
            class="font-grifter text-sm font-bold uppercase tracking-[0.24em] text-primary"
          >
            Why clients partner with IDM
          </p>
          <h3
            class="mt-4 font-grifter text-3xl font-bold text-baseBlack sm:text-4xl"
          >
            A practical partner for long-term growth.
          </h3>
          <div class="mt-6 space-y-5">
            <div class="flex gap-4">
              <span class="mt-2 h-3 w-3 rounded-full bg-primary"></span>
              <p class="text-lg leading-8 text-[#655F5F]">
                We stay close to the work from planning through implementation,
                so clients get solutions that fit their workflow.
              </p>
            </div>
            <div class="flex gap-4">
              <span class="mt-2 h-3 w-3 rounded-full bg-primary"></span>
              <p class="text-lg leading-8 text-[#655F5F]">
                Our teams focus on clarity, training, and support to make change
                easier for end users and administrators.
              </p>
            </div>
            <div class="flex gap-4">
              <span class="mt-2 h-3 w-3 rounded-full bg-primary"></span>
              <p class="text-lg leading-8 text-[#655F5F]">
                We design for scale, helping organizations grow without losing
                control of process, visibility, or service quality.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style lang="scss" scoped></style>
