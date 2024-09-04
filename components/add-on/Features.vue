<template>
  <section class="bg-neutral-50 py-16">
    <div class="wrapper">
      <CommonSectionTitle
        class="text-center"
        :data="{
          title: 'Features of SAP Business one Add-ons',
          description: `SAP Business Add-Ons provide a powerful way to extend the functionality of SAP systems, offering tailored solutions that meet the specific needs of various industries and business processes. `,
        }"
      />
      <div class="py-7">
        <AddOnSubTitle
          :data="{
            title: 'Quality control',
            description: `A Quality Control Module with the functionalities you mentioned—Inward, Predispatch, Inprocess, and ReQC—can be a crucial component in various manufacturing and production environments. Each functionality serves a specific purpose in ensuring product quality throughout the production process. `,
          }"
        />
        <div class="grid grid-cols-3 gap-10 py-16">
          <AddOnFeaturesCard
            v-for="(qualityContent, index) in qualityContents"
            :key="index"
            :content="qualityContent"
            :class="{ 'col-span-2': isLastCard(index, qualityContents) }"
          />
        </div>
      </div>

      <div class="py-7">
        <AddOnSubTitle
          :data="{
            title: 'EIXM(Export and Import Management)',
            description: `An Import and Export Management Module with functionalities such as handling Letters of Credit (LC), managing licenses, tracking shipments, and monitoring shipment costs is essential for companies engaged in international trade. Here's a breakdown of the functionalities and key features of such a module`,
          }"
        />
        <div class="grid grid-cols-3 gap-10 py-16">
          <AddOnFeaturesCard
            v-for="(eixmContent, index) in eixmContents"
            :key="index"
            :content="eixmContent"
            :class="{ 'col-span-2': isLastCard(index, eixmContents) }"
          />
        </div>
      </div>
      <div class="py-7">
        <AddOnSubTitle
          :data="{
            title: 'WhatsApp Integration',
            description: `Integrating WhatsApp with SAP Business One offers numerous benefits that can significantly enhance business operations, customer service, and overall communication efficiency.`,
          }"
        />
        <div class="grid grid-cols-3 gap-10 py-16">
          <AddOnFeaturesCard
            v-for="(whatsAppContent, index) in whatsAppContents"
            :key="index"
            :content="whatsAppContent"
            :class="{ 'col-span-2': isLastCard(index, whatsAppContents) }"
          />
        </div>
      </div>
      <div class="py-7">
        <AddOnSubTitle
          :data="{
            title: 'Report scheduler with email and WhatsApp Integration',
            description: `Integrating a report scheduler with email and WhatsApp within SAP Business One offers numerous benefits. This integration allows businesses to automate the distribution of critical reports and information to stakeholders through preferred communication channels`,
          }"
        />
        <div class="grid grid-cols-3 gap-10 py-16">
          <AddOnFeaturesCard
            v-for="(reportContent, index) in reportContents"
            :key="index"
            :content="reportContent"
            :class="{ 'col-span-2': isLastCard(index, reportContents) }"
          />
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
function isLastCard(index, cards) {
  if (cards.length === 5) {
    return index === cards.length - 1;
  }
}

const qualityContents = [
  {
    id: 1,
    title: "Inward Quality Control (IQC)",
    description: ` Key activities include inspection, testing, and verification against
            predefined quality standards or specifications.`,
  },
  {
    id: 2,
    title: "In-process Quality Control (IPQC)",
    description: `This functionality involves real-time inspection, testing, and analysis of products at various stages of manufacturing to identify and address any deviations from quality standards promptly`,
  },
  {
    id: 3,
    title: "Predispatch Quality Control",
    description: `This functionality involves inspecting finished products or components before they are dispatched to customers or distribution centers.`,
  },
  {
    id: 4,
    title: "ReQC (Requalification) or Rejection Handling",
    description: `ReQC functionality deals with products or materials that fail to meet quality standards during any stage of the production or inspection process.`,
  },
  {
    id: 5,
    title: "Take your business to a new level",
    description: `By leveraging these integrations, businesses can ensure timely and effective distribution of critical information to stakeholders, leading to increased engagement, productivity, and overall business performance.`,
    btn: "Learn More",
  },
];

const eixmContents = [
  {
    id: 1,
    title: "Letters of Credit (LC) Management",
    description: `Facilitates the management of LCs issued by importers' banks to exporters, ensuring compliance with terms and conditions specified in the LC.`,
  },
  {
    id: 2,
    title: "License Management",
    description: `Handles various types of import and export licenses required for compliance with regulatory requirements.`,
  },
  {
    id: 3,
    title: "Shipment Tracking",
    description: `Tracks the movement of goods from the point of origin to the final destination.
Integrates with logistics providers' systems to capture shipment status updates, including departure, transit, customs clearance, and delivery.`,
  },
  {
    id: 4,
    title: "Shipment Costs Management",
    description: `Manages various costs associated with import and export shipments, including freight charges, customs duties, insurance premiums, and handling fees.`,
  },
  {
    id: 5,
    title: "Take your business to a new level",
    description: `By leveraging these integrations, businesses can ensure timely and effective distribution of critical information to stakeholders, leading to increased engagement, productivity, and overall business performance.`,
    btn: "Learn More",
  },
];

const whatsAppContents = [
  {
    id: 1,
    title: "Order Confirmation and Updates",
    description: `Send real-time notifications and updates to customers regarding order confirmations, shipment statuses, and service appointments. Preferred Communication Channel.`,
  },
  {
    id: 2,
    title: "Customer Support",
    description: `Provide instant support by enabling customers to send queries and receive responses through WhatsApp.`,
  },
  {
    id: 3,
    title: "Appointment Reminders",
    description: `Send automated reminders for service appointments, reducing no-shows and improving service efficiency.`,
  },
  {
    id: 4,
    title: "Feedback and Surveys",
    description: `Conduct customer satisfaction surveys and gather feedback directly through WhatsApp, facilitating better customer insights.`,
  },
  {
    id: 5,
    title: "Promotional Campaigns",
    description: `Send targeted promotional messages and offers, increasing customer engagement and driving sales.`,
  },
  {
    id: 6,
    title: "Take your business to a new level",
    description: `Businesses can achieve higher customer satisfaction, increased sales, and streamlined operations.`,
    btn: "Learn More",
  },
];

const reportContents = [
  {
    id: 1,
    title: "Financial Reports",
    description: `Schedule the distribution of monthly financial statements, balance sheets, and income statements to management via email.`,
  },
  {
    id: 2,
    title: "Sales Performance",
    description: `Send daily or weekly sales performance summaries to sales teams and executives through WhatsApp for quick insights.`,
  },
  {
    id: 3,
    title: "Inventory Management",
    description: `Send automated reminders for service appointments, reducing no-shows and improving service efficiency.`,
  },
  {
    id: 4,
    title: "Customer Support Reports",
    description: `Distribute regular customer support activity reports to service managers to monitor performance and identify areas for improvement`,
  },
  {
    id: 5,
    title: "Project Updates",
    description: `Send project status reports to stakeholders at regular intervals, ensuring everyone is informed of progress and milestones.`,
  },
  {
    id: 6,
    title: "Take your business to a new level",
    description: `Businesses can achieve higher customer satisfaction, increased sales, and streamlined operations.`,
    btn: "Learn More",
  },
];
</script>

<style scoped></style>
