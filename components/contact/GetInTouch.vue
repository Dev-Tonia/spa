<template>
  <section class="bg-[#F8FBFF] pt-5 pb-12">
    <div class="wrapper px-4 sm:px-6 lg:px-8">
      <div class="grid items-start gap-8 md:grid-cols-2 md:gap-10 mx-auto">
        <div class="max-w-xl justify-self-center md:justify-self-start">
          <h2 class="text-2xl font-semibold mb-2 text-[#12324D]">
            Get In Touch
          </h2>
          <p class="text-[#5C6B7A] pb-3">
            Connect with our team to see how SAP can improve your company’s
            digital transformation.
          </p>
          <div class="mb-5 flex gap-5 items-center">
            <span
              class="inline-block rounded-lg bg-[#2B6CB0] px-3 py-2 text-white"
            >
              <Icon name="system-uicons:mail" class="text-4xl" />
            </span>
            <span>
              <a href="mailto:enquiry@idmng.com"> enquiry@idmng.com</a>
            </span>
            <span>
              <a href="mailto:ticket@idmng.com"> ticket@idmng.com</a>
            </span>
          </div>
          <div class="mb-5 flex gap-5 items-center">
            <span
              class="inline-block rounded-lg bg-[#2B6CB0] px-3 py-2 text-white"
            >
              <Icon name="ri-map-pin-fill" class="text-4xl" />
            </span>
            <span>
              28, Henry Carr Industrial Estate, Off Akanni Doherty Way, Guiness
              Bus/Stop, Ikeja, Lagos.
            </span>
          </div>
          <div class="mb-5 flex gap-5 items-center">
            <span
              class="inline-block rounded-lg bg-[#2B6CB0] px-3 py-2 text-white"
            >
              <Icon name="ri-smartphone-fill" class="text-4xl" />
            </span>
            <span class="flex flex-col">
              <a href="tel:+23407011048875">+23407011048875</a>
            </span>
          </div>
        </div>
        <div class="w-full max-w-2xl justify-self-center md:justify-self-end">
          <ContactForm />
        </div>
      </div>
    </div>
  </section>
</template>

<script setup></script>

<style lang="scss" scoped></style>
