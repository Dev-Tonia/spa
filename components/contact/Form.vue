<script setup>
import { useVuelidate } from "@vuelidate/core";
import { required, email } from "@vuelidate/validators";
// const formData = ref(formInitial);
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
const submit = async () => {
  v$.value.$validate();
  if (v$.value.$error) {
    isOpen.value = true;
    error.value = true;
    modalMsg.value = "Error Occurred \nAll the input field are required.";
    return;
  } else {
    error.value = false;
    isOpen.value = true;
    modalMsg.value = "Thank you for contacting IDM Service .";
  }

  formData.fullName = "";
  formData.companyType = "";
  formData.email = "";
  formData.phoneNumber = "";
  formData.additionalInfo = "";
  formData.designation = "";
  formData.enquiryType = "";
};
function closeModal() {
  isOpen.value = false;
}
</script>
<template>
  <form
    @submit.prevent="submit"
    class="mx-auto mt-10 flex w-full flex-col bg-secondary text-white rounded-lg p-8 shadow-2xl md:mt-0 min-[900px]:w-11/12"
  >
    <div class="mb-7 pt-5">
      <h2 class="text-xl md:text-2xl font-grifter lg:text-3xl font-bold pb-3">
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
      label="Company Type"
      id="company"
      type="text"
      :error="v$.designation.$error"
    />
    <div class="relative mb-4">
      <label for="enquiry" class="text-sm leading-7 text-gray-400"
        >Enquiry Type</label
      >
      <div class="relative">
        <select
          name="cars"
          id="cars"
          class="w-full rounded border border-gray-600 bg-transparent bg-opacity-20 py-1 px-3 text-base leading-8 outline-none transition-colors duration-200 ease-in-out placeholder:text-gray-500 focus:border-blue-500 focus:bg-transparent focus:ring-2 focus:ring-transparent"
          :class="{
            'border-red-500 focus:border-red-500': error,
            'border-[#42d392] ': !error,
          }"
        >
          <optgroup label="SAP">
            <option value="volvo">Demo</option>
            <option value="saab">Training</option>
          </optgroup>
          <optgroup label="School">
            <option value="mercedes">Training</option>
            <option value="audi">IDM@School</option>
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
        class="rounded border-0 bg-primary py-2 px-8 font-bold text-gray-100 transition-colors duration-500 focus:outline-none"
      >
        Submit
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
  @apply text-gray-950;
}
</style>
