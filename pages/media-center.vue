<script setup>
import { ref } from "vue";
import HomeGallery from "@/components/home/Gallery.vue";
import slotImage from "@/assets/imgs/image_gallery/slot.png";
import triumphImage from "@/assets/imgs/image_gallery/Triumph.png";
import veepeeImage from "@/assets/imgs/image_gallery/veepee.png";
import midgaImage from "@/assets/imgs/image_gallery/midgal-simba.png";
import polyProductImage from "@/assets/imgs/image_gallery/poly-product.png";
import hoeschImage from "@/assets/imgs/image_gallery/Hoesch.png";

const tabs = [
  { key: "media", label: "Media Center" },
  { key: "testimonies", label: "Testimonies" },
];

const activeTab = ref("media");
const selectedTestimony = ref(null);

const testimonies = [
  {
    name: "Slot",
    image: slotImage,
    description: "A valued partnership built on trust and shared innovation.",
  },
  {
    name: "Triumph",
    image: triumphImage,
    description:
      "Strengthening delivery through reliable collaboration and tailored solutions.",
  },
  {
    name: "Veepee",
    image: veepeeImage,
    description: "Driving growth with modern technology and strategic support.",
  },
  {
    name: "Midga Simba",
    image: midgaImage,
    description: "Creating long-term business impact with measurable outcomes.",
  },
  {
    name: "Poly-Product",
    image: polyProductImage,
    description:
      "Supporting transformation with practical, scalable technology services.",
  },
  {
    name: "Hoesch",
    image: hoeschImage,
    description: "A dependable partner focused on performance and excellence.",
  },
];

function openTestimony(item) {
  selectedTestimony.value = item;
}

function closeTestimony() {
  selectedTestimony.value = null;
}
</script>

<template>
  <div>
    <section class="bg-neutral-50 py-8 sm:py-10">
      <div class="wrapper">
        <div
          class="flex flex-wrap justify-center gap-3 rounded-full border border-neutral-200 bg-white p-2 shadow-sm"
        >
          <button
            v-for="tab in tabs"
            :key="tab.key"
            type="button"
            @click="activeTab = tab.key"
            :class="[
              'rounded-full px-5 py-2 text-sm font-semibold transition',
              activeTab === tab.key
                ? 'bg-baseBlack text-white shadow-sm'
                : 'bg-white text-neutral-700 hover:bg-neutral-100',
            ]"
          >
            {{ tab.label }}
          </button>
        </div>
      </div>
    </section>

    <HomeGallery v-if="activeTab === 'media'" />

    <section v-else class="bg-white py-16">
      <div class="wrapper">
        <div class="mb-10 text-center">
          <h2
            class="font-grifter text-3xl font-bold text-baseBlack sm:text-4xl"
          >
            Testimonies
          </h2>
          <p class="mt-3 text-neutral-600">
            Trusted by leading organizations across industries.
          </p>
        </div>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
          <button
            v-for="item in testimonies"
            :key="item.name"
            type="button"
            @click="openTestimony(item)"
            class="flex flex-col overflow-hidden rounded-3xl border border-neutral-200 bg-neutral-50 text-left shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"
          >
            <div class="flex h-56 items-center justify-center bg-white p-6">
              <img
                :src="item.image"
                :alt="item.name"
                loading="lazy"
                class="max-h-full max-w-full object-contain"
              />
            </div>
            <div class="p-5">
              <h3 class="font-semibold text-baseBlack">{{ item.name }}</h3>
              <p class="mt-2 text-sm text-neutral-600">
                {{ item.description }}
              </p>
            </div>
          </button>
        </div>
      </div>
    </section>

    <div
      v-if="selectedTestimony"
      class="fixed inset-0 z-50 grid place-items-center bg-black/70 p-4"
    >
      <button
        type="button"
        @click="closeTestimony"
        class="absolute right-4 top-4 inline-flex h-11 w-11 items-center justify-center rounded-full bg-white text-baseBlack shadow-lg transition hover:bg-neutral-100"
        aria-label="Close testimony"
      >
        ×
      </button>

      <div
        class="w-full max-w-4xl overflow-hidden rounded-3xl bg-white shadow-2xl"
      >
        <div
          class="flex h-[70vh] items-center justify-center bg-neutral-50 p-6"
        >
          <img
            :src="selectedTestimony.image"
            :alt="selectedTestimony.name"
            class="max-h-full max-w-full object-contain"
          />
        </div>
        <div class="p-6">
          <h3 class="font-grifter text-2xl font-bold text-baseBlack">
            {{ selectedTestimony.name }}
          </h3>
          <p class="mt-3 text-base text-neutral-600">
            {{
              testimonies.find((item) => item.name === selectedTestimony.name)
                ?.description
            }}
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
