<template>
  <section class="py-16 bg-neutral-50" id="gallery">
    <div class="wrapper">
      <div class="mb-10 text-center sm:mb-14">
        <h2 class="font-grifter text-3xl font-bold text-baseBlack sm:text-4xl">
          Image Gallery
        </h2>
        <p class="mt-3 text-neutral-600">
          Explore IDM’s technology, training, and customer solutions in action.
        </p>
      </div>

      <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
        <button
          v-for="(image, index) in images"
          :key="image.alt"
          type="button"
          @click="openImage(index)"
          class="group overflow-hidden rounded-3xl border border-neutral-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"
        >
          <img
            :src="image.src"
            :alt="image.alt"
            class="h-60 w-full object-cover transition duration-300 group-hover:scale-105"
          />
          <div class="p-5 text-left">
            <h3 class="font-semibold text-baseBlack">{{ image.title }}</h3>
            <p class="mt-2 text-sm text-neutral-500">{{ image.caption }}</p>
          </div>
        </button>
      </div>

      <div
        v-if="selectedImage !== null"
        class="fixed inset-0 z-50 grid place-items-center bg-black/70 p-4"
      >
        <button
          type="button"
          @click="closeImage"
          class="absolute right-4 top-4 inline-flex h-11 w-11 items-center justify-center rounded-full bg-white text-baseBlack shadow-lg transition hover:bg-neutral-100"
          aria-label="Close image preview"
        >
          ×
        </button>

        <div
          class="w-full max-w-5xl overflow-hidden rounded-3xl bg-white shadow-2xl"
        >
          <img
            :src="images[selectedImage].src"
            :alt="images[selectedImage].alt"
            class="h-[70vh] w-full object-contain bg-black/5"
          />
          <div class="p-6">
            <h3 class="font-grifter text-2xl font-bold text-baseBlack">
              {{ images[selectedImage].title }}
            </h3>
            <p class="mt-3 text-neutral-600">
              {{ images[selectedImage].caption }}
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup lang="ts">
import { ref } from "vue";
import aiRoboticsTraining from "@/assets/imgs/ai-robotics-training.png";
import idmSchool from "@/assets/imgs/idm@school.png";
import cloud from "@/assets/imgs/cloud.png";
import sapHana from "@/assets/imgs/sap-hana.png";
import powerBi from "@/assets/imgs/powerBi.png";
import robotics from "@/assets/imgs/robotics.png";
import coding from "@/assets/imgs/coding.png";
import customerCareHero from "@/assets/imgs/customer-care-hero.png";

interface GalleryImage {
  title: string;
  caption: string;
  src: string;
  alt: string;
}

const images: GalleryImage[] = [
  {
    title: "AI & Robotics Training",
    caption: "Hands-on learning for tomorrow’s technology leaders.",
    src: aiRoboticsTraining,
    alt: "AI robotics training",
  },
  {
    title: "IDM@School Program",
    caption: "Building future-ready skills across classrooms and labs.",
    src: idmSchool,
    alt: "IDM school program",
  },
  {
    title: "Cloud and Infrastructure",
    caption: "Modern cloud solutions that power business transformation.",
    src: cloud,
    alt: "Cloud infrastructure services",
  },
  {
    title: "SAP HANA Solutions",
    caption: "Fast, intelligent business systems for enterprise growth.",
    src: sapHana,
    alt: "SAP HANA solutions",
  },
  {
    title: "Power BI Analytics",
    caption: "Visualizing data to reveal insights and drive better decisions.",
    src: powerBi,
    alt: "Power BI analytics",
  },
  {
    title: "Robotic Automation",
    caption: "Designing automation solutions for smarter business operations.",
    src: robotics,
    alt: "Robotic automation",
  },
  {
    title: "Coding & Development",
    caption: "Creative software projects that bring ideas to life.",
    src: coding,
    alt: "Coding development",
  },
  {
    title: "Customer Care Services",
    caption: "Supporting clients with responsive, professional service.",
    src: customerCareHero,
    alt: "Customer care services",
  },
];

const selectedImage = ref<number | null>(null);

function openImage(index: number) {
  selectedImage.value = index;
}

function closeImage() {
  selectedImage.value = null;
}
</script>
