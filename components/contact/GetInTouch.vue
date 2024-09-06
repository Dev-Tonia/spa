<template>
  <section class="wrapper py-16 bg-secondary/5">
    <div class="grid min-[900px]:grid-cols-5 gap-10">
      <div class="min-[900px]:col-span-2">
        <h2 class="text-2xl font-semibold mb-2">Get In Touch</h2>
        <p class="text-[#908B8B] pb-3">
          Connect with our team to see how SAP can improve your company’s
          digital transformation.
        </p>
        <div class="mb-5 flex gap-5 items-center">
          <span
            class="inline-block bg-secondary text-white py-2 px-3 rounded-lg"
          >
            <Icon name="system-uicons:mail" class="text-4xl" />
          </span>
          <span>
            <a href="mailto:enquiry@idmng.com"> enquiry@idmng.com</a></span
          >
        </div>
        <div class="mb-5 flex gap-5 items-center">
          <span
            class="inline-block bg-secondary text-white py-2 px-3 rounded-lg"
          >
            <Icon name="ri-map-pin-fill" class="text-4xl" />
          </span>
          <span>
            28, Henry Carr Industrial Estate, Off Akanni Doherty Way, Guiness
            Bus/Stop, Ikeja, Lagos.</span
          >
        </div>
        <div class="mb-5 flex gap-5 items-center">
          <span
            class="inline-block bg-secondary text-white py-2 px-3 rounded-lg"
          >
            <Icon name="ri-smartphone-fill" class="text-4xl" />
          </span>
          <span class="flex flex-col">
            <a href="tel:+23456565656">+2345656565655</a>
          </span>
        </div>
      </div>
      <div class="min-[900px]:col-span-3">
        <ContactForm />
      </div>
    </div>
  </section>
</template>

<script setup></script>

<style lang="scss" scoped></style>
