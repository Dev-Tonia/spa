<script setup>
import { Button } from "@/components/ui/button";
import {
  Dialog,
  DialogDescription,
  DialogFooter,
  DialogHeader,
  DialogScrollContent,
  DialogTitle,
  DialogTrigger,
} from "@/components/ui/dialog";

const props = defineProps({
  title: {
    type: String,
  },
  class: {
    type: String,
  },
});
</script>

<template>
  <Dialog>
    <DialogTrigger as-child>
      <Button variant="outline" :class="class"> {{ title }} </Button>
    </DialogTrigger>
    <DialogScrollContent class="w-11/12 sm:w-9/12 md:w-7/12">
      <DialogHeader class="px-8">
        <DialogTitle class="text-center font-bold text-2xl font-grifter"
          >Request A Demo</DialogTitle
        >
        <!-- <DialogDescription>
          Here is modal with overlay scroll
        </DialogDescription> -->
      </DialogHeader>
      <ContactForm />
    </DialogScrollContent>
  </Dialog>
</template>
