<script setup>
const isOpen = ref(false);

function updateIsOpen() {
  isOpen.value = !isOpen.value;
}
</script>

<template>
  <header class="sticky top-0 text-baseBlack z-30 w-full">
    <nav class="wrapper py-5 backdrop-blur bg-white/75">
      <div class="flex items-center justify-between">
        <div class="flex items-center space-x-5">
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
        <LayoutNavList
          class="min-[850px]:flex hidden"
          :isOpen="isOpen"
          :updateIsOpen="updateIsOpen"
        />
        <Button
          class="text-white bg-primary py-4 px-4 text-sm sm:text-base sm:px-8 font-bold font-nunito hidden xl:inline-flex"
          >Request a demo
        </Button>
        <Icon
          @click="updateIsOpen"
          name="ri:menu-fill"
          class="text-3xl text-secondary min-[850px]:hidden cursor-pointer"
        />
      </div>
    </nav>
  </header>
  <LayoutMobileNavbar
    :isOpen="isOpen"
    :updateIsOpen="updateIsOpen"
    class="min-[850px]:hidden"
  />

  <main class="">
    <slot></slot>
  </main>
  <LayoutFooter />
</template>

<style scoped></style>
