<script setup>
// const { value } = defineProps([{}]);
defineProps({
  label: {
    type: [String, Boolean],
    default: false,
  },
  modelValue: {
    type: String,
    default: "",
  },
  placeHolder: {
    type: String,
    default: "",
  },
  id: {
    type: String,
    default: "",
  },
  type: {
    type: String,
    default: "text",
  },
  error: {
    type: Boolean,
    default: true,
  },
});
</script>

<template>
  <!-- Email input -->
  <div class="relative mb-4">
    <label v-if="label" :for="id" class="text-sm leading-7 text-gray-400">{{
      label
    }}</label>
    <div class="relative">
      <input
        :type="type"
        :id="id"
        :name="id"
        :placeholder="placeHolder"
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        v-bind="$attrs"
        class="w-full rounded border border-gray-600 bg-transparent bg-opacity-20 py-1 px-3 text-base leading-8 text-white outline-none transition-colors duration-200 ease-in-out placeholder:text-gray-500 focus:border-blue-500 focus:bg-transparent focus:ring-2 focus:ring-transparent"
        :class="{
          'border-red-500 focus:border-red-500': error,
          'border-[#42d392] ': !error,
        }"
      />
    </div>
  </div>
</template>
<style scoped>
input[type="text"]:disabled::placeholder {
  @apply text-gray-400 font-bold;
}
input::placeholder {
  @apply text-sm text-gray-400;
}
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type="number"] {
  -moz-appearance: textfield;
}
</style>
