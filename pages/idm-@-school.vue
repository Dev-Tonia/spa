<template>
  <LazyCommonReusableHero
    className=" h-[60hv] overflow-hidden"
    imgClass=" w-full h-full "
    :data="{
      title: 'Building Young Minds for Global ICT Future',
      description: `Our IDM@School program is meticulously designed to cater to the evolving needs of students at various educational stages. We offer a diverse curriculum that encompasses the latest advancements in technology, ensuring that our students are well-prepared for the future.
    `,
      img: school6,
    }"
    scroll-to="why-idm@school"
  />
  <LazyIdmSchoolWhyIdmSchool />
  <LazyIdmSchoolSolutions />
  <LazyCommonContact />
</template>

<script setup>
import { idmSchoolHero, school6 } from "../lib/images";
</script>

<style scoped></style>
