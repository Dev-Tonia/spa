<script setup>
// import LayoutFooter from "@/components/LayoutFooter.vue";
</script>

<template>
  <header class="sticky top-0 text-baseBlack z-20 w-full">
    <nav class="wrapper py-5 backdrop-blur bg-white/75">
      <div
        class="flex items-center min-[930px]:flex-col min-[1005px]:flex-row justify-between"
      >
        <NuxtLink to="/" class="">
          <div class="h-10">
            <img
              src="../assets/imgs/idm_logo.png"
              alt="IDM-Logo"
              class="h-full"
            />
          </div>
        </NuxtLink>
        <LayoutNavList />
        <Button class="text-white bg-primary py-4 px-8 font-bold font-nunito"
          >Request a demo
        </Button>
      </div>
    </nav>
  </header>

  <main>
    <slot></slot>
  </main>
  <LayoutFooter />
</template>

<style scoped></style>
