<template>
  <div>
    <Header />

    <div class="mt-10 px-4 sm:px-6 lg:px-8 lg:ml-10">
      <button class="popup-close" title="Zurück" @click="hauptmenu()">
        <img
          class="h-10 w-10"
          src="../../src/assets/return.png"
          alt="Workflow"
        />
      </button>
    </div>

    <div class="flex px-4 sm:px-6 lg:px-8 lg:ml-10 ">
       <div class="flex flex-col md:flex-row w-screen max-w-5xl md:ml-40">
    <!-- Menu Toggle Button -->
    <div class="md:hidden">
      <button
        class="p-4 bg-gray-200"
        @click="toggleMenu"
      >
        Menü
      </button>
    </div>
       <div
      :class="['md:flex', menuOpen ? 'flex' : 'hidden', 'flex-col bg-green-50 shadow-md shadow-green-600 w-full md:w-auto items-start pb-1']"
    >
      <button
        @click.prevent="scrollToSection('description')"
        class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2 w-full md:w-52"
      >
        <p class="text-base leading-4">Patientenbeschreibung</p>
      </button>

      <button
        @click.prevent="scrollToSection('anamnese')"
        class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2 w-full md:w-52"
      >
        <p class="text-base leading-4">Ausführlichere Anamnese durchführen</p>
      </button>
    </div>

      <div class=" w-full px-4 sm:px-6 lg:px-8">
        <div class="w-full h-screen overflow-y-scroll">
          <form class="p-4">
            <!-- Section 1 -->
            <div id="description" class="mb-6">
              <h2
                class="text-xl font-bold mb-4 cursor-pointer"
                @click="toggledescription"
              >
                Patientenbeschreibung
              </h2>
              <div v-if="showdescription" class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input
                  type="text"
                  id="name"
                  class="form-input mt-1 block w-full"
                />
              </div>
              <div v-if="showdescription" class="mb-4">
                <label for="email" class="block text-gray-700">Geslecht</label>
                <input
                  type="text"
                  id="gender"
                  class="form-input mt-1 block w-full"
                />
              </div>
              <div v-if="showdescription" class="mb-4">
                <label for="email" class="block text-gray-700">Alt</label>
                <input
                  type="text"
                  id="age"
                  class="form-input mt-1 block w-full"
                />
              </div>
              <div v-if="showdescription" class="mb-4">
                <label for="email" class="block text-gray-700">Bild</label>
                <input
                  type="text"
                  id="photo"
                  class="form-input mt-1 block w-full"
                />
              </div>
              <div v-if="showdescription" class="mb-4">
                <label for="email" class="block text-gray-700"
                  >Fallbeschreibung</label
                >
                <input
                  type="text"
                  id="patientdescription"
                  class="form-input mt-1 block w-full"
                />
              </div>
              <div v-if="showdescription" class="mb-4">
                <label for="email" class="block text-gray-700"
                  >Einen Blick in die Patientenakte werfen</label
                >
                <input
                  type="text"
                  id="patientfile"
                  class="form-input mt-1 block w-full"
                />
              </div>
            </div>

            <!-- Section 2 -->
            <div id="anamnese" class="mb-6">
              <h2
                class="text-xl font-bold mb-4 cursor-pointer"
                @click="toggleanamnese"
              >
                Ausführlichere Anamnese durchführen
              </h2>
              <div v-if="showanamnese" class="mb-4">
                <label for="beschreiben" class="block text-gray-700"
                  >Beschreiben Sie Ihre Symptome genauer (Charakter, Auslöser,
                  Zeit, etc.).</label
                >
                <input
                  type="text"
                  id="beschreiben"
                  class="form-input mt-1 block w-full"
                />
              </div>
              <div v-if="showanamnese" class="mb-4">
                <label for="akutes" class="block text-gray-700"
                  >Akutes Ereignis oder Änderung der Lebensumstände?</label
                >
                <input
                  type="text"
                  id="akutes"
                  class="form-input mt-1 block w-full"
                />
              </div>
              <div v-if="showanamnese" class="mb-4">
                <label for="medikamen" class="block text-gray-700"
                  >Medikamentenanamnese</label
                >
                <input
                  type="text"
                  id="medikamen"
                  class="form-input mt-1 block w-full"
                />
              </div>
              <div v-if="showanamnese" class="mb-4">
                <label for="gewohn" class="block text-gray-700"
                  >Gewohnheiten, Lebensstil (Sport, Ernährung, etc.)</label
                >
                <input
                  type="text"
                  id="gewohn"
                  class="form-input mt-1 block w-full"
                />
              </div>
              <div v-if="showanamnese" class="mb-4">
                <label for="nikotin" class="block text-gray-700"
                  >Nikotin, Alkohol oder Drogen?</label
                >
                <input
                  type="text"
                  id="nikotin"
                  class="form-input mt-1 block w-full"
                />
              </div>
              <div v-if="showanamnese" class="mb-4">
                <label for="allergien" class="block text-gray-700"
                  >Allergien</label
                >
                <input
                  type="text"
                  id="allergien"
                  class="form-input mt-1 block w-full"
                />
              </div>
              <div v-if="showanamnese" class="mb-4">
                <label for="vegetative" class="block text-gray-700"
                  >Vegetative Anamnese (Appetit, Schlaf, Verdauung, etc.)</label
                >
                <input
                  type="text"
                  id="vegetative"
                  class="form-input mt-1 block w-full"
                />
              </div>
              <div v-if="showanamnese" class="mb-4">
                <label for="gyno" class="block text-gray-700"
                  >Gynäkologische-/Urologische-/Sexualanamnese</label
                >
                <input
                  type="text"
                  id="gyno"
                  class="form-input mt-1 block w-full"
                />
              </div>
              <div v-if="showanamnese" class="mb-4">
                <label for="psyche" class="block text-gray-700">Psyche</label>
                <input
                  type="text"
                  id="psyche"
                  class="form-input mt-1 block w-full"
                />
              </div>
              <div v-if="showanamnese" class="mb-4">
                <label for="familien" class="block text-gray-700"
                  >Familien- und Sozialanamnese (Beruf, Wohnsituation)</label
                >
                <input
                  type="text"
                  id="familien"
                  class="form-input mt-1 block w-full"
                />
              </div>
            </div>

            <!-- Section 3 -->
            <div id="section3" class="mb-6">
              <h2 class="text-xl font-bold mb-4">Section 3</h2>
              <div class="mb-4">
                <label for="message" class="block text-gray-700">Message</label>
                <textarea
                  id="message"
                  class="form-textarea mt-1 block w-full"
                  rows="4"
                ></textarea>
              </div>
            </div>

            <!-- Submit button -->
            <div class="flex justify-end">
              <button
                class="px-4 py-2 bg-red-500 text-white rounded hover:bg-emerald-600"
                type="submit"
              >
                Submit
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
</template>

<script>
import Header from "@/components/DefaultLayout.vue";
import { ref } from "vue";
import axios from "axios";
import { method } from "lodash";

export default {
  setup() {
    const showdescription = ref(true);
    const showanamnese = ref(true);
    
     function scrollToSection(sectionId) {
      const element = document.getElementById(sectionId);
      element.scrollIntoView({ top, behavior: 'smooth' });
    }

    function toggledescription() {
      showdescription.value = !showdescription.value;
    }

    function toggleanamnese() {
      showanamnese.value = !showanamnese.value;
    }
    return {
      showdescription,
      toggledescription,
      showanamnese,
      toggleanamnese,
      scrollToSection
    };
  },
  components: {
    Header,
  },
  data() {
    return {
      email: localStorage.email,
      menuOpen: false,
    };
  },
  created() {
    if (!localStorage.email) {
      this.$router.push("/login");
    }
  },
  methods: {
    hauptmenu() {
      this.$router.push("/casemodification");
    },
    toggleMenu() {
      this.menuOpen = !this.menuOpen;
    },
   
  },
};
</script>

<style scoped>

</style>
