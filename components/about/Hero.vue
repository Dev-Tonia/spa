<script setup>
import { aboutUsImg } from "../../lib/images";
import { aboutImg } from "../../lib/images";
</script>

<template>
  <section>
    <div class="wrapper py-16">
      <div class="flex gap-10">
        <div
          class="w-5/12 h-[419px] hidden min-[800px]:block overflow-hidden rounded-lg"
        >
          <img :src="aboutUsImg" alt="" class="w-full h-auto object-contain" />
        </div>
        <div class="min-[800px]:w-7/12">
          <small class="text-baseBlack text-lg">About Us</small>

          <CommonSectionTitle
            :data="{
              title: 'We Are Increasing Business Success With IT Solution',
              description: `  International Data Management Services Limited (IDM), incorporated
            in Nigeria in the year 1981 is affiliated with Comcraft Services
            Limited, United Kingdom. Partnering with SAP, IDM specializes in
            implementing SAP based ERP, SCM & CRM system for mid- sized growing
            enterprises. IDM also specializes in teaching latest IT technology
            with world class curriculum in schools in affiliation with the
            Oxford University Press.`,
            }"
          />
        </div>
      </div>
      <div class="mt-10">
        <img :src="aboutImg" alt="" class="w-full h-fit" />
      </div>
    </div>
  </section>
</template>

<style lang="scss" scoped></style>
