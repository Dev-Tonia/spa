<script setup>
import { hana } from "../lib/images";
</script>
<template>
  <LazyCommonReusableHero
    class="text-white"
    :data="{
      title: 'SAP HANA',
      description: `SAP HANA is an in-memory database and application development platform for processing high volumes of data in real time.
An in-memory database (IMDB, also main memory database system or MMDB or memory resident database) is a database management system that primarily relies on main memory for computer data storage.`,
      img: hana,
    }"
    scroll-to="sap-hana-services"
  />

  <LazyCommonSubHeader
    :data="{
      title: 'In-memory databases are faster than optimized databases',
      description: `Due to its IMDB property, SAP HANA enables data analysts to query large volumes of data in real time. HANA’s in-memory computing database infrastructure frees analysts from having to load or write back data. Also HANA is a columnar-based data storage system and therefore it is ACID compliant(atomicity, consistency, isolation and durability) and supports industry standards, such as structured query language (SQL) and multidimensional expressions (MDX).
SAP HANA also includes a programming component that enables a developer to create and run customised application programs on top of HANA`,
    }"
  />
  <LazyHanaServices />
  <LazyHanaLearn />
  <LazyHanaWhy />
  <LazyCommonContact />
</template>

<style scoped></style>
