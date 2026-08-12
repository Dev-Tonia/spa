<template>
  <section class="py-16 bg-secondary" id="key_modules">
    <div class="wrapper">
      <!-- section title -->
      <div class="py-4">
        <h3
          class="font-grifter text-white font-bold text-3xl sm:text-4xl lg:text-5xl xl:text-6xl py-2"
        >
          Key Modules incorporated in The School Manager (TSM)
        </h3>

        <p class="py-4 text-lg md:text-xl text-[#7A7474]">
          The modules cover complete Student Life Cycle, Management and
          Academics respectively with an in-built provision of sending important
          alerts and notifications to the parents, teachers and the students
        </p>
      </div>

      <!-- first card section -->
      <div class="md:flex items-end space-y-3 md:space-y-0 gap-5 my-5">
        <S4HanaS4card
          :data="{
            title: 'Admissions Management System',
            description: `Our Admissions Management solution simplifies the entire admissions process, from managing registrations to tracking follow-ups. It streamlines workflows for counselors while providing principals and management with real-time insights through daily MIS reports on inquiries, registrations, admissions, and withdrawals. The system allows data comparison with previous years, ensuring efficient student tracking at all stages.`,
          }"
          class="md:w-1/2"
        >
          <div class="mt-10 grid grid-cols-1 min-[520px]:grid-cols-2 ">
            <img
              :src="ams1"
              alt="Financial image 2 "
              class="w-full max-w-[420px] justify-self-start rounded-lg object-cover shadow-sm"
              loading="lazy"
            />
            <img
              :src="ams2"
              alt="Financial image 1"
              class="w-full max-w-[420px] justify-self-end rounded-lg object-cover shadow-sm min-[520px]:mt-12"
              loading="lazy"
            />
          </div>
        </S4HanaS4card>
        <S4HanaS4card
          :data="{
            title: 'Student Management System',
            description: `Our Student Information System allows schools to monitor each student’s growth through detailed profiles with historical tracking. It streamlines key processes like promotion, suspension, and withdrawals, integrates with fees and attendance, and supports paperless document management. Standard features include data filtering, searching, and generating over 15 statutory reports.`,
          }"
          class="md:w-1/2"
        >
          <div class="mt-10 grid grid-cols-1 min-[520px]:grid-cols-2 ">
            <img
              :src="sms1"
              alt="Financial image 2"
              class="w-full max-w-[420px] justify-self-start rounded-lg object-cover shadow-sm"
              loading="lazy"
            />
            <img
              :src="sms2"
              alt="Financial image 1"
              loading="lazy"
              class="w-full max-w-[420px] justify-self-end rounded-lg object-cover shadow-sm min-[520px]:mt-12"
            />
          </div>
        </S4HanaS4card>
      </div>

      <!-- second card section -->
      <div
        class="flex flex-wrap md:items-end md:justify-center lg:justify-start lg:flex-nowrap gap-5 my-5"
      >
        <S4HanaS4card
          :data="{
            title: 'Attendance Management',
            description: `Our Student Attendance Module offers real-time attendance tracking for schools and parents, with a dashboard displaying absent students and daily attendance filtered by section or student. Teachers can record attendance via a mobile app, while leave applications are managed online. Principals and management can analyze attendance statistics through graphical reports.`,
          }"
          class="w-full md:w-[40%] lg:w-1/3"
        >
          <div class="pt-10">
            <img :src="am" alt="PP image  " loading="lazy" class="" />
          </div>
        </S4HanaS4card>
        <S4HanaS4card
          :data="{
            title: 'Examination and Grading System',
            description: `Our Examination Module allows schools to assess student performance through detailed mark, grade, and remark entries. Customized report cards can be generated, printed, and published online or via the mobile app. Schools can also extract teacher performance reports, while conducting graphical and range analyses to track overall progress effectively.`,
          }"
          class="w-full md:w-[40%] lg:w-1/3"
        >
          <div class="pt-10">
            <img :src="egs" alt="SD image " loading="lazy" class="" />
          </div>
        </S4HanaS4card>
        <S4HanaS4card
          :data="{
            title: 'Lesson Planning',
            description: `Our Lesson Planning Module simplifies the complex task of planning the academic year's curriculum, helping schools organize and assign sessions efficiently. It features a Teacher’s Calendar with lesson plans, schedules, and statuses, viewable by authorities. The module is fully customizable, allowing teachers to modify fields and create personalized lesson plans to meet specific needs.`,
          }"
          class="w-full md:w-[40%] lg:w-1/3"
        >
          <div class="pt-10">
            <img :src="lp" alt=" Integration image  " loading="lazy" class="" />
          </div>
        </S4HanaS4card>
      </div>

      <!-- third card section -->
      <div class="md:flex items-end space-y-3 md:space-y-0 gap-5 my-5">
        <S4HanaS4card
          :data="{
            title: 'Library Management',
            description: `Our Library Management Module provides a comprehensive dashboard for managing multiple libraries, with an ISBN auto-fill feature for book details and barcode creation. It efficiently manages books and periodicals, allowing schools to generate reports on issued, returned, and pending books. The system streamlines library operations and enhances organization.`,
          }"
          class="md:w-1/2"
        >
          <div class="mt-10 grid grid-cols-1 min-[520px]:grid-cols-2 ">
            <img
              :src="lm1"
              alt="Financial image 2 "
              class="w-full max-w-[420px] justify-self-start rounded-lg object-cover shadow-sm"
              loading="lazy"
            />
            <img
              :src="lm2"
              alt="Financial image 1"
              class="w-full max-w-[420px] justify-self-end rounded-lg object-cover shadow-sm min-[520px]:mt-12"
              loading="lazy"
            />
          </div>
        </S4HanaS4card>
        <S4HanaS4card
          :data="{
            title: 'Employee Management System',
            description: `Our Staff Management Module helps schools maintain detailed employee profiles, with customizable fields to suit specific needs. It manages records of qualifications, employment history, promotions, and class allocations, while tracking document expiration and renewal deadlines. This system ensures organized, up-to-date records for teachers, administrative staff, and other personnel.`,
          }"
          class="md:w-1/2"
        >
          <div class="mt-10 grid grid-cols-1 min-[520px]:grid-cols-2">
            <img
              :src="ems1"
              alt="Financial image 2"
              class="w-full max-w-[420px] justify-self-start rounded-lg object-cover shadow-sm"
              loading="lazy"
            />
            <img
              :src="ems2"
              alt="Financial image 1"
              loading="lazy"
              class="w-full max-w-[420px] justify-self-end rounded-lg object-cover shadow-sm min-[520px]:mt-12"
            />
          </div>
        </S4HanaS4card>
      </div>
    </div>
  </section>
</template>

<script setup lang="ts">
import {
  sms1,
  sms2,
  ams1,
  ams2,
  lp,
  am,
  egs,
  lm1,
  lm2,
  ems1,
  ems2,
} from "../../lib/images";
</script>

<style scoped></style>
