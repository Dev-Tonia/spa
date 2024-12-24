<template>
  <LazyCommonReusableHero
    class="text-white"
    :data="{
      title: 'Customer Care Service',
      description: `IDM has established an international quality Voice based customer care center in Abeokuta Nigeria that offers employment to over 1000.`,

      img: customerCareHero,
    }"
    scroll-to="solutions"
  />
  <section class="bg-[#FAFAFA] py-16 my-8" id="solutions">
    <div class="wrapper">
      <LazyCommonSectionTitle
        :data="{
          title: 'Solutions we offer',
          description: `IDM is dedicated to developing a culture of Customer care development in Nigeria.`,
        }"
      />
    </div>
  </section>
  <LazyCustomerServiceSolutions class="my-10" />
  <LazyCustomerServiceOutsourcing class="my-10" />
  <LazyCustomerServiceEvents class="my-10" />
  <LazyCommonContact />
</template>

<script setup>
import { customerCareHero } from "../lib/images";
</script>

<style scoped></style>
