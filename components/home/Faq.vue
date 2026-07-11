<template>
  <section class="py-16 sm:py-20 lg:py-24" id="faq">
    <div class="wrapper">
      <div class="mb-10 text-center sm:mb-14">
        <h2 class="font-grifter text-3xl font-bold text-baseBlack sm:text-4xl">
          Frequently Asked Questions
        </h2>
        <p class="mt-3 text-neutral-600">
          Everything you need to know about IDM, our solutions, and our school
          program.
        </p>
      </div>

      <div class="space-y-10">
        <div v-for="category in categories" :key="category.title">
          <div class="mb-4 flex items-center gap-2">
            <Icon :name="category.icon" class="text-2xl text-primary" />
            <h3
              class="font-grifter text-xl font-bold text-baseBlack sm:text-2xl"
            >
              {{ category.title }}
            </h3>
          </div>

          <div
            class="divide-y divide-neutral-200 overflow-hidden rounded-2xl border border-neutral-200 bg-white shadow-sm"
          >
            <div v-for="item in category.items" :key="item.question">
              <button
                type="button"
                class="flex w-full items-center justify-between gap-4 px-5 py-4 text-left transition-colors hover:bg-neutral-50 sm:px-6"
                @click="toggle(item)"
                :aria-expanded="isOpen(item)"
              >
                <span class="font-semibold text-baseBlack">
                  {{ item.question }}
                </span>
                <Icon
                  name="ri:arrow-down-s-line"
                  class="shrink-0 text-2xl text-primary transition-transform duration-200"
                  :class="isOpen(item) ? 'rotate-180' : ''"
                />
              </button>

              <div
                class="grid transition-all duration-200 ease-in-out"
                :class="isOpen(item) ? 'grid-rows-[1fr]' : 'grid-rows-[0fr]'"
              >
                <div class="overflow-hidden">
                  <div
                    class="px-5 pb-5 text-sm leading-6 text-neutral-600 sm:px-6"
                  >
                    <p v-if="item.answer">{{ item.answer }}</p>
                    <ul v-if="item.list?.length" class="mt-3 grid gap-2">
                      <li
                        v-for="point in item.list"
                        :key="point"
                        class="flex items-start gap-2"
                      >
                        <Icon
                          name="ph:check-circle-fill"
                          class="mt-0.5 shrink-0 text-primary"
                        />
                        <span>{{ point }}</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- <div class="mt-12 flex flex-col items-center gap-3 text-center">
        <p class="text-neutral-600">Still have a question?</p>
        <NuxtLink
          to="/contact"
          class="inline-flex w-fit items-center gap-2 rounded-lg bg-primary px-5 py-2.5 text-sm font-bold text-white transition-colors hover:bg-secondary"
        >
          Talk to our team
          <Icon name="ri:arrow-right-line" class="text-lg" />
        </NuxtLink>
      </div> -->
    </div>
  </section>
</template>

<script setup lang="ts">
interface FaqItem {
  question: string;
  answer?: string;
  list?: string[];
}

interface FaqCategory {
  title: string;
  icon: string;
  items: FaqItem[];
}

const categories: FaqCategory[] = [
  {
    title: "Corporate & General",
    icon: "ph:buildings-fill",
    items: [
      {
        question:
          "What is International Data Management Services Limited (IDM)?",
        answer:
          "Incorporated in Nigeria in 1981, IDM is a premier ICT and business solutions provider. We are proudly affiliated with Comcraft Services Limited, United Kingdom, and our core mission is to make African enterprises globally competitive by providing perfect business processes and facilitating excellent customer care management.",
      },
      {
        question: "What industries does IDM serve?",
        answer:
          "We provide specialized, scalable solutions across a wide range of industries, including:",
        list: [
          "Manufacturing, Retail, and Logistics",
          "Pharmaceuticals, Food & Beverage, and Oil & Gas",
          "Professional Services, Automobile Components, and Packaging",
          "Electronic Components, Trade & Distribution, and Recycling",
        ],
      },
    ],
  },
  {
    title: "Products & Enterprise Solutions",
    icon: "ph:desktop-tower-fill",
    items: [
      {
        question: "What core software and ERP solutions do you offer?",
        answer:
          "As an expert enterprise solutions provider, we specialize in SAP implementation, cloud infrastructure, and data analytics. Our core offerings include:",
        list: [
          "SAP Business One (including tailored Add-ons)",
          "SAP Customer Check Out",
          "SAP HANA & SAP Fiori",
          "School ERP systems",
          "Power BI for advanced data analytics",
          "Cloud Services and Customer Care Services",
        ],
      },
    ],
  },
  {
    title: "IDM@School Program",
    icon: "ph:graduation-cap-fill",
    items: [
      {
        question: "What is the IDM@School program?",
        answer:
          "IDM@Schools is a comprehensive ICT education initiative meticulously designed to respond to the demands of the 21st century. It builds young minds for a global ICT future by offering a dynamic tech curriculum coupled with hands-on experience.",
      },
      {
        question:
          "What educational levels does the IDM@School curriculum cover?",
        answer:
          "Our curriculum is highly adaptable and covers students at various educational stages, spanning from pre-primary to primary and through to senior secondary school.",
      },
      {
        question:
          "What specific tech subjects are taught in the IDM@School program?",
        answer: "We offer a diverse and modern curriculum that encompasses:",
        list: [
          "Robotics & Artificial Intelligence (AI)",
          "Software Programming (Coding) & Game Development",
          "Database Management & 3D Modelling",
          "Animation, Multimedia, & Graphics Design",
          "Microsoft Suites essentials",
        ],
      },
      {
        question: "What makes the IDM@School program unique?",
        list: [
          "Experienced Educators: Highly qualified and passionate instructors committed to personalized, engaging learning.",
          "State-of-the-Art Facilities: Modern, well-equipped computer labs providing vital hands-on experience with the latest technology.",
          "Comprehensive & Dynamic Curriculum: Constantly updated to reflect current industry trends and technological advancements.",
          "Holistic Development: A balanced approach focusing on core technical skills alongside critical thinking, creativity, and collaboration.",
        ],
      },
    ],
  },
  {
    title: "Support & Next Steps",
    icon: "ph:phone-call-fill",
    items: [
      {
        question: "How can our business or school get started with IDM?",
        answer:
          "We are ready to help your organization scale and secure the final piece in your puzzle of uninterrupted growth. Please visit our Contact Us page to connect directly with an IDM expert.",
      },
    ],
  },
];

const openQuestion = ref<string | null>(null);

function isOpen(item: FaqItem) {
  return openQuestion.value === item.question;
}

function toggle(item: FaqItem) {
  openQuestion.value = isOpen(item) ? null : item.question;
}
</script>

<style scoped></style>
