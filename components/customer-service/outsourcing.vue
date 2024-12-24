<template>
  <div class="wrapper">
    <div
      class="rounded-xl py-10 px-14 flex flex-col md:flex-row gap-14 bg-[#FAFAFA]"
    >
      <div class="md:w-7/12">
        <img :src="outsourcing" alt="" class="w-full" />
      </div>
      <div class="md:w-5/12">
        <h5
          :class="[
            ' font-bold font-grifter text-2xl md:text-3xl text-baseBlack',
          ]"
        >
          Customer service outsourcing
        </h5>
        <p :class="['py-5 text-lg md:text-xl font-medium text-neutral-500']">
          As a leading customer service outsourcing company, IDM specializes in
          enhancing call center processes to ensure exceptional customer
          support. With professional agents handling inbound and outbound
          interactions across phone, email, social media, and mobile, we help
          maintain positive customer relationships. IDM prioritizes consistency,
          professionalism, and efficiency, working closely with your team to
          create seamless, tailored solutions that make outsourcing customer
          service simple and effective.
        </p>
        <Button
          class="hover:bg-primary cursor-pointer bg-primary text-white font-medium space-x-2"
          @click="navigateTo('/contact')"
        >
          Learn more
        </Button>
      </div>
    </div>
  </div>
</template>

<script setup>
import { outsourcing } from "../lib/images";
</script>

<style lang="scss" scoped></style>
