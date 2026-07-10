<script setup>
const learningPaths = [
  {
    id: 1,
    level: "Primary",
    description: "Coding and robotics foundations",
    icon: "mdi:school",
  },
  {
    id: 2,
    level: "Junior Secondary",
    description: "AI concepts and intelligent systems",
    icon: "mdi:cpu-64-bit",
  },
  {
    id: 3,
    level: "Senior Secondary",
    description: "Advanced automation, engineering, and innovation projects",
    icon: "mdi:brain",
  },
];
</script>

<template>
  <section class="py-16 bg-white" id="learning-path">
    <div class="wrapper">
      <LazyCommonSectionTitle
        :data="{
          title: 'Age-Appropriate Learning Path',
          description: `Our structured curriculum ensures students develop skills progressively`,
        }"
      />

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 py-9">
        <div
          v-for="path in learningPaths"
          :key="path.id"
          class="group px-6 py-8 bg-neutral-50 rounded-xl hover:bg-primary transition-colors duration-300"
        >
          <div
            class="w-14 h-14 bg-primary text-white rounded-xl flex items-center justify-center mb-6 group-hover:bg-white"
          >
            <Icon :name="path.icon" class="text-3xl group-hover:text-primary" />
          </div>
          <h3
            class="text-2xl font-bold text-baseBlack mb-3 group-hover:text-white"
          >
            {{ path.level }}
          </h3>
          <p class="text-[#7A7474] group-hover:text-neutral-50">
            {{ path.description }}
          </p>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped></style>
