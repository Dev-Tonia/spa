export default defineNuxtConfig({
  modules: ["@nuxtjs/tailwindcss", "shadcn-nuxt", "@nuxt/icon", "nuxt-swiper"],
  // pages: true,
  nitro: {
    devProxy: {
      "/contact.php": {
        target: "http://127.0.0.1:8081/contact.php",
        changeOrigin: true,
      },
    },
  },

  shadcn: {
    /**
     * Prefix for all the imported component
     */
    prefix: "",
    /**
     * Directory that the component lives in.
     * @default "./components/ui"
     */
    componentDir: "./components/ui",
  },

  compatibilityDate: "2024-08-23",
});
