<script setup>
const content = [
  {
    id: 1,
    title: "Management of the School",
    icon: "ph:address-book",
    items: [
      "Access to critical information from all the departments in a timely manner.",
      "Access to critical information from all the departments in a timely manner.",
      "Organized pieces of information for a detailed analysis and deductions.",
      "Better Interaction with the staff members, parents, and the students",
    ],
  },
  {
    id: 2,

    title: "Staff Members",
    icon: "ph:address-book-tabs",
    items: [
      "Convenience in uploading scores, assignments, projects for the classes assigned through the mentor dashboard",
      "Managing profile, leaves and holidays",
      "Enable to apply for leaves and other benefits through the exclusive dashboard.",
      "Determining Key Performance Indicators and taking up new responsibility if assigned.",
    ],
  },
  {
    id: 3,
    title: "Students",
    icon: "ph:user-circle-dashed",
    items: [
      "View Examination Date sheet.",
      "View mark sheet for each term/semester and comparative analysis.",
      "Online submission of homework and assignments",
      "Submission of write-ups and articles for school magazines and journals",
      "Access to important notices, circulars, and school calendar.",
      "Search and reserve books online in library. ",
    ],
  },
  {
    id: 4,
    title: "Parents/Guardians",
    icon: "ph:users-three",
    items: [
      "Access to every piece of information regarding their ward(s) including fees, library, activity, discipline, health, attendance, examination, etc.",
      "Receive alerts for attendance, fee reminders, exam results, PTMs, etc.",
      "Direct Interaction with teacher(s) on any relevant issue.",
      "Provision to download Certificates ",
    ],
  },
];
</script>

<template>
  <CommonReason
    extra-class=" sm:grid-cols-2"
    :contents="content"
    title="Benefits of Edunext mobile App"
    description="TSM benefits everyone involved in schooling, including school management, teachers, and students, by streamlining processes and enhancing overall efficiency."
  />
</template>
