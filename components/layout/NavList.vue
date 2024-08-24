<script setup>
import { navLinks } from "@/lib/nav.js";
</script>

<template>
  <ul class="flex items-center space-x-5 font-bold font-nunito">
    <li>
      <NuxtLink to="/"> Home </NuxtLink>
    </li>
    <li v-for="(link, key) in navLinks" :key="link.id" class="cursor-pointer">
      <NuxtLink>
        {{ link.title }}
      </NuxtLink>
    </li>
    <li>
      <NuxtLink to="/"> About Us </NuxtLink>
    </li>
    <li>
      <NuxtLink to="/"> Contact Us </NuxtLink>
    </li>
  </ul>
</template>

<style scoped></style>
