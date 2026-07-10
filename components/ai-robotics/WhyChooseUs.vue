<script setup>
const reasons = [
  {
    id: 1,
    title: "Structured Curriculum",
    icon: "mdi:book-open-page-variant",
    items: [
      "Well-designed, age-appropriate learning modules",
      "Progressive skill development",
      "Industry-aligned content",
    ],
  },
  {
    id: 2,
    title: "Experienced Instructors",
    icon: "mdi:human-teaching",
    items: [
      "Highly qualified educators",
      "Hands-on teaching methodology",
      "Passion for student success",
    ],
  },
  {
    id: 3,
    title: "Practical Learning",
    icon: "mdi:tools",
    items: [
      "Hands-on practical sessions",
      "Real-world problem solving",
      "Engaging projects and challenges",
    ],
  },
  {
    id: 4,
    title: "Digital Resources & Support",
    icon: "mdi:cloud-multiple-outline",
    items: [
      "Comprehensive digital learning materials",
      "Online resources and tutorials",
      "Ongoing technical support",
    ],
  },
  {
    id: 5,
    title: "Innovation & Extracurricular",
    icon: "mdi:lightbulb-multiple-outline",
    items: [
      "Innovation clubs and groups",
      "Workshops and competitions",
      "Holiday camps and programs",
    ],
  },
  {
    id: 6,
    title: "Holistic Development",
    icon: "mdi:human-greeting-variant",
    items: [
      "Builds confidence and resilience",
      "Develops teamwork and communication",
      "Fosters creativity and critical thinking",
    ],
  },
];
</script>

<template>
  <LazyCommonReason
    extra-class="sm:grid-cols-2"
    :contents="reasons"
    title="Why Schools Choose IDM@School"
    description="We provide comprehensive support, cutting-edge curriculum, and an inspiring learning environment that prepares students for success in a technology-driven future."
  />
</template>

<style scoped></style>
