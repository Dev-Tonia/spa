<script setup>
import { ref } from "vue";
const props = defineProps({
  isOpen: { type: Boolean },
  updateIsOpen: {
    type: Function,
  },
});
const isMenuOpen = ref(false);
const dropdownOpen = ref(null);

function toggleMenu() {
  isMenuOpen.value = !isMenuOpen.value;
}

function closeMenu() {
  isMenuOpen.value = false;
}

function toggleDropdown(section) {
  dropdownOpen.value = dropdownOpen.value === section ? null : section;
}

/**
 *     <div
      class="fixed inset-y-0 left-0 w-64 bg-white z-50 transform"
      :class="{ '-translate-x-full': !isOpen, 'translate-x-0': isOpen }"
      transition
    >
      <nav class="p-4 space-y-4">
        <!-- Nav Links -->
        <a href="#" class="text-red-500 font-bold text-lg">Home</a>
        <div class="space-y-4">
          <div>
            <button
              @click="toggleDropdown('service')"
              class="w-full flex items-center justify-between"
            >
              <span>Service</span>
              <svg
                :class="dropdownOpen === 'service' ? 'rotate-180' : ''"
                class="transform w-4 h-4 transition-transform"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <path d="M6 9l6 6 6-6"></path>
              </svg>
            </button>
            <div v-if="dropdownOpen === 'service'" class="pl-4">
              <!-- Dropdown items -->
              <a href="#" class="block">Service 1</a>
              <a href="#" class="block">Service 2</a>
            </div>
          </div>
          <div>
            <button
              @click="toggleDropdown('industries')"
              class="w-full flex items-center justify-between"
            >
              <span>Industries</span>
              <svg
                :class="dropdownOpen === 'industries' ? 'rotate-180' : ''"
                class="transform w-4 h-4 transition-transform"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <path d="M6 9l6 6 6-6"></path>
              </svg>
            </button>
            <div v-if="dropdownOpen === 'industries'" class="pl-4">
              <a href="#" class="block">Industry 1</a>
              <a href="#" class="block">Industry 2</a>
            </div>
          </div>
          <div>
            <button
              @click="toggleDropdown('solutions')"
              class="w-full flex items-center justify-between"
            >
              <span>Solutions</span>
              <svg
                :class="dropdownOpen === 'solutions' ? 'rotate-180' : ''"
                class="transform w-4 h-4 transition-transform"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <path d="M6 9l6 6 6-6"></path>
              </svg>
            </button>
            <div v-if="dropdownOpen === 'solutions'" class="pl-4">
              <a href="#" class="block">Solution 1</a>
              <a href="#" class="block">Solution 2</a>
            </div>
          </div>
        </div>
        <a href="#">About Us</a>
        <a href="#">Contact Us</a>
        <!-- Call to action button -->
        <a href="#" class="bg-red-500 text-white text-center py-2 px-4 rounded"
          >Request a demo</a
        >
      </nav>
    </div>
 */
</script>

<template>
  <div
    :class="[
      'fixed h-full inset-0 flex  items-center  z-10 transition-transform duration-300 ease-in-out',
      isOpen ? 'translate-x-0' : '-translate-x-full',
    ]"
  >
    <!-- Overlay -->
    <div
      @click="updateIsOpen"
      class="bg-black bg-opacity-80 absolute inset-0"
    ></div>

    <LayoutNavList
      class="bg-white h-full pt-[80px] overflow-y-auto z-30 wrapper"
    />
  </div>
</template>
