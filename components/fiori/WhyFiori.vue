<script setup></script>
<template>
  <section class="bg-[#FAFAFA] py-16">
    <div class="wrapper">
      <CommonSectionTitle
        :data="{
          title: 'Why SAP Fiori',
          description: `Empower your workforce with modern, role-based interfaces that simplify complex tasks, enhance productivity, and reduce training time, all while ensuring a consistent experience across all devices and platforms.`,
        }"
      />
      <div class="flex gap-14 py-12">
        <div class="w-1/2">
          <h5 class="font-bold text-lg font-grifter text-baseBlack">
            Experience the Future of SAP with Fiori 3.0: A Unified, Role-Based,
            and Mobile-Optimized User Interface
          </h5>
          <p class="text-neutral-500">
            SAP Fiori 3.0 is the latest evolution of the user experience for SAP
            S/4HANA. SAP Fiori 3.0 is the leading design for all SAP
            applications providing a harmonised user experience across on
            premise and cloud solutions. With SAP Fiori 3.0, the SAP Fiori
            Launchpad is your central and role-based entry point to access all
            apps. SAP Fiori provides all business roles in real time on
            compatible hand devices.
          </p>
          <div class="py-5">
            <NuxtLink
              class="text-lg font-bold text-white bg-primary rounded-[8px] py-3 px-5"
              to="/contact"
            >
              Contact Our Expert
            </NuxtLink>
          </div>
        </div>
        <div class="w-1/2">
          <div>
            <div
              class="bg-primary flex items-center justify-center text-white w-12 h-12 rounded-[8px] p-2"
            >
              <Icon name="ph:devices-light" class="text-5xl" />
            </div>
            <h6 class="text-lg font-bold font-grifter py-5">
              Seamless Business Functions Across All Devices
            </h6>
            <p class="text-neutral-500 text-sm">
              It offers business roles on easy to use functions, simple with
              unmatched responsiveness on desktop, smartphones and Tablets. It
              enables multiple device applications that allow users to start a
              process on their desktop/laptops and to continue that process on a
              smartphone or on a tablet.
            </p>
          </div>
          <div class="pt-5">
            <div
              class="bg-primary flex items-center justify-center text-white w-12 h-12 rounded-[8px] p-2"
            >
              <Icon name="ph:device-mobile-camera-light" class="text-5xl" />
            </div>
            <h6 class="text-lg font-bold font-grifter py-5">
              Explore 300+ Role-Based Apps with SAP Fiori and UI5
            </h6>
            <p class="text-neutral-500 text-sm">
              SAP has developed Fiori Apps based on User interface UI5. SAP
              Fiori provides 300+ role-based applications like HR,
              Manufacturing, finance, etc
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped></style>
