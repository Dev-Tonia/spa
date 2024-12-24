<template>
  <section class="bg-gray-100 pt-16">
    <div class="wrapper">
      <div class="min-[850px]:flex-row flex flex-col gap-6">
        <div class="min-[850px]:w-8/12 text-center min-[850px]:text-start">
          <div class="text-baseBlack">
            <h1
              class="text-3xl md:text-4xl lg:text-5xl font-bold font-grifter mb-4"
            >
              Our Mobile App
            </h1>
            <p class="text-2xl mb-6">
              A Revolutionary Mobile Application for Schools
            </p>
          </div>
          <div
            class="flex items-center min-[850px]:justify-start justify-center min-[415px]:flex-row flex-col gap-6"
          >
            <button
              class="bg-baseBlack py-2 px-4 flex items-center justify-center gap-4 rounded-xl min-[415px]:w-fit w-full"
            >
              <Icon name="logos:google-play-icon" class="text-4xl" />
              <div class="text-white flex flex-col items-start">
                <span class="text-xs sm:text-base">Available on</span>
                <span class="font-bold sm:text-lg">Google Play</span>
              </div>
            </button>
            <button
              class="bg-baseBlack py-2 px-4 flex items-center justify-center gap-4 rounded-xl min-[415px]:w-fit w-full"
            >
              <!-- <Icon name="si:apple-fill" class="text-4xl" /> -->
              <div>
                <svg
                  width="32"
                  height="51"
                  viewBox="0 0 42 51"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M30.9435 0.525022C30.8373 0.406272 27.0091 0.571897 23.6779 4.18752C20.3466 7.80002 20.8591 11.9438 20.9341 12.05C21.0091 12.1563 25.6841 12.3219 28.6685 8.11877C31.6529 3.91565 31.0498 0.646897 30.9435 0.525022ZM41.2998 37.1906C41.1498 36.8906 34.0341 33.3344 34.6966 26.4969C35.3591 19.6594 39.931 17.7813 40.0029 17.5781C40.0748 17.375 38.1373 15.1094 36.0841 13.9625C34.5764 13.1547 32.9082 12.6915 31.1998 12.6063C30.8623 12.5969 29.6904 12.3094 27.281 12.9688C25.6935 13.4031 22.1154 14.8094 21.131 14.8656C20.1435 14.9219 17.206 13.2344 14.0466 12.7875C12.0248 12.3969 9.88102 13.1969 8.34664 13.8125C6.81539 14.425 3.90289 16.1688 1.86539 20.8031C-0.172107 25.4344 0.893518 32.7719 1.65602 35.0531C2.41852 37.3344 3.60914 41.0656 5.63414 43.7906C7.43414 46.8656 9.82164 49 10.8185 49.725C11.8154 50.45 14.6279 50.9313 16.5779 49.9344C18.1466 48.9719 20.9779 48.4188 22.0966 48.4594C23.2123 48.5 25.4123 48.9406 27.6654 50.1438C29.4498 50.7594 31.1373 50.5031 32.8279 49.8156C34.5185 49.125 36.9654 46.5063 39.8216 41.1969C40.905 38.7281 41.3977 37.3927 41.2998 37.1906Z"
                    fill="#FAFAFA"
                  />
                  <path
                    d="M30.9435 0.525022C30.8373 0.406272 27.0091 0.571897 23.6779 4.18752C20.3466 7.80002 20.8591 11.9438 20.9341 12.05C21.0091 12.1563 25.6841 12.3219 28.6685 8.11877C31.6529 3.91565 31.0498 0.646897 30.9435 0.525022ZM41.2998 37.1906C41.1498 36.8906 34.0341 33.3344 34.6966 26.4969C35.3591 19.6594 39.931 17.7813 40.0029 17.5781C40.0748 17.375 38.1373 15.1094 36.0841 13.9625C34.5764 13.1547 32.9082 12.6915 31.1998 12.6063C30.8623 12.5969 29.6904 12.3094 27.281 12.9688C25.6935 13.4031 22.1154 14.8094 21.131 14.8656C20.1435 14.9219 17.206 13.2344 14.0466 12.7875C12.0248 12.3969 9.88102 13.1969 8.34664 13.8125C6.81539 14.425 3.90289 16.1688 1.86539 20.8031C-0.172107 25.4344 0.893518 32.7719 1.65602 35.0531C2.41852 37.3344 3.60914 41.0656 5.63414 43.7906C7.43414 46.8656 9.82164 49 10.8185 49.725C11.8154 50.45 14.6279 50.9313 16.5779 49.9344C18.1466 48.9719 20.9779 48.4188 22.0966 48.4594C23.2123 48.5 25.4123 48.9406 27.6654 50.1438C29.4498 50.7594 31.1373 50.5031 32.8279 49.8156C34.5185 49.125 36.9654 46.5063 39.8216 41.1969C40.905 38.7281 41.3977 37.3927 41.2998 37.1906Z"
                    fill="#FAFAFA"
                  />
                </svg>
              </div>
              <div class="text-white flex flex-col items-start">
                <span class="text-xs sm:text-base">Available on</span>
                <span class="font-bold sm:text-lg">App Store </span>
              </div>
            </button>
          </div>
        </div>
        <div class="min-[850px]:w-4/12">
          <div>
            <img :src="mobileApp" alt="" class="w-96 mx-auto" />
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { mobileApp } from "~/lib/images";
</script>
