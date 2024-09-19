<script setup></script>
<template>
  <LazyCommonReusableHero
    class="text-white"
    :data="{
      title: 'SAP HANA',
      description: `SAP HANA is an in-memory database and application development platform for processing high volumes of data in real time.
An in-memory database (IMDB, also main memory database system or MMDB or memory resident database) is a database management system that primarily relies on main memory for computer data storage.`,
      img: hana,
    }"
  />
  <LazyHanaSubHeader />
  <LazyHanaServices />
  <LazyHanaLearn />
  <LazyHanaWhy />
  <LazyCommonContact />
</template>

<style scoped></style>
