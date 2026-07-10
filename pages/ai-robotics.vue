<template>
  <LazyCommonReusableHero
    :data="{
      title: 'AI & Robotics',
      description: `Preparing Students for the Intelligent Future. Technology is changing the way we live, learn, and work. At IDM@School, we equip students with the knowledge, creativity, and practical skills they need to become confident innovators, critical thinkers, and future technology leaders.`,
      img: aiRoboticsHero,
    }"
    class-name="max-w-2xl bg-cover mx-auto"
    scroll-to="why-ai-robotics"
  />

  <LazyCommonSubHeader
    :data="{
      title: 'Preparing Students for the Intelligent Future',
      description: `Artificial Intelligence (AI) and Robotics are no longer technologies of the future—they are shaping the world today. Our AI & Robotics programme goes beyond theory. Students learn by exploring, building, programming, testing, and solving real-world challenges through engaging, hands-on activities that make learning exciting and meaningful.`,
    }"
  />
  <LazyAiRoboticsWhyAiRobotics />
  <LazyAiRoboticsLearningPath />
  <LazyAiRoboticsSkills />
  <LazyAiRoboticsWhyChooseUs />
  <section class="py-16 bg-secondary text-white" id="mission">
    <div class="wrapper">
      <h2 class="font-grifter font-bold text-2xl md:text-3xl mb-6">
        Building Nigeria's Next Generation of Innovators
      </h2>
      <p class="text-lg md:text-xl leading-relaxed max-w-3xl">
        Our mission is to empower students with the confidence, knowledge, and
        practical skills to use Artificial Intelligence and Robotics not only to
        understand the future—but to help shape it.
      </p>
    </div>
  </section>
  <LazyCommonContact />
</template>
<script setup>
import { aiRoboticsTraining as aiRoboticsHero } from "../lib/images";
</script>

<style scoped></style>
