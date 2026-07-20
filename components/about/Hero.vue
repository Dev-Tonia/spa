<script setup>
import { image5, idmSap5 } from "../../lib/images";

const highlights = [
  { label: "Established", value: "Since 1981" },
  { label: "Core focus", value: "ERP & CRM" },
  { label: "Education", value: "School solutions" },
  { label: "Partnering with", value: "SAP" },
];

const capabilities = [
  "Business process improvement",
  "ERP implementation and support",
  "CRM and SCM systems",
  "Technology training for schools",
];
</script>

<template>
  <section class="relative overflow-hidden bg-[#FAFAFA] py-16 md:py-24">
    <div class="absolute inset-0 pointer-events-none">
      <div
        class="absolute -top-24 right-0 h-72 w-72 rounded-full bg-primary/10 blur-3xl"
      ></div>
      <div
        class="absolute bottom-0 left-0 h-80 w-80 rounded-full bg-[#FFE5E5] blur-3xl"
      ></div>
    </div>

    <div class="wrapper relative">
      <div class="grid items-center gap-12 lg:grid-cols-[1.05fr_0.95fr]">
        <div>
          <span
            class="inline-flex items-center rounded-full bg-primary/10 px-4 py-2 text-sm font-semibold text-primary"
          >
            About IDM
          </span>

          <h1
            class="font-grifter mt-5 text-4xl font-bold leading-tight text-baseBlack sm:text-5xl lg:text-6xl"
          >
            Driving business success through innovative IT solutions.
          </h1>

          <p class="mt-6 max-w-2xl text-lg leading-8 text-[#655F5F] md:text-xl">
            International Data Management Services Limited (IDM) was
            incorporated in Nigeria in 1981 and is affiliated with Comcraft
            Services Limited, United Kingdom. We help growing enterprises and
            learning institutions simplify operations through SAP-based ERP,
            SCM, CRM, and technology training solutions.
          </p>

          <div class="mt-8 flex flex-wrap gap-4">
            <NuxtLink
              to="/all-solutions"
              class="rounded-[10px] bg-primary px-5 py-3 text-sm font-bold text-white transition-transform duration-300 hover:-translate-y-0.5"
            >
              Explore Solutions
            </NuxtLink>
            <NuxtLink
              to="/contact"
              class="rounded-[10px] border border-[#D8D8D8] bg-white px-5 py-3 text-sm font-bold text-baseBlack transition-colors duration-300 hover:border-primary hover:text-primary"
            >
              Talk to Our Team
            </NuxtLink>
          </div>

          <div class="mt-10 grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
            <div
              v-for="item in highlights"
              :key="item.label"
              class="rounded-2xl border border-white/70 bg-white/90 p-4 shadow-[0_12px_40px_rgba(26,26,26,0.06)] backdrop-blur"
            >
              <p
                class="text-xs font-semibold uppercase tracking-[0.22em] text-[#7A7474]"
              >
                {{ item.label }}
              </p>
              <p class="mt-2 text-base font-bold text-baseBlack">
                {{ item.value }}
              </p>
            </div>
          </div>
        </div>

        <div class="relative">
          <div
            class="absolute -left-4 top-8 hidden rounded-2xl bg-baseBlack px-5 py-4 text-white shadow-2xl lg:block"
          >
            <p class="text-xs uppercase tracking-[0.28em] text-white/70">
              Trusted focus
            </p>
            <p class="mt-2 max-w-[170px] text-lg font-bold leading-6">
              SAP, ERP, CRM, and education technology
            </p>
          </div>

          <div class="grid gap-4 sm:grid-cols-[1.15fr_0.85fr]">
            <div
              class="overflow-hidden rounded-[32px] border border-white/60 bg-white p-3 shadow-[0_20px_60px_rgba(26,26,26,0.12)]"
            >
              <img
                :src="image5"
                alt="IDM team and technology solutions"
                class="h-full w-full rounded-[24px] object-cover"
              />
            </div>

            <div class="flex flex-col gap-4">
              <div
                class="overflow-hidden rounded-[28px] border border-white/70 bg-white p-3 shadow-[0_18px_50px_rgba(26,26,26,0.1)]"
              >
                <img
                  :src="idmSap5"
                  alt="IDM business technology solutions"
                  class="h-60 w-full rounded-[20px] object-cover object-top"
                />
              </div>

              <div
                class="rounded-[28px] bg-baseBlack p-6 text-white shadow-[0_18px_50px_rgba(26,26,26,0.18)]"
              >
                <p class="text-sm uppercase tracking-[0.24em] text-white/70">
                  What we deliver
                </p>
                <ul class="mt-4 space-y-3 text-sm leading-6 text-white/90">
                  <li
                    v-for="item in capabilities"
                    :key="item"
                    class="flex gap-3"
                  >
                    <span class="mt-2 h-2 w-2 rounded-full bg-primary"></span>
                    <span>{{ item }}</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style lang="scss" scoped></style>
