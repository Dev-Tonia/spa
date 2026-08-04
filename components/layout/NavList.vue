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
const isRouteInDropdown = (items) =>
  items.some((item) => route.path === item.to);

const toggleDropdown = (key) => {
  activeDropdown.value = activeDropdown.value === key ? null : key;
};
watch(route, () => {
  if (window.innerWidth <= 850 && typeof props.updateIsOpen === "function") {
    props.updateIsOpen();
  }
});
</script>

<template>
  <ul
    class="min-[850px]:space-x-5 font-semibold font-nunito text-sm lg:text-base min-[850px]:items-center flex flex-col min-[850px]:flex-row w-1/2 min-[850px]:w-auto"
    :class="{ 'hidden ': isOpen }"
  >
    <li class="py-4 min-[850px]:py-0">
      <NuxtLink to="/"> Home </NuxtLink>
    </li>
    <li class="pt-4 min-[850px]:pt-0">
      <NuxtLink to="/about"> About Us </NuxtLink>
    </li>
    <li class="cursor-pointer hidden min-[850px]:flex">
      <!-- This used on the lager screen  -->
      <DropdownMenu class="">
        <DropdownMenuTrigger
          @click="toggleDropdown('solutions')"
          class="flex space-x-2 items-center"
          :class="{
            'text-primary border-b-2 border-b-primary pb-1': isRouteInDropdown(
              navLinks.solutions.items,
            ),
          }"
        >
          <span> {{ navLinks.solutions.title }} </span>
          <Icon name="iconamoon:arrow-down-2" class="text-2xl" />
        </DropdownMenuTrigger>

        <DropdownMenuContent class="overflow-hidden">
          <div class="max-h-[80vh] overflow-y-auto">
            <div class="w-screen wrapper px-4 py-3 mt-4 lg:px-6">
              <div class="grid gap-4 min-[980px]:grid-cols-2">
                <div>
                  <h6
                    class="mb-2 text-[11px] font-semibold uppercase tracking-[0.2em] text-neutral-500"
                  >
                    Solutions
                  </h6>
                  <div class="space-y-1">
                    <div
                      v-for="(item, index) in navLinks.solutions.items.filter(
                        (entry) => entry.category === 'solution',
                      )"
                      :key="index"
                    >
                      <DropdownMenuItem class="rounded-md p-0">
                        <NuxtLink
                          :to="item.to"
                          class="flex items-start gap-2 rounded-md px-2 py-1.5 hover:bg-neutral-100"
                        >
                          <Icon
                            :name="item.icon"
                            class="mt-0.5 text-lg text-primary"
                          />
                          <span class="min-w-0">
                            <span
                              class="block text-sm leading-5 text-neutral-700"
                              >{{ item.name }}</span
                            >
                            <span
                              class="mt-0.5 block text-[11px] leading-4 text-neutral-500"
                              >{{ item.description }}</span
                            >
                          </span>
                        </NuxtLink>
                      </DropdownMenuItem>
                    </div>
                  </div>
                </div>

                <div>
                  <h6
                    class="mb-2 text-[11px] font-semibold uppercase tracking-[0.2em] text-neutral-500"
                  >
                    Services
                  </h6>
                  <div class="space-y-1">
                    <div
                      v-for="(item, index) in navLinks.solutions.items.filter(
                        (entry) => entry.category === 'service',
                      )"
                      :key="index"
                    >
                      <DropdownMenuItem class="rounded-md p-0">
                        <NuxtLink
                          :to="item.to"
                          class="flex items-start gap-2 rounded-md px-2 py-1.5 hover:bg-neutral-100"
                        >
                          <Icon
                            :name="item.icon"
                            class="mt-0.5 text-lg text-primary"
                          />
                          <span class="min-w-0">
                            <span
                              class="block text-sm leading-5 text-neutral-700"
                              >{{ item.name }}</span
                            >
                            <span
                              class="mt-0.5 block text-[11px] leading-4 text-neutral-500"
                              >{{ item.description }}</span
                            >
                          </span>
                        </NuxtLink>
                      </DropdownMenuItem>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </DropdownMenuContent>
      </DropdownMenu>
    </li>

    <li class="cursor-pointer min-[850px]:hidden">
      <!-- This used on the small screen  -->
      <Accordion type="single" collapsible class="">
        <AccordionItem value="solutions">
          <AccordionTrigger>{{ navLinks.solutions.title }}</AccordionTrigger>
          <AccordionContent
            v-for="(item, index) in navLinks.solutions.items"
            :key="index"
          >
            <NuxtLink :to="item.to" class="min-[980px]:flex gap-y-2 gap-x-4">
              {{ item.name }}
            </NuxtLink>
          </AccordionContent>
        </AccordionItem>
      </Accordion>
    </li>

    <li class="py-4 min-[850px]:py-0">
      <NuxtLink to="/it-training"> IT Training </NuxtLink>
    </li>

    <li class="py-4 min-[850px]:py-0">
      <NuxtLink to="/idm-@-school"> School Education </NuxtLink>
    </li>

    <li class="cursor-pointer hidden min-[850px]:flex">
      <!-- This used on the lager screen  -->
      <DropdownMenu class="">
        <DropdownMenuTrigger
          @click="toggleDropdown('industries')"
          class="flex space-x-2 items-center"
          :class="{
            'text-primary border-b-2 border-b-primary pb-1': isRouteInDropdown(
              navLinks.industries.items,
            ),
          }"
        >
          <span> {{ navLinks.industries.title }} </span>
          <Icon name="iconamoon:arrow-down-2" class="text-2xl" />
        </DropdownMenuTrigger>

        <DropdownMenuContent class="overflow-hidden">
          <div class="max-h-[80vh] overflow-y-auto">
            <div class="w-screen wrapper px-4 py-3 mt-4 lg:px-6">
              <div class="grid gap-4 min-[980px]:grid-cols-2">
                <div
                  v-for="(item, index) in navLinks.industries.items"
                  :key="index"
                >
                  <DropdownMenuItem class="rounded-md p-0">
                    <NuxtLink
                      :to="item.to"
                      class="flex items-start gap-2 rounded-md px-2 py-1.5 hover:bg-neutral-100"
                    >
                      <Icon
                        :name="item.icon"
                        class="mt-0.5 text-lg text-primary"
                      />
                      <span class="min-w-0">
                        <span class="block text-sm leading-5 text-neutral-700">
                          {{ item.name }}
                        </span>
                        <span
                          class="mt-0.5 block text-[11px] leading-4 text-neutral-500"
                        >
                          {{ item.description }}
                        </span>
                      </span>
                    </NuxtLink>
                  </DropdownMenuItem>
                </div>
              </div>
            </div>
          </div>
        </DropdownMenuContent>
      </DropdownMenu>
    </li>

    <li class="cursor-pointer min-[850px]:hidden">
      <!-- This used on the small screen  -->
      <Accordion type="single" collapsible class="">
        <AccordionItem value="industries">
          <AccordionTrigger>{{ navLinks.industries.title }}</AccordionTrigger>
          <AccordionContent
            v-for="(item, index) in navLinks.industries.items"
            :key="index"
          >
            <NuxtLink :to="item.to" class="min-[980px]:flex gap-4">
              {{ item.name }}
            </NuxtLink>
          </AccordionContent>
        </AccordionItem>
      </Accordion>
    </li>
    <li class="py-4 min-[850px]:py-0">
      <NuxtLink to="/media-center"> Media Center </NuxtLink>
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
