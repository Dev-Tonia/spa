<script setup>
import { navLinks } from "@/lib/nav.js";
import {
  DropdownMenu,
  DropdownMenuTrigger,
  DropdownMenuContent,
  DropdownMenuItem,
} from "@/components/ui/dropdown-menu";
import {
  Accordion,
  AccordionContent,
  AccordionItem,
  AccordionTrigger,
} from "@/components/ui/accordion";
// import { onBeforeRouteLeave } from "vue-router";

import { useRoute } from "vue-router";

const route = useRoute();
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
watch(route, () => {
  console.log("object");
  if (window.innerWidth <= 850 && typeof props.updateIsOpen === "function") {
    props.updateIsOpen();
  }
});
</script>

<template>
  <ul
    class="min-[850px]:space-x-5 font-bold font-nunito min-[850px]:items-center flex flex-col min-[850px]:flex-row w-1/2 min-[850px]:w-auto"
    :class="{ 'hidden ': isOpen }"
  >
    <li class="py-4 min-[850px]:py-0">
      <NuxtLink to="/"> Home </NuxtLink>
    </li>
    <li
      v-for="(link, key) in navLinks"
      :key="link.id"
      class="cursor-pointer hidden min-[850px]:flex"
    >
      <!-- This used on the lager screen  -->
      <DropdownMenu class="">
        <DropdownMenuTrigger
          @click="toggleDropdown(key)"
          class="flex space-x-2 items-center"
          :class="{
            'text-primary border-b-2 border-b-primary pb-1':
              isDropdownActive(key),
          }"
        >
          <span> {{ link.title }} </span>
          <Icon name="iconamoon:arrow-down-2" class="text-2xl" />
        </DropdownMenuTrigger>
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

    <li
      v-for="(link, key) in navLinks"
      :key="link.id"
      class="cursor-pointer min-[850px]:hidden"
    >
      <!-- This used on the small screen  -->
      <Accordion type="single" collapsible class="">
        <AccordionItem value="item-1">
          <AccordionTrigger>{{ link.title }}</AccordionTrigger>
          <AccordionContent v-for="(item, index) in link.items" :key="index">
            <NuxtLink :to="item.to" class="min-[980px]:flex gap-4">
              {{ item.name }}
            </NuxtLink>
          </AccordionContent>
        </AccordionItem>
      </Accordion>
    </li>
    <li class="pt-4 min-[850px]:pt-0">
      <NuxtLink to="/about"> About Us </NuxtLink>
    </li>
    <li class="py-4 min-[850px]:py-0">
      <NuxtLink to="/contact"> Contact Us </NuxtLink>
    </li>
    <li class="pb-4 min-[850px]:hidden">
      <Button
        class="text-white bg-primary py-4 px-4 text-sm sm:text-base sm:px-8 font-bold font-nunito"
        >Request a demo
      </Button>
    </li>
  </ul>
</template>

<style scoped>
ul .router-link-exact-active {
  @apply text-primary border-b-2 border-b-primary pb-1;
}
</style>
