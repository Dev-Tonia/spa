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
  customizedErp,
  schoolErpOtherService,
  tally,
  eInvoice,
  appDev,
  otherServiceBi,
  customizeDevelopment,
  otherServiceCloud,
  idmHr,
  webDev,
} from "~/lib/images";

// To add an image, place it in `public/images/other-services/` and replace the
// matching `image: null` with its public path, for example:
// image: "/images/other-services/customized-erp.jpg"
// The placeholder background remains in use while the image value is null.
const services = [
  {
    title: "Customized ERP",
    image: customizedErp,
    description:
      "Customized ERP business management software helps companies run their entire operations on one platform. Instead of using separate tools for different tasks, it combines accounting, inventory, HR, sales, manufacturing, and customer management into a single, centralized system.",
    icon: "ph:buildings",
  },
  {
    title: "School ERP",
    image: schoolErpOtherService,
    description:
      "IDM, in partnership with Edunext Technologies, has developed an advanced, user-friendly School ERP solution for managing a wide range of school operations. Contact the IDM team to learn more.",
    icon: "ph:student",
  },
  {
    title: "Tally Services",
    image: tally,
    description:
      "IDM is a distinguished Tally services and AMC provider, specializing in seamless Tally integration and customization to improve business efficiency. Our expertise supports practical implementation and efficient operation of Tally accounting software tailored to your needs.",
    icon: "ph:calculator",
    featureTitle: "Tally integration services",
    features: [
      "Timely implementation of services",
      "Data consolidation for centralized reporting",
      "Integration with third-party software",
      "Business process automation",
      "Real-time critical business insights",
      "Easy data import capabilities",
    ],
  },
  {
    title: "E-Invoicing",
    image: eInvoice,
    description:
      "An e-invoice is a digital invoice generated and exchanged electronically through the government's e-invoicing system, helping ensure real-time reporting and regulatory compliance.",
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
  },
  {
    title: "Mobile Applications",
    image: appDev,
    description:
      "IDM's mobile services extend the power of ERP beyond the office, enabling employees, managers, and customers to access critical business information anytime, anywhere. Our solutions integrate with leading ERP platforms to provide real-time access to sales, inventory, purchasing, finance, customer service, approvals, and management dashboards.",
    icon: "ph:device-mobile",
  },
  {
    title: "Business Intelligence Tools",
    image: otherServiceBi,
    description:
      "IDM delivers powerful Microsoft Power BI solutions that transform business data into meaningful insights, enabling faster and smarter decisions. Our solutions integrate with SAP Business One, other ERP systems, Tally, and business applications for a unified view of organizational performance.",
    icon: "ph:chart-bar",
    features: [
      "Data integration and dashboard development",
      "KPI design and predictive analytics",
      "Automated reporting",
      "User training",
    ],
  },
  {
    title: "Customized Software Development",
    image: customizeDevelopment,
    description:
      "IDM's certified, skilled professionals design and develop customized business software around your organization's unique requirements. We build production-management add-ons, ERP integrations, mobile applications, business process automation, custom reports, and localized solutions.",
    icon: "ph:code",
  },
  {
    title: "Web Application Development",
    image: webDev,
    description:
      "IDM develops secure, scalable, and user-friendly web applications tailored to your business needs. From custom business portals to enterprise applications, we deliver responsive, high-performance solutions that integrate with ERP systems and third-party platforms.",
    icon: "ph:browser",
  },
  {
    title: "Cloud Solutions",
    image: otherServiceCloud,
    description:
      "Cloud solutions are already available. Service imagery will be added when it is supplied by the IDM team.",
    icon: "ph:cloud",
  },
  {
    title: "IDM HR",
    image: idmHr,
    description:
      "IDM HR is a modern human resource management solution that streamlines the complete employee lifecycle—from recruitment and onboarding to attendance, payroll, leave management, performance appraisal, and employee self-service. Its intuitive cloud-based platform helps organizations improve productivity, ensure compliance, and make data-driven HR decisions.",
    icon: "ph:users-three",
  },
  {
    title: "Annual Support and Maintenance",
    image: null,
    description:
      "IDM provides comprehensive Annual Support and Maintenance (AMC) services to keep ERP systems, business applications, and IT solutions operating efficiently with minimal downtime. Our services include proactive monitoring, technical support, system updates, performance optimization, and user assistance.",
    icon: "ph:wrench",
  },
];
</script>
