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

const solutionGroups = [
  { title: "Solutions", category: "solution" },
  { title: "Services", category: "service" },
].map((group) => ({
  ...group,
  items: navLinks.solutions.items.filter((item) => item.category === group.category),
}));

const route = useRoute();
const hoveredDropdown = ref(null);

const props = defineProps({
  isOpen: { type: Boolean },
  updateIsOpen: {
    type: Function,
  },
});

const isRouteInDropdown = (items) =>
  items.some((item) => route.path === item.to);

const setHoveredDropdown = (key) => {
  hoveredDropdown.value = key;
};

const clearHoveredDropdown = (key) => {
  if (hoveredDropdown.value === key) {
    hoveredDropdown.value = null;
  }
};

const isDropdownTriggerActive = (key, items) => {
  if (hoveredDropdown.value) {
    return hoveredDropdown.value === key;
  }

  return isRouteInDropdown(items);
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
    <li
      class="cursor-pointer hidden min-[850px]:flex"
      @mouseenter="setHoveredDropdown('solutions')"
      @mouseleave="clearHoveredDropdown('solutions')"
    >
      <!-- This used on the lager screen  -->
      <DropdownMenu class="">
        <DropdownMenuTrigger
          class="flex space-x-2 items-center"
          :class="{
            'text-primary border-b-2 border-b-primary pb-1':
              isDropdownTriggerActive('solutions', navLinks.solutions.items),
          }"
        >
          <span> {{ navLinks.solutions.title }} </span>
          <Icon name="iconamoon:arrow-down-2" class="text-2xl" />
        </DropdownMenuTrigger>

        <DropdownMenuContent
          align="center"
          :side-offset="16"
          :collision-padding="16"
          class="header-dropdown"
        >
          <div class="solution-groups">
            <section
              v-for="group in solutionGroups"
              :key="group.category"
              :aria-label="group.title"
              class="menu-group"
            >
              <h6 class="menu-heading">{{ group.title }}</h6>
              <div class="menu-items">
                <DropdownMenuItem
                  v-for="item in group.items"
                  :key="item.id"
                  as-child
                  class="menu-link"
                >
                  <NuxtLink :to="item.to">
                    <span class="menu-icon"><Icon :name="item.icon" /></span>
                    <span class="menu-copy">
                      <span class="menu-title">{{ item.name }}</span>
                      <span class="menu-description">{{ item.description }}</span>
                    </span>
                  </NuxtLink>
                </DropdownMenuItem>
              </div>
            </section>
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
      <NuxtLink to="/idm-@-school"> IDM@School </NuxtLink>
    </li>

    <li
      class="cursor-pointer hidden min-[850px]:flex"
      @mouseenter="setHoveredDropdown('industries')"
      @mouseleave="clearHoveredDropdown('industries')"
    >
      <!-- This used on the lager screen  -->
      <DropdownMenu class="">
        <DropdownMenuTrigger
          class="flex space-x-2 items-center"
          :class="{
            'text-primary border-b-2 border-b-primary pb-1':
              isDropdownTriggerActive('industries', navLinks.industries.items),
          }"
        >
          <span> {{ navLinks.industries.title }} </span>
          <Icon name="iconamoon:arrow-down-2" class="text-2xl" />
        </DropdownMenuTrigger>

        <DropdownMenuContent
          align="center"
          :side-offset="16"
          :collision-padding="16"
          class="header-dropdown"
        >
          <h6 class="menu-heading">Industries we serve</h6>
          <div class="industry-grid">
            <DropdownMenuItem
              v-for="item in navLinks.industries.items"
              :key="item.id"
              as-child
              class="menu-link"
            >
              <NuxtLink :to="item.to">
                <span class="menu-icon"><Icon :name="item.icon" /></span>
                <span class="menu-copy">
                  <span class="menu-title">{{ item.name }}</span>
                  <span class="menu-description">{{ item.description }}</span>
                </span>
              </NuxtLink>
            </DropdownMenuItem>
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
    <!-- <li class="pb-4 hidden min-[850px]:block">
      <Button
        class="text-white bg-primary py-4 px-4 text-sm sm:text-base sm:px-8 font-bold font-nunito"
        >Request a demo
      </Button>
    </li> -->
  </ul>
</template>

<style scoped>
ul > li > .router-link-exact-active {
  @apply text-primary border-b-2 border-b-primary pb-1;
}

.header-dropdown {
  width: min(820px, calc(100vw - 32px));
  max-height: min(80vh, var(--radix-dropdown-menu-content-available-height));
  overflow-y: auto;
  padding: 20px;
  border: 1px solid #e5e7eb;
  border-radius: 16px;
  background: white;
  box-shadow: 0 18px 50px -16px rgb(15 23 42 / 22%);
  @apply font-nunito;
}

.solution-groups,
.industry-grid {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 4px 24px;
}

.menu-group + .menu-group {
  border-left: 1px solid #eeeeee;
  padding-left: 24px;
}

.menu-heading {
  margin: 0 0 12px;
  padding: 0 10px 12px;
  border-bottom: 1px solid #eeeeee;
  color: #737373;
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
}

.menu-items {
  display: grid;
  gap: 4px;
}

.menu-link {
  display: flex;
  align-items: flex-start;
  gap: 12px;
  min-height: 76px;
  padding: 10px;
  border-radius: 8px;
  cursor: pointer;
  white-space: normal;
  transition: background-color 150ms ease;
}

.menu-link:hover,
.menu-link:focus,
.menu-link[data-highlighted] {
  background: #fff1f2;
  outline: none;
}

.menu-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  flex: 0 0 32px;
  height: 32px;
  border: 1px solid #fee2e2;
  border-radius: 8px;
  background: #fff7f7;
  font-size: 18px;
  @apply text-primary;
}

.menu-copy { min-width: 0; }
.menu-title {
  display: block;
  color: #262626;
  font-size: 14px;
  font-weight: 700;
  line-height: 20px;
}
.menu-description {
  display: block;
  margin-top: 3px;
  color: #737373;
  font-size: 12px;
  line-height: 17px;
}
</style>
