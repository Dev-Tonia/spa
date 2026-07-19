<script setup lang="ts">
import { eInvoice } from "~/lib/images";

interface StatItem {
  value: string;
  label: string;
}

interface BenefitItem {
  title: string;
  description: string;
  icon: string;
}

interface StepItem {
  title: string;
  description: string;
}

const stats: StatItem[] = [
  { value: "Real-time", label: "invoice reporting" },
  { value: "IRN + QR", label: "compliance ready" },
  { value: "Less", label: "manual rework" },
];

const benefits: BenefitItem[] = [
  {
    title: "Real-time reporting",
    description:
      "Invoices move into the government system immediately, keeping your records current from the moment a sale is made.",
    icon: "ph:clock",
  },
  {
    title: "Reduced errors and fraud",
    description:
      "Validation at the point of issue helps prevent duplicate billing, manual mistakes, and unnecessary re-entry.",
    icon: "ph:shield-check",
  },
  {
    title: "Faster processing",
    description:
      "Registration happens in seconds, so invoices can progress from issue to approval without delays in the workflow.",
    icon: "ph:lightning",
  },
  {
    title: "Improved compliance",
    description:
      "Every invoice follows the required format and registration process, helping your team stay audit ready.",
    icon: "ph:check-circle",
  },
  {
    title: "IRN number",
    description:
      "Each registered invoice receives a unique Invoice Reference Number for easy tracking and verification.",
    icon: "ph:hash",
  },
  {
    title: "Signed QR code",
    description:
      "A signed QR code is embedded in the invoice so authenticity can be checked instantly by recipients.",
    icon: "ph:qr-code",
  },
];

const steps: StepItem[] = [
  {
    title: "Generate the invoice",
    description:
      "Your ERP or billing system creates the invoice in the normal way, without disrupting existing team workflows.",
  },
  {
    title: "Report to the portal",
    description:
      "Invoice data is transmitted electronically to the government's invoice registration portal for validation.",
  },
  {
    title: "Receive IRN and QR",
    description:
      "The invoice is registered and returned with its unique reference number and signed QR code.",
  },
  {
    title: "Share and file",
    description:
      "The verified invoice is sent to the customer and stored for filing, audit, and reporting with less manual effort.",
  },
];

useHead({ title: "E-Invoicing | IDM" });
</script>

<template>
  <div class="bg-white text-baseBlack">
    <section class="bg-[#FAFAFA]">
      <div class="wrapper mx-auto grid max-w-7xl items-center gap-12 py-16 sm:py-20 lg:grid-cols-[1.05fr_0.95fr] lg:py-24">
        <div>
          <span class="inline-flex items-center rounded-full bg-primary/10 px-4 py-1.5 text-xs font-bold uppercase tracking-[0.2em] text-primary">
            Compliance services
          </span>
          <h1 class="mt-5 max-w-2xl font-grifter text-4xl leading-tight text-baseBlack sm:text-5xl lg:text-6xl">
            E-invoicing that fits the way your business already works.
          </h1>
          <p class="mt-5 max-w-2xl text-lg leading-8 text-neutral-600">
            IDM helps businesses implement e-invoicing in a way that supports real-time reporting,
            reduces manual processing, and keeps invoice compliance aligned with government requirements.
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
              href="#benefits"
              class="inline-flex items-center gap-2 rounded-lg border border-neutral-300 px-5 py-3 text-sm font-semibold text-baseBlack transition-colors hover:border-primary hover:text-primary"
            >
              Explore benefits
              <Icon name="ri:arrow-down-line" class="text-lg" />
            </a>
          </div>

          <div class="mt-10 grid gap-4 sm:grid-cols-3">
            <div
              v-for="stat in stats"
              :key="stat.label"
              class="rounded-2xl border border-neutral-200 bg-white p-4 shadow-sm"
            >
              <p class="font-grifter text-2xl text-baseBlack">{{ stat.value }}</p>
              <p class="mt-1 text-xs uppercase tracking-[0.16em] text-neutral-500">
                {{ stat.label }}
              </p>
            </div>
          </div>
        </div>

        <div class="relative">
          <div class="absolute -left-4 top-6 rounded-full bg-primary px-4 py-2 text-xs font-bold uppercase tracking-[0.18em] text-white shadow-lg">
            IRN and QR ready
          </div>
          <div class="absolute -bottom-5 right-4 rounded-2xl border border-neutral-200 bg-white px-4 py-3 shadow-xl">
            <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-primary">
              Compliance support
            </p>
            <p class="mt-1 text-sm text-neutral-600">
              Structured for reporting, verification, and filing.
            </p>
          </div>
          <div class="overflow-hidden rounded-3xl border border-neutral-200 bg-white shadow-[0_25px_70px_-35px_rgba(0,0,0,0.35)]">
            <img :src="eInvoice" alt="E-invoicing overview" class="h-full w-full object-cover" />
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 sm:py-20">
      <div class="wrapper mx-auto max-w-7xl">
        <LazyCommonSectionTitle
          :data="{
            title: 'What e-invoicing means for your team',
            description:
              'An e-invoice is generated and exchanged electronically through the government portal, so reporting happens at the point of sale instead of later in the accounting cycle.',
          }"
        />

        <div class="mt-10 grid gap-6 lg:grid-cols-2">
          <article class="rounded-3xl border border-neutral-200 bg-[#FAFAFA] p-7 shadow-sm">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-primary">
              Built for operations
            </p>
            <h2 class="mt-3 font-grifter text-2xl text-baseBlack sm:text-3xl">
              Keep invoicing fast without losing control.
            </h2>
            <p class="mt-4 leading-7 text-neutral-600">
              The goal is not to change how your team sells, bills, or serves customers.
              It is to make sure the invoice is validated, registered, and ready for exchange
              as part of that same workflow.
            </p>
          </article>

          <div class="grid gap-4 sm:grid-cols-2">
            <article
              class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm"
            >
              <Icon
                name="ph:receipt"
                class="text-3xl text-primary"
              />
              <h3 class="mt-4 font-semibold text-lg text-baseBlack">
                Digital invoice exchange
              </h3>
              <p class="mt-2 text-sm leading-6 text-neutral-600">
                Invoices are created and transmitted electronically, with less paper handling and fewer delays.
              </p>
            </article>

            <article
              class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm"
            >
              <Icon
                name="ph:shield-check"
                class="text-3xl text-primary"
              />
              <h3 class="mt-4 font-semibold text-lg text-baseBlack">
                Audit-ready records
              </h3>
              <p class="mt-2 text-sm leading-6 text-neutral-600">
                Every registered invoice is easier to track, reconcile, and defend during reviews.
              </p>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section id="benefits" class="bg-[#FAFAFA] py-16 sm:py-20">
      <div class="wrapper mx-auto max-w-7xl">
        <LazyCommonSectionTitle
          :data="{
            title: 'Benefits of e-invoicing',
            description:
              'A single change in how invoices are issued can improve compliance, reduce manual effort, and make financial operations easier to trust.',
          }"
        />

        <div class="mt-10 grid gap-5 sm:grid-cols-2 xl:grid-cols-3">
          <article
            v-for="benefit in benefits"
            :key="benefit.title"
            class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm transition-transform duration-200 hover:-translate-y-1"
          >
            <span class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-primary/10 text-primary">
              <Icon :name="benefit.icon" class="text-xl" />
            </span>
            <h3 class="font-semibold text-lg text-baseBlack">
              {{ benefit.title }}
            </h3>
            <p class="mt-2 text-sm leading-6 text-neutral-600">
              {{ benefit.description }}
            </p>
          </article>
        </div>
      </div>
    </section>

    <section class="py-16 sm:py-20">
      <div class="wrapper mx-auto max-w-7xl">
        <div class="grid gap-10 lg:grid-cols-[0.9fr_1.1fr]">
          <div>
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-primary">
              How it works
            </p>
            <h2 class="mt-3 font-grifter text-3xl text-baseBlack sm:text-4xl">
              From invoice creation to compliant exchange.
            </h2>
            <p class="mt-4 max-w-xl leading-7 text-neutral-600">
              The process is designed to keep work moving while the technical steps
              happen in the background.
            </p>
          </div>

          <div class="space-y-4">
            <article
              v-for="(step, index) in steps"
              :key="step.title"
              class="flex gap-4 rounded-2xl border border-neutral-200 bg-white p-5 shadow-sm"
            >
              <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white">
                {{ index + 1 }}
              </div>
              <div>
                <h3 class="font-semibold text-base text-baseBlack">
                  {{ step.title }}
                </h3>
                <p class="mt-1 text-sm leading-6 text-neutral-600">
                  {{ step.description }}
                </p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="border-t border-neutral-200 bg-[#FAFAFA] py-16 sm:py-20">
      <div class="wrapper mx-auto max-w-7xl">
        <div class="rounded-3xl bg-primary px-8 py-10 text-center text-white shadow-lg sm:px-12 lg:px-16">
          <h2 class="font-grifter text-2xl sm:text-3xl">
            Ready to bring your invoicing process in line with compliance requirements?
          </h2>
          <p class="mx-auto mt-3 max-w-2xl text-white/80">
            Let us help you implement e-invoicing in a way that keeps your team productive and your records aligned.
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
