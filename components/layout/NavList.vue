<script setup>
import { navLinks } from "@/lib/nav.js";
import {
  DropdownMenu,
  DropdownMenuTrigger,
  DropdownMenuContent,
  DropdownMenuItem,
} from "@/components/ui/dropdown-menu";

const activeDropdown = ref(null);
const props = defineProps({
  isOpen: { type: Boolean },
  updateIsOpen: {
    type: Function,
  },
});

const isDropdownActive = computed(() => (key) => activeDropdown.value === key);

const toggleDropdown = (key) => {
  activeDropdown.value = activeDropdown.value === key ? null : key;
};
</script>

<template>
  <ul
    class="items-center space-x-5 font-bold font-nunito md:flex"
    :class="{
      'flex-col flex': isOpen,
      hidden: !isOpen,
    }"
  >
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
          class="w-screen wrapper grid min-[980px]:grid-cols-3 gap-6 p-4 mt-5"
        >
          <DropdownMenuItem v-for="(item, index) in link.items" :key="index">
            <NuxtLink :to="item.to" class="min-[980px]:flex gap-4">
              <div
                class="bg-primary min-[980px]:flex hidden items-center justify-center text-white w-14 h-14 rounded-xl p-4"
              >
                <Icon :name="item.icon" class="text-4xl" />
              </div>
              <div>
                <h6>{{ item.name }}</h6>
                <p class="min-[980px]:flex hidden">{{ item.description }}</p>
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
    <li class="hidden">
      <Button
        class="text-white bg-primary py-4 px-4 text-sm sm:text-base sm:px-8 font-bold font-nunito"
        >Request a demo
      </Button>
    </li>
  </ul>
  <div
    @click="updateIsOpen"
    class="fixed inset-0 z-10 bg-gray-900 opacity-60 min-[980px]::hidden"
    :class="{ block: isOpen, hidden: !isOpen }"
    id="sidebarBackdrop"
  ></div>
</template>

<style scoped>
ul .router-link-exact-active {
  @apply text-primary border-b-2 border-b-primary pb-1;
}
</style>
