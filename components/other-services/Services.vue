<template>
  <section id="services" class="bg-[#FAFAFA] py-16 sm:py-20">
    <div class="wrapper">
      <LazyCommonSectionTitle
        class="max-w-4xl"
        :data="{
          title: 'Solutions built around the way you work',
          description:
            'From enterprise systems to cloud and mobile experiences, IDM provides practical technology services that help businesses operate with confidence.',
        }"
      />

      <div class="mt-10 space-y-8 sm:mt-12">
        <OtherServicesServiceCard
          v-for="(service, index) in services"
          :key="service.title"
          :service="service"
          :index="index"
        />
      </div>
    </div>
  </section>
</template>

<script setup lang="ts">
import {
  business_one,
  customerCheckout,
  hana,
  Fiori_arch,
  erpSchool,
  businessSap,
  powerBi,
  cloud,
  idmHr,
  customerCareHero,
  tally,
  eInvoice,
  customizeDevelopment,
} from "~/lib/images";

const services = [
  {
    title: "SAP Business One",
    image: business_one,
    description:
      "IDM is a leading ERP consulting team specializing in SAP Business One, tailored for small, medium, and large businesses. As one of the largest SAP Business One partners in West Africa, we have completed numerous implementations, including SAP Business One for HANA, helping clients maximize ROI and achieve business growth through expert support and turnaround services.",
    icon: "vaadin:file-tree",
    to: "/sap-business-one",
  },
  {
    title: "SAP Customer Check Out",
    image: customerCheckout,
    description:
      "Discover our integrated point-of-sale software designed for retail, sports and entertainment, and catering businesses. Supporting common POS requirements, SAP Customer Checkout can be used as a standalone solution or integrated with SAP ERP systems.",
    icon: "vaadin:file-tree",
    to: "/sap-customer-check-out",
  },
  {
    title: "SAP HANA",
    image: hana,
    description:
      "SAP HANA is designed to handle high volumes of transactional and analytical data in real time, enabling businesses to process large amounts of data quickly and efficiently.",
    icon: "vaadin:file-tree",
    to: "/sap-hana",
  },
  {
    title: "SAP Fiori",
    image: Fiori_arch,
    description:
      "SAP Fiori is SAP's UX strategy for designing and developing delightful applications that can be deployed on-cloud or on-premise.",
    icon: "vaadin:file-tree",
    to: "/sap-fiori",
  },
  {
    title: "School ERP",
    image: erpSchool,
    description:
      "School ERP systems help schools maintain accurate records, ensure smooth operations, and improve transparency and accountability.",
    icon: "fa6-solid:school-lock",
    to: "/erp-school",
  },
  {
    title: "SAP Business One Add-ons",
    image: businessSap,
    description:
      "Integrating a report scheduler with email and WhatsApp within SAP Business One offers significant benefits, including automation, enhanced communication, improved efficiency, and better decision-making.",
    icon: "ph:briefcase-light",
    to: "/business-add-on",
  },
  {
    title: "Power BI",
    image: powerBi,
    description:
      "Microsoft Power BI solutions transform business data into meaningful insights, enabling faster and smarter decisions across your organization.",
    icon: "logos:microsoft-power-bi",
    to: "/power-bi",
  },
  {
    title: "Cloud Services",
    image: cloud,
    description:
      "Cloud services provide on-demand access to computing resources such as servers, storage, databases, networking, software, and analytics over the internet.",
    icon: "hugeicons:cloud",
    to: "/cloud-services",
  },
  {
    title: "IDM HR",
    image: idmHr,
    description:
      "IDM HR streamlines the employee lifecycle from recruitment and onboarding to attendance, payroll, leave management, appraisal, and employee self-service.",
    icon: "ph:users-three",
    to: "/idm-hr",
  },
  {
    title: "Customer care service",
    image: customerCareHero,
    description:
      "Manage customer interactions across voice calls, emails, chat, and social media with a structured customer care service approach.",
    icon: "ph:headset",
    to: "/customer-care-service",
  },
  {
    title: "Tally Services",
    image: tally,
    description:
      "Implementation, integration, and AMC support for Tally to keep financial operations accurate, efficient, and easy to manage.",
    icon: "ph:calculator-fill",
    featureTitle: "Tally integration services",
    features: [
      "Timely implementation of services",
      "Data consolidation for centralized reporting",
      "Integration with third-party software",
      "Business process automation",
      "Real-time critical business insights",
      "Easy data import capabilities",
    ],
    to: "/tally-services",
  },
  {
    title: "E-Invoicing",
    image: eInvoice,
    description:
      "Digital invoicing and compliance support that helps businesses report transactions in real time and stay aligned with government requirements.",
    icon: "ph:receipt",
    featureTitle: "Benefits of e-invoicing",
    features: [
      "Real-time reporting",
      "Reduced errors and fraud",
      "Faster processing",
      "Improved compliance",
      "IRN number",
      "QR code",
    ],
    to: "/e-invoicing",
  },
  {
    title: "Customized Software Development",
    image: customizeDevelopment,
    description:
      "Tailored software solutions built around your business processes, including mobile apps, web applications, ERP integrations, and automation.",
    icon: "ph:code-light",
    to: "/customized-software-development",
  },
];
</script>
