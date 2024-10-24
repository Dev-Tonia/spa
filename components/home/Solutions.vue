<script setup>
import { addOn, bi, clouds, idmSoln } from "../../lib/images";
</script>

<template>
  <section class="bg-secondary text-[#FAFAFA] py-20">
    <div class="wrapper">
      <div class="sm:flex justify-between items-start py-6 border-b-2">
        <div class="sm:w-7/12">
          <h3
            class="font-grifter font-bold text-2xl md:text-3xl lg:text-4xl py-4"
          >
            Explore our solution
          </h3>
          <p class="text-xl">
            We strive to consistently and efficiently plan, execute and deliver
            high quality services and results across serval Industries
          </p>
        </div>
        <div class="flex pt-4">
          <NuxtLink
            class="text-lg font-bold flex items-center bg-primary rounded-[8px] py-3 px-5"
            to="/contact"
            ><span> Reach out</span
            ><Icon class="text-3xl" name="flowbite:arrow-right-outline"
          /></NuxtLink>
        </div>
      </div>
      <div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 p-4 my-20">
          <div class="space-y-10 h-full">
            <!-- card 1 -->
            <div class="bg-white shadow-md rounded-lg p-6">
              <div class="flex justify-between pb-4">
                <div class="w-10/12">
                  <h2
                    class="text-2xl font-grifter font-bold mb-4 text-baseBlack"
                  >
                    SAP Business One Add-ons
                  </h2>
                  <p class="text-gray-700 mb-4">
                    Microsoft Power BI is a comprehensive suite of business
                    analytics tools used to analyze data and share insights. It
                    connects to various data sources, transforms data, and
                    creates interactive visualizations to help businesses make
                    data-driven decisions.
                  </p>
                </div>

                <div>
                  <Icon
                    class="text-4xl md:text-5xl text-primary cursor-pointer transition-all duration-700 hover:text-secondary hover:text-5xl md:hover:text-6xl"
                    name="ph:arrow-circle-up-right"
                    @click="navigateTo('/business-add-on')"
                  />
                </div>
              </div>
              <div class="flex justify-center">
                <img
                  :src="addOn"
                  alt="SAP Business One Add-ons Image"
                  class="rounded-lg h-[300px]"
                />
              </div>
            </div>
            <!-- Card 2 -->
            <div class="bg-white shadow-md rounded-lg p-6">
              <div
                class="flex flex-col-reverse min-[900px]:flex-row items-center justify-between gap-7"
              >
                <div class="min-[900px]:w-1/2">
                  <img
                    :src="clouds"
                    alt="Cloud Services Image"
                    class="rounded-lg min-[900px]:w-fit w-full"
                  />
                </div>
                <div class="min-[900px]:w-1/2">
                  <div class="flex justify-end">
                    <Icon
                      class="text-4xl md:text-5xl text-primary cursor-pointer transition-all duration-700 hover:text-secondary hover:text-5xl md:hover:text-6xl"
                      name="ph:arrow-circle-up-right"
                      @click="navigateTo('/cloud-services')"
                    />
                  </div>
                  <h2
                    class="text-2xl font-grifter font-bold mb-4 text-baseBlack"
                  >
                    Cloud Services
                  </h2>
                  <p class="text-gray-700 mb-4">
                    Provision of on-demand access to computing resources, such
                    as servers, storage, databases, networking, software, and
                    analytics, over the internet.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="space-y-10 h-full">
            <!-- Card 3-->

            <div class="bg-white shadow-md rounded-lg p-6">
              <div
                class="flex flex-col-reverse min-[900px]:flex-row items-center justify-between gap-7"
              >
                <div class="min-[900px]:w-1/2">
                  <img
                    :src="bi"
                    alt="Power BI Image"
                    class="rounded-lg w-full"
                  />
                </div>
                <div class="min-[900px]:w-1/2">
                  <div class="flex justify-end">
                    <Icon
                      class="text-4xl md:text-5xl text-primary cursor-pointer transition-all duration-700 hover:text-secondary hover:text-5xl md:hover:text-6xl"
                      name="ph:arrow-circle-up-right"
                      @click="navigateTo('/power-bi')"
                    />
                  </div>
                  <h2
                    class="text-2xl font-grifter font-bold mb-4 text-baseBlack"
                  >
                    Power BI
                  </h2>
                  <p class="text-gray-700 mb-4">
                    Microsoft Power BI is a comprehensive suite of business
                    analytics tools used to analyze data and share insights. It
                    connects to various data sources, transforms data, and
                    creates interactive visualizations to help businesses make
                    data-driven decisions.
                  </p>
                </div>
              </div>
            </div>
            <!-- Card 4 -->
            <div class="bg-white shadow-md rounded-lg p-6">
              <div class="flex justify-between pb-4">
                <div class="w-10/12">
                  <h2
                    class="text-2xl font-grifter font-bold mb-4 text-baseBlack"
                  >
                    IDM @ School
                  </h2>
                  <p class="text-gray-700 mb-4">
                    Realizing the importance of starting ICT education early,
                    IDM has a fully developed program to offer IT education to
                    school children from elementary levels.
                  </p>
                </div>

                <div>
                  <Icon
                    class="text-4xl md:text-5xl text-primary cursor-pointer transition-all duration-700 hover:text-secondary hover:text-5xl md:hover:text-6xl"
                    name="ph:arrow-circle-up-right"
                    @click="navigateTo('/idm-@-school')"
                  />
                </div>
              </div>

              <div class="">
                <img
                  :src="idmSoln"
                  alt="IDM @ School Image"
                  class="rounded-lg w-full h-[300px]"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped></style>
