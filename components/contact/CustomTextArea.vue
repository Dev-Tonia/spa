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

  error: {
    type: Boolean,
    default: false,
  },
});
</script>

<template>
  <div class="relative mb-4">
    <label v-if="label" :for="id" class="text-sm leading-7 text-gray-400">{{
      label
    }}</label>
    <div class="relative">
      <textarea
        rows="6"
        :id="id"
        :name="id"
        :placeholder="placeHolder"
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        v-bind="$attrs"
        class="w-full rounded border border-gray-600 bg-transparent bg-opacity-20 py-1 px-3 text-base leading-8 outline-none transition-colors duration-200 ease-in-out placeholder:text-gray-500 focus:border-blue-500 focus:bg-transparent focus:ring-2 focus:ring-transparent"
        :class="{
          'border-red-500 focus:border-red-500': error,
          'border-[#42d392] ': !error,
        }"
      ></textarea>
    </div>
  </div>
</template>
<style scoped>
textarea::placeholder {
  @apply text-sm text-gray-400;
}
</style>
