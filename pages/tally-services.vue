<template>
  <div class="bg-white">
    <section class="bg-secondary/5">
      <div
        class="mx-auto grid max-w-6xl items-center gap-10 px-4 py-16 sm:py-20 lg:grid-cols-[1.05fr_0.95fr] lg:py-24"
      >
        <div>
          <span
            class="inline-flex items-center rounded-full bg-primary/10 px-4 py-1.5 text-xs font-bold uppercase tracking-[0.2em] text-primary"
          >
            Tally & AMC
          </span>
          <h1
            class="mt-5 font-grifter text-3xl font-bold text-baseBlack sm:text-4xl lg:text-5xl"
          >
            Tally services that keep finance operations reliable and growing.
          </h1>
          <p class="mt-5 max-w-2xl leading-7 text-neutral-600">
            IDM delivers practical Tally implementation, integration, and annual
            maintenance support so your accounting workflows stay accurate,
            connected, and easy to manage as your business evolves.
          </p>
          <div class="mt-7 flex flex-wrap gap-3">
            <NuxtLink
              to="/contact"
              class="inline-flex items-center gap-2 rounded-lg bg-primary px-5 py-2.5 text-sm font-bold text-white transition-colors hover:bg-secondary"
            >
              Talk to our team
              <Icon name="ri:arrow-right-line" class="text-lg" />
            </NuxtLink>
            <a
              href="#services"
              class="inline-flex items-center gap-2 rounded-lg border border-neutral-300 px-5 py-2.5 text-sm font-semibold text-baseBlack transition-colors hover:border-primary hover:text-primary"
            >
              Explore services
              <Icon name="ri:arrow-down-line" class="text-lg" />
            </a>
          </div>
        </div>

        <OtherServicesImagePlaceholder
          class="h-72 lg:h-96"
          label="Tally Services"
          icon="ph:calculator-fill"
        />
      </div>
    </section>

    <section class="mx-auto max-w-6xl px-4 py-16 sm:py-20">
      <div class="grid gap-8 lg:grid-cols-[1.05fr_0.95fr]">
        <div class="rounded-3xl border border-neutral-200 bg-neutral-50 p-8 shadow-sm">
          <p class="text-sm font-bold uppercase tracking-[0.2em] text-primary">
            Why IDM
          </p>
          <h2 class="mt-3 font-grifter text-2xl font-bold text-baseBlack sm:text-3xl">
            Tally that fits the rhythm of your business.
          </h2>
          <p class="mt-4 leading-7 text-neutral-600">
            Rather than treating Tally as a standalone accounting tool, we
            connect it with the systems your business already depends on so
            financial records stay consistent and every team works from the same
            numbers. Our AMC support keeps that setup running smoothly long after
            go-live.
          </p>
        </div>

        <div class="space-y-4">
          <div
            v-for="item in highlights"
            :key="item.title"
            class="rounded-2xl border border-neutral-200 bg-white p-5 shadow-sm"
          >
            <div class="flex items-start gap-3">
              <span
                class="mt-0.5 flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-primary/10 text-primary"
              >
                <Icon :name="item.icon" class="text-xl" />
              </span>
              <div>
                <h3 class="font-semibold text-baseBlack">{{ item.title }}</h3>
                <p class="mt-1 text-sm leading-6 text-neutral-600">
                  {{ item.description }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="mx-auto max-w-6xl px-4 pb-16 sm:pb-20">
      <div class="mb-10 text-center">
        <p class="text-sm font-bold uppercase tracking-[0.2em] text-primary">
          Core services
        </p>
        <h2 class="mt-3 font-grifter text-2xl font-bold text-baseBlack sm:text-3xl">
          Implementation, integration, and support built around your workflow.
        </h2>
        <p class="mx-auto mt-3 max-w-2xl text-neutral-600">
          Practical delivery and ongoing support that helps your finance team
          work faster, with less rework and more confidence.
        </p>
      </div>

      <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
        <article
          v-for="service in integrationServices"
          :key="service.title"
          class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm transition-transform duration-200 hover:-translate-y-1"
        >
          <span
            class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-primary text-lg text-white"
          >
            <Icon :name="service.icon" class="text-xl" />
          </span>
          <h3 class="font-bold text-baseBlack">{{ service.title }}</h3>
          <p class="mt-2 text-sm leading-6 text-neutral-600">
            {{ service.description }}
          </p>
        </article>
      </div>
    </section>

    <section class="bg-primary/5">
      <div class="mx-auto max-w-6xl px-4 py-16 sm:py-20">
        <div class="rounded-3xl bg-primary px-8 py-10 text-center text-white shadow-lg sm:px-12 lg:px-16">
          <h2 class="font-grifter text-2xl font-bold sm:text-3xl">
            Ready to make Tally work harder for your business?
          </h2>
          <p class="mx-auto mt-3 max-w-2xl text-white/80">
            Let’s discuss how IDM can support your implementation, integration,
            and AMC needs with a reliable, business-focused approach.
          </p>
          <NuxtLink
            to="/contact"
            class="mt-7 inline-flex items-center gap-2 rounded-lg bg-white px-5 py-2.5 text-sm font-bold text-primary transition-colors hover:bg-baseBlack hover:text-white"
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

<script setup lang="ts">
interface IntegrationService {
  title: string;
  description: string;
  icon: string;
}

interface HighlightItem {
  title: string;
  description: string;
  icon: string;
}

const integrationServices: IntegrationService[] = [
  {
    title: "Timely implementation of services",
    icon: "ph:rocket-launch-fill",
    description:
      "Structured rollout plans that get Tally live and operational without disrupting the accounting work already in progress.",
  },
  {
    title: "Data consolidation for centralized reporting",
    icon: "ph:database-fill",
    description:
      "Bring financial data from multiple locations, branches, or systems into one consistent set of records for reporting.",
  },
  {
    title: "Integration with third-party software",
    icon: "ph:plugs-connected-fill",
    description:
      "Connect Tally with the other business software you already use, so data moves automatically instead of being re-entered.",
  },
  {
    title: "Business process automation",
    icon: "ph:gear-fine-fill",
    description:
      "Automate repetitive accounting tasks and approvals to reduce manual entry and cut down on processing errors.",
  },
  {
    title: "Real-time critical business insights",
    icon: "ph:chart-line-up-fill",
    description:
      "Get an accurate, up-to-date view of financial performance instead of waiting on end-of-month reconciliation.",
  },
  {
    title: "Easy data import capabilities",
    icon: "ph:upload-simple-fill",
    description:
      "Bring in existing records and transaction history from spreadsheets or legacy systems without a manual re-entry project.",
  },
];

const highlights: HighlightItem[] = [
  {
    title: "Seamless support after deployment",
    description:
      "Our AMC services help you stay productive with dependable support, upgrades, and issue resolution whenever your team needs it.",
    icon: "ph:lifebuoy-fill",
  },
  {
    title: "Accurate numbers, less manual effort",
    description:
      "We help you automate routine accounting work so your team can focus on decisions instead of repetitive data entry.",
    icon: "ph:check-circle-fill",
  },
  {
    title: "Scalable for changing operations",
    description:
      "Whether your business is expanding, changing systems, or adding branches, Tally can be adapted to support your growth.",
    icon: "ph:trend-up-fill",
  },
];

useHead({ title: "Tally Services | IDM" });
</script>
