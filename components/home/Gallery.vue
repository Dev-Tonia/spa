<template>
  <section class="py-16 bg-neutral-50" id="gallery">
    <div class="wrapper">
      <div class="mb-10 text-center sm:mb-14">
        <h2 class="font-opensans text-3xl font-bold text-baseBlack sm:text-4xl">
          Media Center
        </h2>
        <p class="mt-3 text-neutral-600">
          Explore IDM’s technology, training, and customer solutions in action.
        </p>
      </div>

      <div class="mb-6 flex flex-wrap gap-3">
        <button
          v-for="tab in tabs"
          :key="tab.key"
          @click="currentTab = tab.key"
          :class="{
            'px-4 py-2 rounded-full border': true,
            'bg-baseBlack text-white': currentTab === tab.key,
            'bg-white text-baseBlack': currentTab !== tab.key,
          }"
        >
          {{ tab.label }}
        </button>
      </div>

      <div v-if="currentTab === 'brochure'" class="space-y-4">
        <p class="text-sm text-neutral-600">
          Browse brochures below — open in a new tab or download.
        </p>
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
          <div
            v-for="(item, idx) in filteredItems"
            :key="item.title + idx"
            class="rounded-2xl border bg-white p-4"
          >
            <h4 class="font-semibold">{{ item.title }}</h4>
            <p class="text-sm text-neutral-500 mt-1">{{ item.caption }}</p>
            <div class="mt-3 flex gap-2">
              <a
                :href="item.src"
                target="_blank"
                rel="noopener"
                class="inline-flex items-center gap-2 rounded-md bg-baseBlack px-3 py-2 text-white"
                >Open</a
              >
              <a
                :href="item.src"
                :download="item.downloadName || ''"
                class="inline-flex items-center gap-2 rounded-md border px-3 py-2"
                >Download</a
              >
            </div>
          </div>
        </div>
      </div>

      <div v-else-if="currentTab === 'testimonies'" class="space-y-4">
        <p class="text-sm text-neutral-600">
          Trusted by leading organizations across industries.
        </p>
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
          <button
            v-for="item in testimonies"
            :key="item.name"
            type="button"
            @click="openTestimony(item)"
            class="group overflow-hidden rounded-3xl border border-neutral-200 bg-white text-left shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"
          >
            <div class="h-60 w-full overflow-hidden bg-black/5">
              <img
                :src="item.image"
                :alt="item.name"
                loading="lazy"
                class="h-60 w-full object-cover transition duration-300 group-hover:scale-105"
              />
            </div>
            <div class="p-5 text-left">
              <h3 class="font-semibold text-baseBlack">{{ item.name }}</h3>
              <p class="mt-2 text-sm text-neutral-500">
                {{ item.description }}
              </p>
            </div>
          </button>
        </div>
      </div>

      <div v-else class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
        <button
          v-for="(media, index) in filteredItems"
          :key="media.alt + index"
          type="button"
          @click="openMedia(index)"
          class="group overflow-hidden rounded-3xl border border-neutral-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"
        >
          <div class="h-60 w-full overflow-hidden bg-black/5">
            <img
              v-if="media.type === 'image'"
              :src="media.src"
              :alt="media.alt"
              class="h-60 w-full object-cover transition duration-300 group-hover:scale-105"
            />
            <video
              v-else-if="media.type === 'video'"
              :src="media.src"
              class="h-60 w-full object-cover"
              muted
              playsinline
            />
            <div
              v-else
              class="h-60 w-full flex items-center justify-center text-sm text-neutral-500"
            >
              Unsupported
            </div>
          </div>
          <div v-if="currentTab !== 'idms'" class="p-5 text-left">
            <h3 class="font-semibold text-baseBlack">{{ media.title }}</h3>
            <p class="mt-2 text-sm text-neutral-500">{{ media.caption }}</p>
          </div>
        </button>
      </div>

      <div
        v-if="selectedMedia !== null"
        class="fixed inset-0 z-50 grid place-items-center bg-black/70 p-4"
        @click.self="closeMedia"
      >
        <button
          type="button"
          @click="closeMedia"
          class="hidden"
          aria-label="Close media preview"
        >
          ×
        </button>

        <div
          class="relative w-full max-w-5xl overflow-hidden rounded-3xl bg-white shadow-2xl"
        >
          <button
            type="button"
            @click="closeMedia"
            class="absolute right-3 top-3 z-10 inline-flex h-11 w-11 items-center justify-center rounded-full bg-white text-[0px] text-baseBlack shadow-lg transition hover:bg-neutral-100"
            aria-label="Close media preview"
          >
            <Icon name="lucide:x" class="h-5 w-5" aria-hidden="true" />
          </button>

          <template v-if="selectedMedia.type === 'image'">
            <img
              :src="selectedMedia.src"
              :alt="selectedMedia.alt"
              class="h-[70vh] w-full object-cover bg-black/5"
            />
          </template>
          <template v-else-if="selectedMedia.type === 'video'">
            <video
              :src="selectedMedia.src"
              controls
              autoplay
              class="h-[70vh] w-full object-cover bg-black/5"
            />
          </template>
          <div v-if="currentTab !== 'idms'" class="p-6">
            <h3 class="font-opensans text-2xl font-bold text-baseBlack">
              {{ selectedMedia.title }}
            </h3>
            <p class="mt-3 text-neutral-600">{{ selectedMedia.caption }}</p>
          </div>
        </div>
      </div>

      <div
        v-if="selectedTestimony !== null"
        class="fixed inset-0 z-50 grid place-items-center bg-black/70 p-4"
        @click.self="closeTestimony"
      >
        <button
          type="button"
          @click="closeTestimony"
          class="hidden"
          aria-label="Close testimony preview"
        >
          ×
        </button>

        <div
          class="relative w-full max-w-5xl overflow-hidden rounded-3xl bg-white shadow-2xl"
        >
          <button
            type="button"
            @click="closeTestimony"
            class="absolute right-3 top-3 z-10 inline-flex h-11 w-11 items-center justify-center rounded-full bg-white text-[0px] text-baseBlack shadow-lg transition hover:bg-neutral-100"
            aria-label="Close testimony preview"
          >
            <Icon name="lucide:x" class="h-5 w-5" aria-hidden="true" />
          </button>

          <img
            :src="selectedTestimony.image"
            :alt="selectedTestimony.name"
            class="h-[70vh] w-full object-contain bg-black/5"
          />
          <div class="p-6">
            <h3 class="font-opensans text-2xl font-bold text-baseBlack">
              {{ selectedTestimony.name }}
            </h3>
            <p class="mt-3 text-neutral-600">
              {{ selectedTestimony.description }}
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup lang="ts">
import { ref, computed } from "vue";
import type { MediaItem } from "../../lib/media";
import { tabs as mediaTabs, mediaItems } from "../../lib/media";
import slotImage from "@/assets/imgs/image_gallery/slot.png";
import triumphImage from "@/assets/imgs/image_gallery/Triumph.png";
import veepeeImage from "@/assets/imgs/image_gallery/veepee.png";
import midgaImage from "@/assets/imgs/image_gallery/midgal-simba.png";
import polyProductImage from "@/assets/imgs/image_gallery/poly-product.png";
import hoeschImage from "@/assets/imgs/image_gallery/Hoesch.png";

interface TestimonyItem {
  name: string;
  image: string;
  description: string;
}

const testimonies: TestimonyItem[] = [
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

const tabs = computed(() => [
  ...mediaTabs,
  { key: "testimonies", label: "Testimonies" },
]);

const currentTab = ref<string>(mediaTabs[0].key);
const selectedMedia = ref<MediaItem | null>(null);
const selectedTestimony = ref<TestimonyItem | null>(null);

const filteredItems = computed(() =>
  mediaItems.filter((m) => m.tab === currentTab.value),
);

function openMedia(index: number) {
  const list = filteredItems.value;
  selectedMedia.value = list[index] || null;
}

function closeMedia() {
  selectedMedia.value = null;
}

function openTestimony(item: TestimonyItem) {
  selectedTestimony.value = item;
}

function closeTestimony() {
  selectedTestimony.value = null;
}
</script>
