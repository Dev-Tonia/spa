<template>
  <section class="bg-secondary py-16 text-white sm:py-20">
    <div class="wrapper">
      <div>
        <p class="text-sm font-bold uppercase tracking-[0.2em] text-primary">
          IDM Solutions
        </p>
        <h1
          class="mt-3 font-grifter text-4xl font-bold leading-tight sm:text-5xl lg:text-6xl"
        >
          Technology that keeps your business moving forward.
        </h1>
        <p class="mt-5 max-w-2xl text-lg leading-8 text-neutral-300 sm:text-xl">
          Explore the business software, integration, cloud, and support
          services IDM provides to help organizations work smarter and grow with
          confidence.
        </p>
        <NuxtLink
          to="#services"
          class="mt-7 inline-flex items-center gap-2 rounded-lg bg-primary px-5 py-3 font-bold text-white transition-colors hover:bg-white hover:text-secondary"
        >
          Explore services
          <Icon name="ri:arrow-down-line" class="text-xl" />
        </NuxtLink>
      </div>
      <!-- <OtherServicesImagePlaceholder
        class="min-h-64 border-white/20 bg-white/5 text-neutral-300"
        label="Other services"
        icon="ph:circles-four"
      /> -->
    </div>
  </section>

  <LazyOtherServices />
  <LazyCommonContact />
</template>

<script setup lang="ts">
useHead({ title: "Other Services | IDM" });
</script>
