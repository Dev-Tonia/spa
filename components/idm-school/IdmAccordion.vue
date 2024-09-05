<script setup>
import {
  Accordion,
  AccordionContent,
  AccordionItem,
  AccordionTrigger,
} from "@/components/ui/accordion";

const props = defineProps({
  data: {
    type: Object,
  },
});
</script>

<template>
  <Accordion type="single" collapsible class="border-b">
    <AccordionItem :value="data.value">
      <AccordionTrigger class="text-xl font-bold font-grifter">{{
        data.title
      }}</AccordionTrigger>
      <AccordionContent>
        <slot></slot>
      </AccordionContent>
    </AccordionItem>
  </Accordion>
</template>

<style lang="scss" scoped></style>
