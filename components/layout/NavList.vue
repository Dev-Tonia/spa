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
    class="nav-list min-[850px]:space-x-5 font-semibold font-nunito text-sm lg:text-base min-[850px]:items-center flex flex-col min-[850px]:flex-row w-1/2 min-[850px]:w-auto"
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
@media (min-width: 850px) and (max-width: 1085px) {
  .nav-list {
    flex: 1;
    justify-content: flex-end;
    gap: clamp(10px, 1.4vw, 15px);
    font-size: 14px;
    line-height: 22px;
  }

  .nav-list > li {
    margin-left: 0;
    flex-shrink: 0;
    white-space: nowrap;
  }

  .nav-list :deep(button) {
    gap: 4px;
  }

  .nav-list :deep(button > :last-child) {
    margin-left: 0;
  }
}

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
  margin: 0 0 14px;
  padding: 0 12px 14px;
  border-bottom: 2px solid #fee2e2;
  color: #262626;
  font-size: 22px;
  font-weight: 800;
  line-height: 28px;
  letter-spacing: -0.02em;
}

.menu-items {
  display: grid;
  gap: 6px;
}

.menu-link {
  display: flex;
  align-items: flex-start;
  gap: 14px;
  min-height: 78px;
  padding: 12px;
  border-radius: 10px;
  cursor: pointer;
  white-space: normal;
  transition: background-color 150ms ease, box-shadow 150ms ease;
}

.menu-link:hover,
.menu-link:focus,
.menu-link[data-highlighted] {
  background: #fff1f2;
  outline: none;
}

.menu-link:focus-visible {
  box-shadow: inset 0 0 0 2px #fca5a5;
}

.menu-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  flex: 0 0 36px;
  height: 36px;
  border: 1px solid #fee2e2;
  border-radius: 8px;
  background: #fff7f7;
  font-size: 20px;
  @apply text-primary;
}

.menu-copy { min-width: 0; }
.menu-title {
  display: block;
  color: #262626;
  font-size: 15px;
  font-weight: 700;
  line-height: 22px;
}
.menu-description {
  display: block;
  margin-top: 4px;
  color: #626262;
  font-size: 13px;
  line-height: 19px;
}
</style>
