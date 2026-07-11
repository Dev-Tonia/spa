<template>
  <div>
    <!-- Hero -->
    <section class="bg-secondary/5">
      <div class="mx-auto max-w-5xl px-4 py-16 text-center sm:py-20 lg:py-24">
        <span
          class="inline-flex items-center rounded-full bg-primary/10 px-4 py-1.5 text-xs font-bold uppercase tracking-wider text-primary"
        >
          IDM Training
        </span>
        <h1
          class="mt-5 font-grifter text-3xl font-bold text-baseBlack sm:text-4xl lg:text-5xl"
        >
          Skills your team can put to work on Monday.
        </h1>
        <p class="mx-auto mt-5 max-w-2xl leading-7 text-neutral-600">
          From SAP and ERP certification to AI, cybersecurity, and coding, IDM's
          training programs are built for hands-on results, taught by
          practitioners who implement these tools for a living.
        </p>
        <a
          href="#programs"
          class="mt-8 inline-flex w-fit items-center gap-2 rounded-lg bg-primary px-5 py-2.5 text-sm font-bold text-white transition-colors hover:bg-secondary"
        >
          Explore programs
          <Icon name="ri:arrow-down-line" class="text-lg" />
        </a>
      </div>
    </section>

    <!-- Why train with IDM -->
    <section class="mx-auto max-w-6xl px-4 py-14 sm:py-16">
      <div class="mb-10 text-center">
        <h2 class="font-grifter text-2xl font-bold text-baseBlack sm:text-3xl">
          Why train with IDM
        </h2>
        <p class="mx-auto mt-3 max-w-2xl text-neutral-600">
          Every program is delivered by consultants who work on live client
          implementations, not just instructors reading from a manual.
        </p>
      </div>
      <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
        <div
          v-for="point in whyTrain"
          :key="point.title"
          class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm"
        >
          <span
            class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-primary text-lg text-white"
          >
            <Icon :name="point.icon" class="text-xl" />
          </span>
          <h3 class="font-bold text-baseBlack">{{ point.title }}</h3>
          <p class="mt-2 text-sm leading-6 text-neutral-600">
            {{ point.description }}
          </p>
        </div>
      </div>
    </section>

    <!-- Programs -->
    <section id="programs" class="mx-auto max-w-6xl px-4 pb-16 sm:pb-20">
      <div class="mb-10 text-center">
        <h2 class="font-grifter text-2xl font-bold text-baseBlack sm:text-3xl">
          Our training programs
        </h2>
        <p class="mx-auto mt-3 max-w-2xl text-neutral-600">
          Twelve programs spanning enterprise systems, data, and emerging tech,
          delivered for individuals, corporate teams, and students.
        </p>
      </div>

      <div class="grid gap-6">
        <OtherServicesServiceCard
          v-for="(program, index) in programs"
          :key="program.title"
          :service="program"
          :index="index"
        />
      </div>
    </section>

    <!-- CTA banner -->
    <section class="bg-primary">
      <div
        class="mx-auto flex max-w-5xl flex-col items-center gap-6 px-4 py-14 text-center sm:py-16"
      >
        <h2 class="font-grifter text-2xl font-bold text-white sm:text-3xl">
          Ready to upskill your team or your students?
        </h2>
        <p class="max-w-xl text-white/80">
          Tell us which program fits your goals and we'll help you plan a
          schedule, whether that's one employee or a full classroom.
        </p>
        <NuxtLink
          to="/contact"
          class="inline-flex w-fit items-center gap-2 rounded-lg bg-white px-5 py-2.5 text-sm font-bold text-primary transition-colors hover:bg-baseBlack hover:text-white"
        >
          Contact our training team
          <Icon name="ri:arrow-right-line" class="text-lg" />
        </NuxtLink>
      </div>
    </section>
  </div>
</template>

<script setup lang="ts">
import OtherServicesServiceCard from "@/components/other-services/ServiceCard.vue";

interface TrainingProgram {
  title: string;
  description: string;
  icon: string;
  image?: string | null;
  featureTitle?: string;
  features?: string[];
}

const whyTrain = [
  {
    title: "Practitioner-led",
    icon: "ph:chalkboard-teacher-fill",
    description:
      "Trainers are active SAP, ERP, and data consultants who bring real project scenarios into every session.",
  },
  {
    title: "Hands-on labs",
    icon: "ph:desktop-fill",
    description:
      "Every program runs on live systems and real datasets, not slides, so skills transfer straight to the job.",
  },
  {
    title: "Flexible scheduling",
    icon: "ph:calendar-check-fill",
    description:
      "Choose weekday, weekend, or corporate on-site formats built around your team's availability.",
  },
  {
    title: "Certification on completion",
    icon: "ph:certificate-fill",
    description:
      "Finish with a certificate that verifies the specific tools and modules you're now equipped to use.",
  },
];

const programs: TrainingProgram[] = [
  {
    title: "SAP Business One Training",
    icon: "ph:cube-fill",
    description:
      "Learn to run day-to-day operations in SAP Business One, from sales and purchasing to inventory and financials, with training tailored to your role.",
    featureTitle: "Training covers",
    features: [
      "Sales & purchasing workflows",
      "Inventory & warehouse management",
      "Financial accounting basics",
      "Reporting & dashboards",
    ],
  },
  {
    title: "ERPNext Functional Training",
    icon: "ph:squares-four-fill",
    description:
      "A functional walkthrough of ERPNext for teams adopting the platform, covering the modules you'll use most in daily operations.",
    featureTitle: "Training covers",
    features: [
      "Core module navigation",
      "Sales & procurement cycles",
      "HR & payroll basics",
      "Custom reports & workflows",
    ],
  },
  {
    title: "ERP Implementation Certification",
    icon: "ph:certificate-fill",
    description:
      "A certification track for consultants and internal champions who will lead or support ERP rollouts, covering implementation methodology end to end.",
    featureTitle: "Training covers",
    features: [
      "Implementation methodology",
      "Requirements & gap analysis",
      "Data migration planning",
      "Go-live & support handover",
    ],
  },
  {
    title: "Data Analytics (Power BI)",
    icon: "ph:chart-bar-fill",
    description:
      "Turn raw business data into dashboards that drive decisions, using Power BI's modeling, visualization, and reporting tools.",
    featureTitle: "Training covers",
    features: [
      "Data modeling & DAX basics",
      "Interactive dashboard design",
      "Connecting to ERP data sources",
      "Sharing & scheduled refresh",
    ],
  },
  {
    title: "Microsoft Excel (Basic to Advanced)",
    icon: "ph:table-fill",
    description:
      "A progressive course from core spreadsheet skills through advanced formulas, pivot tables, and automation with macros.",
    featureTitle: "Training covers",
    features: [
      "Formulas & functions",
      "Pivot tables & charts",
      "Data cleaning techniques",
      "Intro to macros & automation",
    ],
  },
  {
    title: "Artificial Intelligence",
    icon: "ph:robot-fill",
    description:
      "An introduction to practical AI: how machine learning models work, where they fit in business, and how to start applying them.",
    featureTitle: "Training covers",
    features: [
      "Core AI & ML concepts",
      "Business use cases",
      "Working with AI tools",
      "Ethics & data considerations",
    ],
  },
  {
    title: "Cybersecurity Awareness",
    icon: "ph:shield-check-fill",
    description:
      "Practical security training that helps staff recognize phishing, handle data safely, and follow good password and access hygiene.",
    featureTitle: "Training covers",
    features: [
      "Phishing & social engineering",
      "Password & access hygiene",
      "Safe data handling",
      "Incident reporting basics",
    ],
  },
  {
    title: "Cloud Computing",
    icon: "ph:cloud-fill",
    description:
      "A foundations course covering cloud concepts, deployment models, and how businesses migrate and manage workloads in the cloud.",
    featureTitle: "Training covers",
    features: [
      "Cloud service models",
      "Deployment & migration basics",
      "Cost & resource management",
      "Security in the cloud",
    ],
  },
  {
    title: "Python Programming",
    icon: "ph:code-fill",
    description:
      "Learn programming fundamentals with Python, from syntax and logic through to scripting for automation and data tasks.",
    featureTitle: "Training covers",
    features: [
      "Python syntax & logic",
      "Data structures & functions",
      "Automating everyday tasks",
      "Intro to data handling",
    ],
  },
  {
    title: "Robotics & IoT",
    icon: "ph:cpu-fill",
    description:
      "A hands-on program building and programming robotics kits and IoT sensors, connecting hardware to real-world logic.",
    featureTitle: "Training covers",
    features: [
      "Circuits & sensor basics",
      "Programming microcontrollers",
      "Building simple robots",
      "Connected device projects",
    ],
  },
  {
    title: "Corporate Training",
    icon: "ph:briefcase-fill",
    description:
      "Customized training built around your organization's tools, workflows, and skill gaps, delivered on-site or remotely for your team.",
    featureTitle: "Training covers",
    features: [
      "Needs assessment",
      "Custom curriculum design",
      "On-site or remote delivery",
      "Progress tracking & reporting",
    ],
  },
  {
    title: "Student Programs",
    icon: "ph:backpack-fill",
    description:
      "Programs designed for students from pre-primary through senior secondary, building foundational and advanced ICT skills through hands-on learning.",
    featureTitle: "Training covers",
    features: [
      "Age-appropriate tech curriculum",
      "Hands-on lab sessions",
      "Coding & robotics basics",
      "Pathway into IDM@School",
    ],
  },
];
</script>
