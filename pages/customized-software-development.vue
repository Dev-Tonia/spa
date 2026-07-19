<script setup lang="ts">
import { appDev, customizeDevelopment, webDev } from "~/lib/images";

interface CapabilityItem {
  title: string;
  description: string;
  icon: string;
}

interface FocusItem {
  title: string;
  description: string;
  image: string;
  bullets: string[];
}

const capabilities: CapabilityItem[] = [
  {
    title: "Production-management add-ons",
    description:
      "Purpose-built extensions that help your team handle the specific workflows your core ERP does not fully cover.",
    icon: "ph:stack",
  },
  {
    title: "ERP integrations",
    description:
      "Connections between business systems so data moves cleanly across departments without duplicated entry.",
    icon: "ph:plugs-connected",
  },
  {
    title: "Business process automation",
    description:
      "Automated steps, approvals, and handoffs that reduce manual effort and make recurring work more reliable.",
    icon: "ph:gear-fine",
  },
  {
    title: "Custom reports",
    description:
      "Reports shaped around the exact operational and management views your organization needs to see every day.",
    icon: "ph:chart-line-up",
  },
  {
    title: "Localized solutions",
    description:
      "Software adapted for local rules, business practices, and team expectations so it works naturally in your environment.",
    icon: "ph:globe-hemisphere-east",
  },
  {
    title: "Mobile and web delivery",
    description:
      "Interfaces built for the devices and users that need them most, whether in the office or in the field.",
    icon: "ph:devices",
  },
];

const focusAreas: FocusItem[] = [
  {
    title: "Mobile Applications",
    description:
      "IDM's mobile services extend the power of ERP beyond the office, enabling employees, managers, and customers to access critical business information anytime, anywhere. Our solutions integrate with leading ERP platforms to provide real-time access to sales, inventory, purchasing, finance, customer service, approvals, and management dashboards.",
    image: appDev,
    bullets: [
      "Real-time access to key business data",
      "Approvals and workflow actions on the go",
      "Customer, sales, and inventory visibility",
      "Secure access aligned to user roles",
    ],
  },
  {
    title: "Web Application Development",
    description:
      "IDM develops secure, scalable, and user-friendly web applications tailored to your business needs. From custom business portals to enterprise applications, we deliver responsive, high-performance solutions that integrate with ERP systems and third-party platforms",
    image: webDev,
    bullets: [
      "Custom portals and enterprise web tools",
      "Responsive experiences across devices",
      "ERP and third-party system integration",
      "Scalable architecture for growing teams",
    ],
  },
];

useHead({ title: "Customized Software Development | IDM" });
</script>

<template>
  <div class="bg-white text-baseBlack">
    <section class="bg-[#FAFAFA]">
      <div class="wrapper mx-auto grid max-w-7xl items-center gap-12 py-16 sm:py-20 lg:grid-cols-[1.05fr_0.95fr] lg:py-24">
        <div>
          <span class="inline-flex items-center rounded-full bg-primary/10 px-4 py-1.5 text-xs font-bold uppercase tracking-[0.2em] text-primary">
            Custom software services
          </span>
          <h1 class="mt-5 max-w-2xl font-grifter text-4xl leading-tight text-baseBlack sm:text-5xl lg:text-6xl">
            Customized software designed around the way your business actually works.
          </h1>
          <p class="mt-5 max-w-2xl text-lg leading-8 text-neutral-600">
            IDM's certified, skilled professionals design and develop customized business software
            around your organization's unique requirements. We build production-management add-ons,
            ERP integrations, mobile applications, business process automation, custom reports, and localized solutions.
          </p>

          <div class="mt-8 flex flex-wrap gap-3">
            <NuxtLink
              to="/contact"
              class="inline-flex items-center gap-2 rounded-lg bg-primary px-5 py-3 text-sm font-bold text-white transition-colors hover:bg-secondary"
            >
              Contact our expert
              <Icon name="ri:arrow-right-line" class="text-lg" />
            </NuxtLink>
            <a
              href="#focus-areas"
              class="inline-flex items-center gap-2 rounded-lg border border-neutral-300 px-5 py-3 text-sm font-semibold text-baseBlack transition-colors hover:border-primary hover:text-primary"
            >
              Explore sections
              <Icon name="ri:arrow-down-line" class="text-lg" />
            </a>
          </div>
        </div>

        <div class="relative">
          <div class="absolute -left-4 top-6 rounded-full bg-primary px-4 py-2 text-xs font-bold uppercase tracking-[0.18em] text-white shadow-lg">
            ERP + custom apps
          </div>
          <div class="absolute -bottom-5 right-4 rounded-2xl border border-neutral-200 bg-white px-4 py-3 shadow-xl">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-primary">
              Tailored delivery
            </p>
            <p class="mt-1 text-sm text-neutral-600">
              Built to match your workflows, systems, and users.
            </p>
          </div>
          <div class="overflow-hidden rounded-3xl border border-neutral-200 bg-white shadow-[0_25px_70px_-35px_rgba(0,0,0,0.35)]">
            <img :src="customizeDevelopment" alt="Customized software development" class="h-full w-full object-cover" />
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 sm:py-20">
      <div class="wrapper mx-auto max-w-7xl">
        <LazyCommonSectionTitle
          :data="{
            title: 'What we build',
            description:
              'We design software around specific business goals, whether that means connecting systems, improving visibility, or automating time-consuming work.',
          }"
        />

        <div class="mt-10 grid gap-5 sm:grid-cols-2 xl:grid-cols-3">
          <article
            v-for="item in capabilities"
            :key="item.title"
            class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm transition-transform duration-200 hover:-translate-y-1"
          >
            <span class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-primary/10 text-primary">
              <Icon :name="item.icon" class="text-xl" />
            </span>
            <h3 class="font-semibold text-lg text-baseBlack">
              {{ item.title }}
            </h3>
            <p class="mt-2 text-sm leading-6 text-neutral-600">
              {{ item.description }}
            </p>
          </article>
        </div>
      </div>
    </section>

    <section id="focus-areas" class="bg-[#FAFAFA] py-16 sm:py-20">
      <div class="wrapper mx-auto max-w-7xl">
        <LazyCommonSectionTitle
          :data="{
            title: 'Focus areas',
            description:
              'Our software development work often extends across mobile and web channels so teams, customers, and decision-makers can access the tools they need wherever they are.',
          }"
        />

        <div class="mt-10 space-y-8">
          <article
            v-for="(focus, index) in focusAreas"
            :key="focus.title"
            class="grid overflow-hidden rounded-3xl border border-neutral-200 bg-white shadow-sm lg:grid-cols-2"
          >
            <div class="p-7 sm:p-8 lg:p-10" :class="index % 2 ? 'lg:order-2' : ''">
              <p class="text-sm font-bold uppercase tracking-[0.2em] text-primary">
                {{ focus.title }}
              </p>
              <h2 class="mt-3 font-grifter text-2xl text-baseBlack sm:text-3xl">
                {{ focus.title }} built for real business use.
              </h2>
              <p class="mt-4 leading-7 text-neutral-600">
                {{ focus.description }}
              </p>

              <ul class="mt-6 grid gap-3 sm:grid-cols-2">
                <li
                  v-for="bullet in focus.bullets"
                  :key="bullet"
                  class="flex items-start gap-2 rounded-2xl bg-[#FAFAFA] p-4 text-sm leading-6 text-neutral-700"
                >
                  <Icon name="ph:check-circle-fill" class="mt-0.5 shrink-0 text-primary" />
                  <span>{{ bullet }}</span>
                </li>
              </ul>
            </div>

            <div class="bg-secondary/5 p-7 sm:p-8 lg:p-10" :class="index % 2 ? 'lg:order-1' : ''">
              <div class="overflow-hidden rounded-2xl bg-white shadow-sm">
                <img
                  :src="focus.image"
                  :alt="focus.title"
                  class="h-full w-full object-cover"
                />
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="py-16 sm:py-20">
      <div class="wrapper mx-auto max-w-7xl">
        <div class="rounded-3xl bg-primary px-8 py-10 text-center text-white shadow-lg sm:px-12 lg:px-16">
          <h2 class="font-grifter text-2xl sm:text-3xl">
            Let’s build software that fits your business, not the other way around.
          </h2>
          <p class="mx-auto mt-3 max-w-2xl text-white/80">
            Talk to IDM about custom software, mobile apps, or web applications that integrate cleanly with your operations.
          </p>
          <NuxtLink
            to="/contact"
            class="mt-7 inline-flex items-center gap-2 rounded-lg bg-white px-5 py-3 text-sm font-bold text-primary transition-colors hover:bg-baseBlack hover:text-white"
          >
            Contact our expert
            <Icon name="ri:arrow-right-line" class="text-lg" />
          </NuxtLink>
        </div>
      </div>
    </section>

    <LazyCommonContact />
  </div>
</template>
