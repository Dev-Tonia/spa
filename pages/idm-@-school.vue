<template>
  <CommonReusableHero
    :data="{
      title: 'Building Young Minds for Global ICT Future',
      description: `Our IDM@School program is meticulously designed to cater to the evolving needs of students at various educational stages. We offer a diverse curriculum that encompasses the latest advancements in technology, ensuring that our students are well-prepared for the future.
    `,
      img: powerBi,
    }"
  />
  <IdmSchoolWhyIdmSchool />
  <IdmSchoolSolutions />
</template>

<script setup>
import { powerBi } from "../lib/images";
</script>

<style scoped></style>
