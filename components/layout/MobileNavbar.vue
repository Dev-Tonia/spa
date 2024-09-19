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
