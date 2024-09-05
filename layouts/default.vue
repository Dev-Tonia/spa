<script setup>
// import LayoutFooter from "@/components/LayoutFooter.vue";
</script>

<template>
  <header class="sticky top-0 text-baseBlack z-20 w-full">
    <nav class="wrapper py-5 backdrop-blur bg-white/75">
      <div class="flex items-center justify-between">
        <div class="flex items-center space-x-5">
          <Icon
            name="ri:menu-fill"
            class="text-3xl text-secondary min-[980px]:hidden"
          />
          <NuxtLink to="/" class=" ">
            <div class="h-9 sm:h-10">
              <img
                src="../assets/imgs/idm_logo.png"
                alt="IDM-Logo"
                class="h-full"
              />
            </div>
          </NuxtLink>
        </div>
        <LayoutNavList class="min-[980px]:flex hidden" />
        <Button
          class="text-white bg-primary py-4 px-4 text-sm sm:text-base sm:px-8 font-bold font-nunito"
          >Request a demo
        </Button>
      </div>
    </nav>
  </header>

  <main class="border-4 border-primary">
    <slot></slot>
  </main>
  <LayoutFooter />
</template>

<style scoped></style>
