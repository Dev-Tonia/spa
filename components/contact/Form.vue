<script setup>
import { useVuelidate } from "@vuelidate/core";
import { required, email } from "@vuelidate/validators";
const formData = reactive({
  email: "",
  fullName: "",
  companyType: "",
  phoneNumber: "",
  designation: "",
  additionalInfo: "",
  enquiryType: "",
});
const rules = computed(() => {
  return {
    email: {
      required,
      email,
    },
    fullName: { required },
    companyType: { required },
    phoneNumber: { required },
    additionalInfo: { required },
    designation: { required },
    enquiryType: { required },
  };
});

const v$ = useVuelidate(rules, formData);
const isOpen = ref(false);
const modalMsg = ref("");
const error = ref(false);
const sending = ref(false);
const submit = async () => {
  if (sending.value) return;
  sending.value = true;
  try {
    const valid = await v$.value.$validate();
    if (!valid) {
      isOpen.value = true;
      error.value = true;
      modalMsg.value = "Please complete all fields and enter a valid email address.";
      return;
    }
    const result = await $fetch("/contact.php", {
      method: "POST",
      body: new URLSearchParams({ ...formData }),
      retry: 0,
    });
    if (result?.success !== true) throw new Error("Unexpected response");
    error.value = false;
    isOpen.value = true;
    modalMsg.value = "Thank you for contacting IDM Service. Your message has been submitted.";

    Object.keys(formData).forEach((key) => {
      formData[key] = "";
    });
    v$.value.$reset();
  } catch {
    error.value = true;
    isOpen.value = true;
    modalMsg.value = "Unable to send your message. Please try again or email enquiry@idmng.com.";
  } finally {
    sending.value = false;
  }
};
function closeModal() {
  isOpen.value = false;
}
</script>
<template>
  <form
    @submit.prevent="submit"
    class="mx-auto mt-10 flex w-full flex-col rounded-lg border border-[#DCE6F2] bg-white p-8 text-[#12324D] shadow-xl md:mt-0 min-[900px]:w-11/12"
  >
    <div class="mb-7 pt-5">
      <h2
        class="text-xl md:text-2xl font-opensans lg:text-3xl font-bold pb-3 text-[#12324D]"
      >
        We're Here To Help!
      </h2>
    </div>
    <!-- Name input -->
    <!-- label,placeHolder,id,type,error -->
    <div class="flex gap-4">
      <ContactCustomInput
        class="w-full"
        v-model="formData.fullName"
        place-holder="Enter First Name"
        label="First Name"
        id="name"
        type="text"
        :error="v$.fullName.$error"
      />
      <!-- Phone number input -->

      <ContactCustomInput
        v-model="formData.phoneNumber"
        class="w-full"
        place-holder="(123) 456 789"
        label="Phone Number"
        id="phoneNumber"
        type="text"
        :error="v$.phoneNumber.$error"
      />
    </div>

    <!-- Email input -->
    <ContactCustomInput
      v-model="formData.email"
      place-holder="eg email@email.com"
      label="Email"
      id="email"
      type="email"
      :error="v$.email.$error"
    />
    <!-- Company/school -->
    <div class="flex gap-4">
      <ContactCustomInput
        class="w-full"
        v-model="formData.companyType"
        place-holder="Enter Your company or school"
        label="Company Type"
        id="company"
        type="text"
        :error="v$.companyType.$error"
      />
      <ContactCustomInput
        class="w-full"
        v-model="formData.designation"
        place-holder="Enter Your designation"
        label="Company Designation"
        id="designation"
        type="text"
        :error="v$.designation.$error"
      />
    </div>
    <div class="relative mb-4">
      <label for="enquiry" class="text-sm leading-7 text-[#5C6B7A]"
        >Enquiry Type</label
      >
      <div class="relative">
        <select
          v-model="formData.enquiryType"
          name="enquiryType"
          id="enquiry"
          :aria-invalid="v$.enquiryType.$error"
          class="w-full rounded border border-[#C7D6E6] bg-white py-1 px-3 text-base leading-8 text-[#12324D] outline-none transition-colors duration-200 ease-in-out placeholder:text-[#8A97A6] focus:border-[#2B6CB0] focus:ring-2 focus:ring-[#2B6CB0]/10"
          :class="{
            'border-red-500 focus:border-red-500': v$.enquiryType.$error,
            'border-[#2B6CB0] ': !v$.enquiryType.$error,
          }"
        >
          <option disabled value="">Select enquiry type</option>
          <optgroup label="SAP">
            <option value="SAP Demo">Demo</option>
            <option value="SAP Training">Training</option>
          </optgroup>
          <optgroup label="School">
            <option value="School Training">Training</option>
            <option value="IDM@School">IDM@School</option>
          </optgroup>
        </select>
      </div>
    </div>
    <!-- textarea -->
    <ContactCustomTextArea
      v-model="formData.additionalInfo"
      place-holder="Additional Information"
      label="Additional Information "
      id="additionalInfo"
      :error="v$.additionalInfo.$error"
    />

    <div>
      <button
        type="submit"
        :disabled="sending"
        :aria-busy="sending"
        class="rounded border-0 bg-[#12324D] py-2 px-8 font-bold text-white transition-colors duration-500 hover:bg-[#2B6CB0] focus:outline-none"
      >
        {{ sending ? "Sending..." : "Submit" }}
      </button>
    </div>
  </form>
  <CommonModal
    :data="modalMsg"
    @close-modal="closeModal"
    v-if="isOpen"
    :error="error"
  />
</template>
<style>
optgroup {
  @apply text-[#12324D];
}
</style>
