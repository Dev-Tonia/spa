<template>
  <ClientOnly>
    <Teleport to="body">
      <div
        class="px-4 pb-4 text-white fixed top-8 right-0 mx-2 w-full sm:w-8/12 lg:w-1/2"
        :class="{ ' bg-red-500': error, 'bg-green-600': !error }"
      >
        <div
          class="text-4xl flex justify-end"
          :class="{ 'text-white': error, 'text-red-500': !error }"
        >
          <span class="cursor-pointer" @click="closeModal">
            <i class="ri-close-line"></i
          ></span>
        </div>
        <div class="note">
          <pre>
              {{ data }}
            </pre
          >
        </div>
      </div>
    </Teleport>
  </ClientOnly>
</template>
<script setup>
const { data, error } = defineProps(["data", "error"]);
const emit = defineEmits(["close-modal"]);
function closeModal() {
  emit("close-modal");
}
</script>
