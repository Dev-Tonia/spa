<script setup>
const contents = [
  {
    id: 1,
    tile: "Experienced Educators",
    description: `Our team of highly qualified and passionate educators 	are committed to providing personalized and engaging learning experiences.
`,
    icon: "mdi:users-group",
  },
  {
    id: 2,
    tile: "State-of-the-Art Facilities",
    description: `We offer modern, well-equipped computer labs, providing students with hands-on experience using the latest technology.
`,
    icon: "ph:desktop",
  },
  {
    id: 3,
    tile: "Comprehensive Curriculum",
    description: `Our curriculum is designed to be dynamic and adaptable, reflecting the latest industry trends and technological advancements.
`,
    icon: "ph:file-text",
  },
  {
    id: 4,
    tile: "Holistic Development",
    description: `We focus on the overall development of our students, fostering not only technical skills but also critical thinking, creativity, and collaboration.`,
    icon: "fluent:arrow-move-inward-20-regular",
  },
];
</script>

<template>
  <section class="bg-neutral-50 py-16">
    <div class="wrapper">
      <CommonSectionTitle
        :data="{
          title: 'Why IDM@School',
          description: `The curriculum covers from pre-primary to senior secondary school.`,
        }"
      />
      <div class="grid sm:grid-cols-2 gap-6 md:gap-10 py-9">
        <CommonWhyCard
          v-for="content in contents"
          :key="content.id"
          :content="content"
        />
      </div>
    </div>
  </section>
</template>

<style scoped></style>
