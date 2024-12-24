<template>
  <div class="wrapper">
    <div class="bg-secondary rounded-[20px] px-6 text-white overflow-hidden">
      <div class="rounded-xl px-14 flex flex-col md:flex-row gap-10">
        <div class="md:w-7/12 py-20">
          <h5 class="font-bold font-grifter text-2xl">
            Promotions of events, exhibitions and conferences
          </h5>
          <p class="py-2">
            IDM has rich experience in promoting exhibitions like Propak West
            Africa, ConMin, Cashless Africa, Indo-Africa, and many more.,
            through our well -equipped automated call center & verified database
            of the different Industry segments. We offer the following services
            to companies in the areas of exhibitions / conferences:
          </p>
          <ul class="list-disc pl-5 space-y-2">
            <li>Data base creation / search with in industry segments.</li>
            <li>
              Identification & contact data gathering of the key decision makers
              / influencers within the organization.
            </li>
            <li>
              Introducing / Promoting the exhibition / conference to the target
              audience via Phone call / email / SMS /
            </li>
            <li>Registration / Reminder services for the event.</li>
          </ul>

          <Button
            class="hover:bg-primary cursor-pointer bg-primary text-white font-medium space-x-2 mt-8"
            @click="navigateTo('/contact')"
          >
            Learn more
          </Button>
        </div>
        <div class="md:w-5/12 space-y-8">
          <img :src="event1" alt="" class="w-full" />
          <img :src="event2" alt="" class="w-full" />
          <img :src="event3" alt="" class="w-full" />
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { event1, event2, event3 } from "../lib/images";
</script>

<style scoped></style>
