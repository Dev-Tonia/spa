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
    <HomeGallery />
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
        class="w-full max-w-5xl overflow-hidden rounded-3xl bg-white shadow-2xl"
      >
        <img
          :src="selectedTestimony.image"
          :alt="selectedTestimony.name"
          class="h-[70vh] w-full object-contain bg-black/5"
        />
        <div class="p-6">
          <h3 class="font-grifter text-2xl font-bold text-baseBlack">
            {{ selectedTestimony.name }}
          </h3>
          <p class="mt-3 text-base text-neutral-600">
            {{ selectedTestimony.description }}
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
