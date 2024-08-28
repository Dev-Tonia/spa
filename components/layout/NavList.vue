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
      <NuxtLink to="/about"> About Us </NuxtLink>
    </li>
    <li>
      <NuxtLink to="/contact"> Contact Us </NuxtLink>
    </li>
  </ul>
</template>

<style scoped>
ul .router-link-exact-active {
  @apply text-primary border-b-2 border-b-primary pb-1;
}
</style>
