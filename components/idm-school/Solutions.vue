<script setup>
import {
  robotics,
  ai,
  coding,
  gameDev,
  biIntergration,
  animation,
  modelling,
  graphics,
  paint,
  microsoft,
} from "../../lib/images";

const codingContents = [
  {
    id: 1,
    title: "Small Basic",
    description:
      "Its one of the many versions of BASIC which stands for Beginner’s All Symbolic Instruction code and is meant to teach programming for beginners.",
  },
  {
    id: 2,
    title: "Visual Basic",
    description:
      "Visual means that it uses a Graphical User Interface (GUI) to create programs, and Basic means that the language is based on BASIC programming language.",
  },
  {
    id: 3,
    title: "Kturtle",
    description:
      "Teaches you how to program in an easy way. You can draw figures, type text and perform simple math calculation is Kturtle.",
  },
  {
    id: 4,
    title: "Python",
    description:
      "It’s an object-oriented programming language that’s used by thousands of people to do things from testing microphones at intel, to powering Instagram, to building video games with the PyGame library.",
  },
  {
    id: 5,
    title: "Java",
    description:
      "Java is one of the most popular programming languages in use, particularly for client server web applications, with a reported 9 million developers.",
  },
  {
    id: 6,
    title: "HTML5",
    description:
      "It’s a markup language used for structuring and presenting content on the world wide web .it is the fifth and current version of the HTML standard",
  },
  {
    id: 7,
    title: "XML",
    description:
      "It is often a complement to HTML. In many HTML applications, XML is used to store or transport data, while HTML is used to format and display the same data.",
  },
];
const graphicsContents = [
  {
    id: 1,
    title: "FL (FLASH)",
    description:
      "Flash is a software package used for creating interactive web pages that combines images, sounds, video and animations. You may create both drawings and animations with it.",
  },
  {
    id: 2,
    title: "PS (PHOTOSHOP)",
    description:
      "Photoshop-one stop image editing application that can solve almost any problem with images.",
  },
  {
    id: 3,
    title: "DW (DREAMWEAVER)",
    description:
      "Used for creating individual web pages and complete websites. It has a WYSIWYG (what you see is what you get) editor, which means you design your web page as you wish to see them by placing elements in the editor.",
  },
];
</script>

<template>
  <section class="py-16 bg-secondary">
    <div class="wrapper">
      <div class="bg-white -mt-24 p-10 rounded">
        <div>
          <h3 class="font-grifter text-primary font-bold text-5xl py-2">
            Our Solutions
          </h3>

          <p class="py-4 text-xl text-[#7A7474]">
            This solution are designed to respond to the demands of the 21st
            century, offering a comprehensive solution for tech education from
            primary to senior secondary school.
          </p>
        </div>
        <!-- robotics -->
        <IdmSchoolIdmAccordion
          :data="{
            value: 'Robotics',
            title: 'Robotics',
          }"
        >
          <div class="flex flex-col md:flex-row gap-6 lg:gap-10 py-4">
            <div>
              <p class="text-neutral-500">
                Introducing students to the fascinating world of robotics, where
                they learn to design, build, and program robots, enhancing their
                problem-solving and critical-thinking skills.
              </p>
              <IdmSchoolAccordionCard
                :data="{
                  title: 'IDM ROBO CAMP',
                  description: ` A unique platform which motivates, inspires and engages
                  students to experience a natural, practical, hands on and
                  experimental learning. Students will learn science,
                  technology, programming, Engineering and mathematics concepts
                  in a fun, loving and excelling way aiming towards Endless
                  possibilities.`,
                }"
              />
            </div>
            <div>
              <img :src="robotics" alt="" />
            </div>
          </div>
        </IdmSchoolIdmAccordion>
        <!-- ai -->
        <IdmSchoolIdmAccordion
          :data="{
            value: 'AI',
            title: 'Artificial Intelligence (AI)',
          }"
        >
          <div class="py-4">
            <p class="text-neutral-500">
              We provide a foundational understanding of AI concepts, our
              courses delve into machine learning, neural networks, and data
              analysis, preparing students for a future driven by intelligent
              systems.
            </p>
            <div class="mt-4">
              <img :src="ai" alt="" />
            </div>
          </div>
        </IdmSchoolIdmAccordion>
        <!-- coding -->
        <IdmSchoolIdmAccordion
          :data="{
            value: 'Coding',
            title: 'Software Programming (Coding)',
          }"
        >
          <div class="flex flex-col md:flex-row gap-6 lg:gap-10 py-4">
            <div class="md:w-[70%]">
              <p class="text-neutral-500">
                Introducing students to the language of the future, our coding
                courses range from basic programming concepts to advanced
                software development, empowering students to build their own
                applications and solutions.
              </p>
              <div
                class="mt-4 grid min-[500px]:grid-cols-2 md:grid-cols-3 gap-5 lg:gap-8"
              >
                <IdmSchoolAccordionCard
                  v-for="(item, index) in codingContents"
                  :key="index"
                  :data="item"
                />
              </div>
            </div>
            <div class="md:w-[30%]">
              <img :src="coding" alt="" class="w-full" />
            </div>
          </div>
        </IdmSchoolIdmAccordion>
        <!-- game development -->
        <IdmSchoolIdmAccordion
          :data="{
            value: 'Game Development',
            title: 'Game Development',
          }"
        >
          <div class="flex flex-col md:flex-row gap-6 lg:gap-10 py-4">
            <div>
              <p class="text-neutral-500">
                Guiding students through the exciting process of game creation,
                our game development courses teach the fundamentals of game
                design, programming, and interactive storytelling.
              </p>
              <IdmSchoolAccordionCard
                :data="{
                  title: 'GDevelop',
                  description: `Allows you to simply and quickly create your own video games.
                  Just fire up the editor and start creating, no programming
                  knowledge required. Its flexible architecture allows you to
                  choose if you want to create an HTML5 game that can be played
                  on the web and exported to iOS and Android, or a native game
                  for your operating system. or activate both platforms and
                  export your game everywhere.`,
                }"
              />
            </div>
            <div>
              <img :src="gameDev" alt="" />
            </div>
          </div>
        </IdmSchoolIdmAccordion>
        <!-- my sql -->
        <IdmSchoolIdmAccordion
          :data="{
            value: 'MY SQL',
            title: 'MY SQL',
          }"
        >
          <div class="py-4">
            <p class="text-neutral-500">
              MYSQL is a free open source database management system (DBMS). It
              manages databases and connects them to software’s.
            </p>
            <div class="mt-4">
              <img :src="biIntergration" alt="" />
            </div>
          </div>
        </IdmSchoolIdmAccordion>
        <!-- animation -->
        <IdmSchoolIdmAccordion
          :data="{
            value: 'Animation and Multimedia',
            title: 'Animation and Multimedia',
          }"
        >
          <div class="py-4">
            <p class="text-neutral-500">
              Encouraging creativity and storytelling, our animation and media
              courses cover everything from basic animation techniques to
              advanced media production, enabling students to bring their
              imaginations to life.
            </p>
            <div class="mt-4">
              <img :src="animation" alt="" />
            </div>
          </div>
        </IdmSchoolIdmAccordion>
        <!-- 3d modelling -->
        <IdmSchoolIdmAccordion
          :data="{
            value: '3D Modelling',
            title: '3D Modelling',
          }"
        >
          <div class="py-4">
            <p class="text-neutral-500">
              Blender’s features include 3D modelling, texturing, UV unwrapping,
              raster graphics editing, rigging and skinning, fluid and smoke
              simulation, particle simulation, soft body simulation, sculpting,
              animating, match moving, camera tracking, rendering, video editing
              and composting.
            </p>
            <div class="mt-4">
              <img :src="modelling" alt="" />
            </div>
          </div>
        </IdmSchoolIdmAccordion>
        <!-- microsoft -->
        <IdmSchoolIdmAccordion
          :data="{
            value: 'Microsoft Suites',
            title: 'Microsoft Suites',
          }"
        >
          <div class="py-4">
            <p class="text-neutral-500">
              Equipping students with essential office productivity skills, our
              courses on Microsoft Suites cover Word, Excel, PowerPoint, and
              more, ensuring proficiency in essential tools for academic and
              professional success.
            </p>
            <div class="mt-4">
              <img :src="microsoft" alt="" />
            </div>
          </div>
        </IdmSchoolIdmAccordion>
        <!-- paint -->
        <IdmSchoolIdmAccordion
          :data="{
            value: 'Paint Brush',
            title: 'Paint Brush',
          }"
        >
          <div class="flex flex-col md:flex-row gap-6 lg:gap-10 py-4">
            <div>
              <p class="text-neutral-500">
                It’s a fun program that helps in drawing and coloring anything
                you like
              </p>
              <IdmSchoolAccordionCard
                :data="{
                  title: 'TUX PAINT',
                  description: ` a software like paint brush, meant for drawing and painting
                  with interesting sound effects.`,
                }"
              />
            </div>
            <div>
              <img :src="paint" alt="" class="h-[335px]" />
            </div>
          </div>
        </IdmSchoolIdmAccordion>
        <!-- graphics -->
        <IdmSchoolIdmAccordion
          :data="{
            value: 'Graphics Design',
            title: 'Graphics Design',
          }"
        >
          <div class="flex flex-col md:flex-row gap-6 lg:gap-10 py-4">
            <div class="md:w-[70%]">
              <p class="text-neutral-500">
                Fostering artistic expression, our graphics design courses cover
                principles of design, digital illustration, and multimedia,
                allowing students to create visually stunning projects.
              </p>
              <div
                class="mt-4 grid min-[500px]:grid-cols-2 md:grid-cols-3 gap-5 lg:gap-8"
              >
                <IdmSchoolAccordionCard
                  v-for="(item, index) in graphicsContents"
                  :key="index"
                  :data="item"
                />
              </div>
            </div>
            <div class="md:w-[30%]">
              <img :src="graphics" alt="" class="w-full" />
            </div>
          </div>
        </IdmSchoolIdmAccordion>
      </div>
    </div>
  </section>
</template>

<style lang="scss" scoped></style>
