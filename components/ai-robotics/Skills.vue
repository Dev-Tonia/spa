<script setup>
const skills = [
  {
    id: 1,
    title: "Software Development",
    icon: "mdi:code-braces",
  },
  {
    id: 2,
    title: "AI & Machine Learning",
    icon: "mdi:brain",
  },
  {
    id: 3,
    title: "Robotics",
    icon: "mdi:robot-industrial",
  },
  {
    id: 4,
    title: "Automation",
    icon: "mdi:autorenew",
  },
  {
    id: 5,
    title: "Engineering",
    icon: "mdi:hammer-wrench",
  },
  {
    id: 6,
    title: "Data Science",
    icon: "mdi:chart-box-outline",
  },
  {
    id: 7,
    title: "Tech Entrepreneurship",
    icon: "mdi:lightbulb",
  },
];
</script>

<template>
  <section class="py-16 bg-neutral-50" id="career-skills">
    <div class="wrapper">
      <LazyCommonSectionTitle
        :data="{
          title: 'Real-World Skills for Tomorrow\'s Careers',
          description: `Learners are prepared for careers across multiple technology disciplines`,
        }"
      />

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 py-9">
        <div
          v-for="skill in skills"
          :key="skill.id"
          class="px-6 py-8 bg-white rounded-xl shadow hover:shadow-lg transition-shadow duration-300 flex items-center gap-4"
        >
          <div
            class="w-12 h-12 flex-shrink-0 bg-primary text-white rounded-lg flex items-center justify-center"
          >
            <Icon :name="skill.icon" class="text-2xl" />
          </div>
          <h4 class="text-lg font-bold text-baseBlack">{{ skill.title }}</h4>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped></style>
