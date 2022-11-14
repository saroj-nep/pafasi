<template>
  <Header />

  <main class="pt-4 pb-16 lg:pt-4 lg:pb-24 bg-white dark:bg-gray-900">
    <div id="backbutton" class="ml-40">
      <button class="popup-close" title="Zurück" @click="hauptmenu()">
        <img
          class="h-10 w-10"
          src="../../src/assets/return.png"
          alt="Workflow"
        />
      </button>
    </div>
    <div class="flex justify-start mx-auto max-w-screen-xl">
      <article
        class="mx-auto mt-4 w-full max-w-6xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert"
      >
        <header class="mb-4 mt-4 lg:mb-6 not-format">
          <h1
            class="mb-4 mt-4 text-2xl font-extrabold leading-tight text-emerald-600 lg:mb-4 lg:mt-4 lg:text-3xl dark:text-emerald-600"
          >
            Tipps:
          </h1>
        </header>
        <p class="lead">
          Orientieren Sie sich an den Besonderheiten hausärztlichen Denkens und
          Handelns (s. Vorlesung Allgemeinmedizin):
        </p>
        <ul class="list-disc ml-10 mr-10 lg:ml-10 lg:mr-10">
          <li>
            <p class="mt-2">klinisches Denken</p>
          </li>
          <li>
            <p>Erkennen abwendbar gefährlicher Verläufe</p>
          </li>
          <li>
            <p>abwartendes Offenlassen</p>
          </li>
          <li>
            <p>diagnostische Unsicherheit</p>
          </li>
          <li>
            <p>symptomatisches Therapieren</p>
          </li>
        </ul>
        <header class="mb-4 mt-4 lg:mb-6 not-format">
          <h1
            class="mb-4 mt-4 text-2xl font-extrabold leading-tight text-emerald-600 lg:mb-4 lg:mt-4 lg:text-3xl dark:text-emerald-600"
          >
            Nützliche Links zum Nachschlagen:
          </h1>
        </header>

        <ul class="float-left">
          <li>
            <a
              href="https://www.degam.de/fuer-aerzte"
              target="_blank"
              rel="noopener noreferrer"
              class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
            >
              <span class="text-blue-600"
                >DEGAM (Deutsche Gesellschaft für Allgemeinmedizin): Leitlinien
                und Praxisempfehlungen
              </span>
            </a>
          </li>
          <li>
            <a
              href="https://www.awmf.org/leitlinien.html"
              target="_blank"
              rel="noopener noreferrer"
              class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
            >
              <span class="text-blue-600">AWMF Leitlinien</span>
            </a>
          </li>
          <li>
            <a
              href="https://next.amboss.com/de/library/Y30nSf"
              target="_blank"
              rel="noopener noreferrer"
              class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
            >
              <span class="text-blue-600">Amboss-Übersicht: Leitsymptome</span>
            </a>
          </li>
        </ul>
      </article>
    </div>
  </main>
</template>
<script>
import Header from "@/components/DefaultLayout";

export default {
  components: {
    Header,
  },
  created() {
    if (!localStorage.email) {
      this.$router.push("/login");
    }
  },
  methods: {
    hauptmenu() {
      this.$router.push("/main");
    },
  },
};
</script>
