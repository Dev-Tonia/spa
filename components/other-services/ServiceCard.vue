<template>
  <article
    class="grid overflow-hidden rounded-2xl border border-neutral-200 bg-white shadow-sm md:grid-cols-2"
  >
    <div
      class="flex flex-col p-6 sm:p-8 lg:p-10"
      :class="index % 2 ? 'md:order-2' : ''"
    >
      <div class="mb-5 flex items-center gap-3">
        <span
          class="flex h-11 w-11 items-center justify-center rounded-xl bg-primary text-lg font-bold text-white"
        >
          {{ String(index + 1).padStart(2, "0") }}
        </span>
        <Icon :name="service.icon" class="text-3xl text-primary" />
      </div>
      <h2 class="font-grifter text-2xl font-bold text-baseBlack sm:text-3xl">
        {{ service.title }}
      </h2>
      <p class="mt-4 leading-7 text-neutral-600">{{ service.description }}</p>

      <div v-if="service.features?.length" class="mt-6">
        <h3 class="text-sm font-bold uppercase tracking-wider text-baseBlack">
          {{ service.featureTitle || "What we offer" }}
        </h3>
        <ul class="mt-3 grid gap-2 sm:grid-cols-2">
          <li
            v-for="feature in service.features"
            :key="feature"
            class="flex items-start gap-2 text-sm leading-5 text-neutral-600"
          >
            <Icon
              name="ph:check-circle-fill"
              class="mt-0.5 shrink-0 text-primary"
            />
            <span>{{ feature }}</span>
          </li>
        </ul>
      </div>

      <NuxtLink
        :to="service.to || '/contact'"
        class="mt-7 inline-flex w-fit items-center gap-2 rounded-lg bg-primary px-4 py-2.5 text-sm font-bold text-white transition-colors hover:bg-secondary"
      >
        {{ service.to ? "View service" : "Talk to our team" }}
        <Icon name="ri:arrow-right-line" class="text-lg" />
      </NuxtLink>
    </div>

    <!-- <div
      class="bg-secondary/5 p-6 sm:p-8 lg:p-10"
      :class="index % 2 ? 'md:order-1' : ''"
    >
      <img
        v-if="service.image"
        :src="service.image"
        :alt="`${service.title} illustration`"
        class="h-full min-h-20 w-full rounded-2xl object-cover"
      />
      <OtherServicesImagePlaceholder
        v-else
        class="h-full"
        :label="service.title"
        :icon="service.icon"
      />
    </div> -->

    <div
      class="min-h-0 bg-secondary/5 p-6 sm:p-8 lg:p-10"
      :class="index % 2 ? 'md:order-1' : ''"
    >
      <div
        v-if="service.image"
        class="h-[400px] bg-white rounded-2xl overflow-hidden w-[400px] mx-auto"
      >
        <img
          :src="service.image"
          :alt="`${service.title} illustration`"
          class="h-full w-full object-contain"
        />
      </div>
      <OtherServicesImagePlaceholder
        v-else
        class="h-full"
        :label="service.title"
        :icon="service.icon"
      />
    </div>
  </article>
</template>

<script setup lang="ts">
defineProps<{
  service: {
    title: string;
    description: string;
    icon: string;
    image?: string | null;
    to?: string;
    featureTitle?: string;
    features?: string[];
  };
  index: number;
}>();
</script>
