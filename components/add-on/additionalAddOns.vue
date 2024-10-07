<template>
  <section class="py-16">
    <div class="wrapper">
      <LazyCommonSectionTitle
        class="text-center"
        :data="{
          title: 'Additional Add-ons services we offer',
          description: `SAP Business one add-ons ensure your SAP environment runs smoothly to maximize productivity and streamline operations.`,
        }"
      />
      <div
        class="grid min-[500px]:grid-cols-2 md:grid-cols-3 gap-6 lg:gap-10 py-16"
      >
        <div
          class="flex gap-4"
          v-for="(content, index) in contents"
          :key="content.title"
        >
          <div
            class="bg-primary min-[980px]:flex hidden items-center justify-center text-white w-14 h-14 rounded-xl p-4"
          >
            <Icon :name="content.icon" class="text-4xl" />
          </div>
          <div>
            <h6 class="font-bold">{{ content.title }}</h6>
            <p class="text-sm">{{ content.description }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
const contents = [
  {
    title: "QC",
    description: "Inward, In-process, Pre-dispatch,Re-work",
    icon: "ph:truck",
  },
  {
    title: "EXIM",
    description: "Import, Export, Advance License Management, Forward Contract",
    icon: "ph:airplane",
  },
  {
    title: "CBOM",
    description: "Bill of Material, Production Order Approval",
    icon: "ph:invoice",
  },
  {
    title: "AUTO Batch",
    description: "Inward batch auto generation",
    icon: "ph:steering-wheel",
  },
  {
    title: "Email, SMS, Whatsapp",
    description: "Email/SMS by time base/trigger base",
    icon: "ph:envelope",
  },
  {
    title: "Add-on Connectivity",
    description: "Status of the connected add-on",
    icon: "ph:plugs",
  },
  {
    title: "Job Work",
    description: "Issue to job work and receipt from job work process",
    icon: "ph:briefcase",
  },
  {
    title: "Gate pass including gate inward and outward",
    description: "Visitor pass and material inward and outward",
    icon: "ph:door-open",
  },
  {
    title: "HRMS",
    description: "Attendance management system",
    icon: "ph:user-circle-check",
  },
  {
    title: "Pick List",
    description: "Based on city pick list generation from sales order",
    icon: "ph:tag",
  },
  {
    title: "Transport Management",
    description: "Shipment management",
    icon: "ph:car",
  },
  {
    title: "Goods In Transit",
    description: "Tracking based on the supplier send materials to company",
    icon: "ph:train-simple",
  },
  {
    title: "QCR (Quotation Comparison Report)",
    description: "Quotation comparison history report",
    icon: "ph:calculator",
  },
  {
    title: "Auto Entry Add-on",
    description: "Auto JE and Auto landed cost",
    icon: "ph:keyhole",
  },
  {
    title: "E-Way Bill/E-Invoice For India",
    description: "Synchronization of the customer to portal",
    icon: "ph:browsers",
  },
  {
    title: "E-Invoice For Kenya",
    description: "E-Invoice for kenya",
    icon: "ph:invoice",
  },
  {
    title: "Auto Goods Issue",
    description: "Same as name suggested",
    icon: "ph:shield-check",
  },
  {
    title: "Digital Signature",
    description: "Digital signature",
    icon: "ph:signature",
  },
  {
    title: "Customized Approved Process",
    description: "Same as name suggested",
    icon: "ph:circuitry",
  },
  {
    title: "Calculation of Quantity Based on BOM Tree",
    description:
      "For using calculation quantity to required production or purchase",
    icon: "ph:tree-view",
  },
];
</script>

<style lang="scss" scoped></style>
