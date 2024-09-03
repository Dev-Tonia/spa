<script setup>
import { navLinks } from "@/lib/nav.js";
import {
  DropdownMenu,
  DropdownMenuTrigger,
  DropdownMenuContent,
  DropdownMenuItem,
} from "@/components/ui/dropdown-menu";

const activeDropdown = ref(null);

const isDropdownActive = computed(() => (key) => activeDropdown.value === key);

const toggleDropdown = (key) => {
  activeDropdown.value = activeDropdown.value === key ? null : key;
};
</script>

<template>
  <ul class="flex items-center space-x-5 font-bold font-nunito">
    <li>
      <NuxtLink to="/"> Home </NuxtLink>
    </li>
    <li v-for="(link, key) in navLinks" :key="link.id" class="cursor-pointer">
      <DropdownMenu>
        <DropdownMenuTrigger
          @click="toggleDropdown(key)"
          :class="{
            'text-primary border-b-2 border-b-primary pb-1':
              isDropdownActive(key),
          }"
        >
          {{ link.title }}</DropdownMenuTrigger
        >
        <DropdownMenuContent
          class="w-screen wrapper grid grid-cols-3 gap-6 p-4 mt-5"
        >
          <DropdownMenuItem v-for="(item, index) in link.items" :key="index">
            <NuxtLink :to="item.to" class="flex gap-4">
              <div
                class="bg-primary flex items-center justify-center text-white w-14 h-14 rounded-xl p-4"
              >
                <Icon :name="item.icon" class="text-4xl" />
              </div>
              <div>
                <h6>{{ item.name }}</h6>
                <p>{{ item.description }}</p>
              </div>
            </NuxtLink>
          </DropdownMenuItem>
        </DropdownMenuContent>
      </DropdownMenu>
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
