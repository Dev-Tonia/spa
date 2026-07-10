<script setup>
const contents = [
  {
    id: 1,
    tile: "Hands-On Learning That Inspires Innovation",
    description:
      "Students design and program intelligent systems that recognize faces, objects, colours and gestures, respond to voice commands, detect obstacles, navigate autonomously, sense environmental conditions, and solve everyday problems.",
    icon: "mdi:robot-industrial",
  },
  {
    id: 2,
    tile: "Learning Beyond Coding",
    description:
      "Students develop logical thinking, creativity, teamwork, communication, resilience, and confidence through practical projects that foster comprehensive skill development.",
    icon: "mdi:lightbulb-on",
  },
];
</script>

<template>
  <section class="bg-neutral-50 py-16" id="why-ai-robotics">
    <div class="wrapper">
      <LazyCommonSectionTitle
        :data="{
          title: 'Why AI & Robotics?',
          description: `The future belongs to learners who can think critically, solve problems creatively, and confidently use technology to improve the world around them.`,
        }"
      />
      <div class="grid sm:grid-cols-2 gap-6 md:gap-10 py-9">
        <LazyCommonWhyCard
          v-for="content in contents"
          :key="content.id"
          :content="content"
        />
      </div>
    </div>
  </section>
</template>

<style scoped></style>
