<template>
  <div>
    <!-- Hero -->
    <section class="bg-secondary/5">
      <div
        class="mx-auto grid max-w-6xl items-center gap-10 px-4 py-16 sm:py-20 lg:grid-cols-2 lg:py-24"
      >
        <div>
          <span
            class="inline-flex items-center rounded-full bg-primary/10 px-4 py-1.5 text-xs font-bold uppercase tracking-wider text-primary"
          >
            HR Management
          </span>
          <h1
            class="mt-5 font-grifter text-3xl font-bold text-baseBlack sm:text-4xl lg:text-5xl"
          >
            IDM HR
          </h1>
          <p class="mt-5 leading-7 text-neutral-600">
            A modern human resource management solution that streamlines the
            complete employee lifecycle — from recruitment and onboarding to
            attendance, payroll, leave management, performance appraisal, and
            employee self-service. Its intuitive cloud-based platform helps
            organizations improve productivity, ensure compliance, and make
            data-driven HR decisions.
          </p>
          <NuxtLink
            to="/contact"
            class="mt-7 inline-flex w-fit items-center gap-2 rounded-lg bg-primary px-5 py-2.5 text-sm font-bold text-white transition-colors hover:bg-secondary"
          >
            Talk to our team
            <Icon name="ri:arrow-right-line" class="text-lg" />
          </NuxtLink>
        </div>

        <div class="">
          <div
            class="h-[400px] w-full overflow-hidden rounded-3xl bg-white shadow-lg sm:h-[500px] sm:w-[500px] lg:h-[600px] lg:w-[600px]"
          >
            <img
              :src="idmHrBg"
              alt="IDM HR"
              class="h-full w-full object-cover"
            />
          </div>
        </div>

        <!-- <OtherServicesImagePlaceholder
          img-src="idmHrBg"
          class="h-72 lg:h-96"
          label="IDM HR"
        /> -->
      </div>
    </section>

    <!-- Overview -->
    <section class="mx-auto max-w-4xl px-4 py-14 text-center sm:py-16">
      <h2 class="font-grifter text-2xl font-bold text-baseBlack sm:text-3xl">
        One platform for the entire employee lifecycle
      </h2>
      <p class="mt-4 leading-7 text-neutral-600">
        Instead of managing recruitment, attendance, payroll, and appraisals
        across separate spreadsheets and systems, IDM HR brings every stage of
        the employee journey into a single, cloud-based platform. HR teams get
        one accurate source of truth, employees get self-service access to their
        own records, and leadership gets the data needed to make faster,
        better-informed people decisions.
      </p>
    </section>

    <!-- Features -->
    <section id="features" class="bg-secondary text-white py-16">
      <div class="wrapper">
        <h2 class="font-grifter text-2xl font-bold text-white sm:text-3xl">
          Why you should choose IDM HR
        </h2>
        <p class="py-4 text-lg md:text-xl text-white/80">
          A modern HR platform that unifies people, payroll, leave, and
          performance workflows in one secure cloud system.
        </p>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 my-16">
          <div
            v-for="(feature, index) in features"
            :key="feature.title"
            class="rounded-3xl bg-white/10 p-6 shadow-lg backdrop-blur"
          >
            <div
              class="mb-6 flex h-14 w-14 items-center justify-center rounded-2xl bg-primary text-white"
            >
              <Icon :name="feature.icon" class="text-2xl" />
            </div>
            <h3 class="font-bold text-xl text-white">{{ feature.title }}</h3>
            <ul class="mt-4 list-disc space-y-2 pl-5 text-sm text-white/80">
              <li v-for="item in feature.features" :key="item">
                {{ item }}
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA banner -->
    <section class="bg-primary">
      <div
        class="mx-auto flex max-w-5xl flex-col items-center gap-6 px-4 py-14 text-center sm:py-16"
      >
        <h2 class="font-grifter text-2xl font-bold text-white sm:text-3xl">
          Bring your HR operations into one platform.
        </h2>
        <p class="max-w-xl text-white/80">
          Learn how IDM can help your business scale the final piece in the
          puzzle of uninterrupted growth.
        </p>
        <NuxtLink
          to="/contact"
          class="inline-flex w-fit items-center gap-2 rounded-lg bg-white px-5 py-2.5 text-sm font-bold text-primary transition-colors hover:bg-baseBlack hover:text-white"
        >
          Contact our expert
          <Icon name="ri:arrow-right-line" class="text-lg" />
        </NuxtLink>
      </div>
    </section>
  </div>
</template>

<script setup lang="ts">
import OtherServicesImagePlaceholder from "@/components/other-services/ImagePlaceholder.vue";
import { idmHrBg } from "@/lib/images";

interface HrFeature {
  title: string;
  description: string;
  icon: string;
  features?: string[];
  featureTitle?: string;
}

const features: HrFeature[] = [
  {
    title: "Recruitment & Onboarding",
    icon: "ph:user-plus-fill",
    description:
      "Post openings, track candidates through every stage, and get new hires productive faster with structured onboarding checklists and document collection.",
    featureTitle: "Includes",
    features: [
      "Candidate pipeline tracking",
      "Digital offer letters",
      "Onboarding checklists",
      "Document collection & storage",
    ],
  },
  {
    title: "Attendance Management",
    icon: "ph:clock-fill",
    description:
      "Capture clock-ins, shifts, and time-off in real time, with automatic syncing into payroll so hours worked are always accurate.",
    featureTitle: "Includes",
    features: [
      "Real-time clock-in/out",
      "Shift & roster management",
      "Overtime tracking",
      "Automatic payroll sync",
    ],
  },
  {
    title: "Payroll",
    icon: "ph:money-fill",
    description:
      "Run accurate, compliant payroll every cycle, with automatic calculations for deductions, taxes, and benefits built on attendance data already in the system.",
    featureTitle: "Includes",
    features: [
      "Automated salary calculations",
      "Tax & statutory deductions",
      "Payslip generation",
      "Multi-bank disbursement",
    ],
  },
  {
    title: "Leave Management",
    icon: "ph:calendar-x-fill",
    description:
      "Let employees request leave and check balances themselves, while managers approve from anywhere and HR keeps a clear, auditable record.",
    featureTitle: "Includes",
    features: [
      "Self-service leave requests",
      "Configurable approval workflows",
      "Real-time balance tracking",
      "Team leave calendar",
    ],
  },
  {
    title: "Performance Appraisal",
    icon: "ph:chart-line-up-fill",
    description:
      "Run structured review cycles with clear goals, manager feedback, and ratings history, so performance conversations are backed by data, not memory.",
    featureTitle: "Includes",
    features: [
      "Goal setting & tracking",
      "Review cycle scheduling",
      "360-degree feedback",
      "Historical performance records",
    ],
  },
  {
    title: "Employee Self-Service",
    icon: "ph:user-circle-fill",
    description:
      "Give employees direct access to their own payslips, leave balances, and personal records, cutting down on routine requests to the HR team.",
    featureTitle: "Includes",
    features: [
      "Personal record access",
      "Payslip & document downloads",
      "Leave & attendance history",
      "Profile & bank detail updates",
    ],
  },
];
</script>
