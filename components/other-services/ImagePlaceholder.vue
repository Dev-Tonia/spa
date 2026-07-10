<template>
  <div
    class="relative flex min-h-56 items-center justify-center overflow-hidden rounded-2xl border border-dashed border-neutral-300 bg-neutral-100"
    role="img"
    :aria-label="`Placeholder for ${label} image`"
  >
    <div class="absolute -right-10 -top-10 h-32 w-32 rounded-full bg-primary/10" />
    <div class="absolute -bottom-12 -left-8 h-36 w-36 rounded-full bg-secondary/10" />
    <div class="relative text-center text-neutral-500">
      <Icon :name="icon" class="mx-auto mb-3 text-5xl text-primary" />
      <p class="text-sm font-semibold">Image placeholder</p>
      <p class="mt-1 text-xs">{{ label }}</p>
    </div>
  </div>
</template>

<script setup lang="ts">
withDefaults(
  defineProps<{
    label: string;
    icon?: string;
  }>(),
  {
    icon: "ph:image-square",
  },
);
</script>
