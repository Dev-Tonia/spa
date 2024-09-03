<script setup>
import { useCaseHosp, useCaseRetail, useCaseSport } from "../../lib/images";
</script>

<template>
  <section class="bg-[#FAFAFA] py-16">
    <div class="wrapper">
      <div class="flex flex-col items-center justify-center text-center">
        <h3 class="font-grifter font-bold text-3xl py-2">Use cases checkout</h3>
        <p class="py-4 text-xl text-[#7A7474]">
          Discover How Our SAP Solutions Drive Success Across Diverse Industries
          and Business Challenges
        </p>
      </div>

      <div class="py-10">
        <div class="bg-white rounded-xl p-8">
          <div class="flex items-center gap-8">
            <div class="w-5/12">
              <img :src="useCaseHosp" alt="" />
            </div>
            <div class="w-7/12">
              <h3 class="font-grifter font-bold text-3xl py-2">Hospitality</h3>
              <p class="py-4 text-xl text-[#7A7474]">
                Optimized user interface to be used in catering and
                hospitality businesses From fast food chains, kiosks, food
                trucks, to takeaway shops.  Table management
                functionality enables you to run SAP Customer Checkout in cafés,
                restaurants, bars, or Serving staff can use traditional
                point-of-sale devices or handheld devices for taking orders
              </p>
            </div>
          </div>
        </div>

        <div class="flex justify-between py-10 space-x-10">
          <div class="bg-white rounded-xl p-8">
            <div class="gap-8">
              <div class="">
                <img :src="useCaseRetail" class="w-full h-[364px]" alt="" />
              </div>
              <div class="pt-5">
                <h3 class="font-grifter font-bold text-3xl py-2">Retail</h3>
                <p class="py-4 text-xl text-[#7A7474]">
                  From fashion and grocery stores, electronics, professional
                  services, to wholesale distribution.  All common requirements
                  that are needed in a store or shop  Provide a unique customer
                  experience and offer value-added sales services.
                </p>
              </div>
            </div>
          </div>
          <div class="bg-white rounded-xl p-8">
            <div class="gap-8">
              <div class="">
                <img :src="useCaseSport" class="w-full h-[364px]" alt="" />
              </div>
              <div class="pt-5">
                <h3 class="font-grifter font-bold text-3xl py-2">
                  Sports and Entertainment
                </h3>
                <p class="py-4 text-xl text-[#7A7474]">
                  For a sports club, merchandise shop, stadium, or other
                  entertainment, and culture venue -  SAP Customer Checkout
                  helps you to optimize your POS operations  Engage with your
                  fans and customers
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style lang="scss" scoped></style>
