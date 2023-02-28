<template>
  <div class="grid grid-cols-1 gap-2">
    <div class="sticky top-0 bg-emerald-600">
      <h1 style="font-size: 1.5em" class="h1 text-white text-center">
        <b>
          Wählen Sie aus, welche nicht apparativen Untersuchungen am Kopf Sie
          durchführen möchten.​​</b
        >
      </h1>
    </div>
    <br />

    <div v-for="click in clickz">
      <div v-if="click.user == email" class="flex justify-center">
        <button
          v-if="click.kopfinspektion == 1"
          id="inspektionquestion"
          class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
          @click.prevent="
            countertimeInspektion();
            displayInspektion();
          "
        >
          Inspektion und Palpation
        </button>

        <button
          v-else
          id="inspektionquestion"
          class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
          @click.prevent="
            counterInspektion();
            displayInspektion();
          "
        >
          Inspektion und Palpation
        </button>

        <button
          v-if="click.kopfnase == 1"
          id="nasequestion"
          class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
          @click.prevent="
            countertimeNase();
            displayNase();
          "
        >
          Nase untersuchen
        </button>

        <button
          v-else
          id="nasequestion"
          class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
          @click.prevent="
            counterNase();
            displayNase();
          "
        >
          Nase untersuchen
        </button>

        <button
          v-if="click.kopfmund == 1"
          id="mundquestion"
          class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
          @click.prevent="
            countertimeMund();
            displayMund();
          "
        >
          Mund/Mundhöhle/Rachen untersuchen
        </button>
        <button
          v-else
          id="mundquestion"
          class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
          @click.prevent="
            counterMund();
            displayMund();
          "
        >
          Mund/Mundhöhle/Rachen untersuchen
        </button>

        <button
          v-if="click.kopfohren == 1"
          id="ohrenquestion"
          class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
          @click.prevent="
            countertimeOhren();
            displayOhren();
          "
        >
          Ohren untersuchen
        </button>
        <button
          v-else
          id="ohrenquestion"
          class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
          @click.prevent="
            counterOhren();
            displayOhren();
          "
        >
          Ohren untersuchen
        </button>
      </div>

      <div v-if="click.user == email" class="flex justify-center">
        <button
          v-if="click.kopflymph == 1"
          id="lymphquestion"
          class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
          @click.prevent="
            countertimeLymph();
            displayLymph();
          "
        >
          Lymphknoten abtasten
        </button>

        <button
          v-else
          id="lymphquestion"
          class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
          @click.prevent="
            counterLymph();
            displayLymph();
          "
        >
          Lymphknoten abtasten
        </button>

        <button
          v-if="click.kopfschild == 1"
          id="schildquestion"
          class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
          @click.prevent="
            countertimeSchild();
            displaySchild();
          "
        >
          Schilddrüse untersuchen
        </button>

        <button
          v-else
          id="schildquestion"
          class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
          @click.prevent="
            counterSchild();
            displaySchild();
          "
        >
          Schilddrüse untersuchen
        </button>

        <button
          v-if="click.kopfhals == 1"
          id="halsquestion"
          class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
          @click.prevent="
            countertimeHals();
            displayHals();
          "
        >
          Halswirbelsäule
        </button>
        <button
          v-else
          id="halsquestion"
          class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
          @click.prevent="
            counterHals();
            displayHals();
          "
        >
          Halswirbelsäule
        </button>

        <button
          v-if="click.kopforient == 1"
          id="orientquestion"
          class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
          @click.prevent="
            countertimeOrient();
            displayOrient();
          "
        >
          Orientierende neurologische Untersuchung/Funktionsprüfung
        </button>

        <button
          v-else
          id="orientquestion"
          class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
          @click.prevent="
            counterOrient();
            displayOrient();
          "
        >
          Orientierende neurologische Untersuchung/Funktionsprüfung
        </button>
      </div>
    </div>
  </div>
  <h3 id="inspektionanswer" style="display: none">
   Gesichtshaut eher blass, altersgerechte Fältelung. Mehrere kleine unauffällige Naevi auf den Wangen, Alterswarze am Kinn links, mehrere Lentigines seniles (Altersflecken) an den Schläfen. Keine Hämatome. Augen normal geöffnet, keine Ptosis, Pupillen seitengleich groß, Skleren und Konjunktiven nicht gerötet, Trigeminus-Druckpunkte nicht schmerzhaft, Schädelknochen palpatorisch o.p.B, Halsvenen nicht gestaut.
  </h3>
  <h3 id="naseanswer" style="display: none">
   Nasenrücken gerade, fest, keine Nasenseptumdeviation, kein Hämatom, keine Epistaxis.
  </h3>
  <h3 id="mundanswer" style="display: none">
  Normales Lippenrot, keine Bläschen, keine Rhagarden, Mundöffnung gut durchführbar, Zahnprothese oben, unten gut erhaltene eigene Zähne, gepflegt, Munschleimhaut feucht, rosig, o.p.B, Rachenmandeln nicht vergrößert, keine Rötung, keine Beläge.
  </h3>
  <h3 id="ohrenanswer" style="display: none">
  Ohrmuschel o.p.B., Gehörgänge bds frei und reizlos, Trommelfelle bds. intakt, nicht gerötet.
  </h3>
  <h3 id="lymphanswer" style="display: none">
 Keine LK im Gesichts-/Halsbereich tastbar.
  </h3>
  <h3 id="schildanswer" style="display: none">
  Keine Struma, keine Knoten, beweglich, schmerzlos.
  </h3>
  <h3 id="halsanswer" style="display: none">
 Kopfhaltung gerade, Kopfbewegung in alle Richtungen gut und schmerzfrei möglich, keine muskulären Resistenzen, Wirbelkörperfortsätze in einer Linie tastbar, kein Meningismus.
  </h3>
  <h3 id="orientanswer" style="display: none">Alle Hirnnerven o.p.B.</h3>
</template>

<script>
import Popup from "@/components/Popup.vue";
import { ref } from "vue";
import Notepad from "@/components/Holderbaum_Notepad.vue";
import Kopf from "@/components/Holderbaum_Untersuchen/Holderbaum_Kopf.vue";
import Rumpf from "@/components/Holderbaum_Untersuchen/Holderbaum_Rumpf.vue";
import Obere from "@/components/Holderbaum_Untersuchen/Holderbaum_Obere.vue";
import Untere from "@/components/Holderbaum_Untersuchen/Holderbaum_Untere.vue";
import Genital from "@/components/Holderbaum_Untersuchen/Holderbaum_Genital.vue";
import axios from "axios";

export default {
  name: "Untersuchens",
  data() {
    return {
      counters: {
        safety: null,
        satisfaction: null,
        time: null,
        economy: null,
        step: "",
      },

      showTooltip: false,
      showNotepad: false,
      clickz: [],
      email: localStorage.email,
    };
  },

  created() {
    this.clicks();
  },

  methods: {
    clicks() {
      axios
        .get("./Api/holderbaum_api.php?action=getclicks")

        .then((response) => {
          this.clickz = response.data;
        });
    },
    countertimeInspektion() {
      var data = new FormData();

      data.append("time", 0.1);
      data.append(
        "step",
        "Sie haben Inspektion & Palpation unter Nicht Apparative Untersuchen: Kopf angekreuzt"
      );
      data.append("onlineuser", localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/holderbaum_api.php?action=countertimevariable",
          data
        )
        .then((res) => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
            this.clicks();
          }
        })
        .catch((err) => {
          console.log("Error", err);
        });
    },

    countertimeNase() {
      var data = new FormData();

      data.append("time", 0.1);
      data.append(
        "step",
        "Sie haben Nase Untersuchen unter Nicht Apparative Untersuchen: Kopf angekreuzt"
      );
      data.append("onlineuser", localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/holderbaum_api.php?action=countertimevariable",
          data
        )
        .then((res) => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
            this.clicks();
          }
        })
        .catch((err) => {
          console.log("Error", err);
        });
    },

    countertimeMund() {
      var data = new FormData();

      data.append("time", 0.3);
      data.append(
        "step",
        "Sie haben Mund/Mundhoele/Rachen untersuchen unter Nicht Apparative Untersuchen: Kopf angekreuzt"
      );
      data.append("onlineuser", localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/holderbaum_api.php?action=countertimevariable",
          data
        )
        .then((res) => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
            this.clicks();
          }
        })
        .catch((err) => {
          console.log("Error", err);
        });
    },
    countertimeOhren() {
      var data = new FormData();

      data.append("time", 0.2);
      data.append(
        "step",
        "Sie haben Ohren untersuchen unter Nicht Apparative Untersuchen: Kopf angekreuzt"
      );
      data.append("onlineuser", localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/holderbaum_api.php?action=countertimevariable",
          data
        )
        .then((res) => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
            this.clicks();
          }
        })
        .catch((err) => {
          console.log("Error", err);
        });
    },
    countertimeLymph() {
      var data = new FormData();

      data.append("time", 0.2);
      data.append(
        "step",
        "Sie haben Lymphknoten abtasten unter Nicht Apparative Untersuchen: Kopf angekreuzt"
      );
      data.append("onlineuser", localStorage.email);

      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/holderbaum_api.php?action=countertimevariable",
          data
        )
        .then((res) => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
            this.clicks();
          }
        })
        .catch((err) => {
          console.log("Error", err);
        });
    },
    countertimeSchild() {
      var data = new FormData();

      data.append("time", 0.2);
      data.append(
        "step",
        "Sie haben Schilddrüse untersuchen unter Nicht Apparative Untersuchen: Kopf angekreuzt"
      );
      data.append("onlineuser", localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/holderbaum_api.php?action=countertimevariable",
          data
        )
        .then((res) => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
            this.clicks();
          }
        })
        .catch((err) => {
          console.log("Error", err);
        });
    },
    countertimeHals() {
      var data = new FormData();

      data.append("time", 0.2);
      data.append(
        "step",
        "Sie haben Halswirbelsäule unter Nicht Apparative Untersuchen: Kopf angekreuzt"
      );
      data.append("onlineuser", localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/holderbaum_api.php?action=countertimevariable",
          data
        )
        .then((res) => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
            this.clicks();
          }
        })
        .catch((err) => {
          console.log("Error", err);
        });
    },
    countertimeOrient() {
      var data = new FormData();

      data.append("time", 3.5);
      data.append(
        "step",
        "Sie haben orientierende neurologische Untersuchung / Funktionsprüfung unter Nicht Apparative Untersuchen: Kopf angekreuzt"
      );
      data.append("onlineuser", localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/holderbaum_api.php?action=countertimevariable",
          data
        )
        .then((res) => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
            this.clicks();
          }
        })
        .catch((err) => {
          console.log("Error", err);
        });
    },

    counterInspektion() {
      var data = new FormData();

      data.append("economy", -2.632);
      data.append("kopfinspektion", 1);
      data.append("satisfaction", 1);
      data.append("time", 0.1);

      data.append(
        "step",
        "Sie haben Inspektion & Palpation unter Nicht Apparative Untersuchen: Kopf angekreuzt"
      );
      data.append("onlineuser", localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/holderbaum_api.php?action=countervariable",
          data
        )
        .then((res) => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
            this.clicks();
          }
        })
        .catch((err) => {
          console.log("Error", err);
        });
    },

    counterNase() {
      var data = new FormData();

      data.append("economy", -2.632);
      data.append("kopfnase", 1);
      data.append("satisfaction", 1);
      data.append("time", 0.1);

      data.append(
        "step",
        "Sie haben Nase Untersuchen unter Nicht Apparative Untersuchen: Kopf angekreuzt"
      );
      data.append("onlineuser", localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/holderbaum_api.php?action=countervariable",
          data
        )
        .then((res) => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
            this.clicks();
          }
        })
        .catch((err) => {
          console.log("Error", err);
        });
    },

    counterMund() {
      var data = new FormData();

      data.append("economy", -2.632);
      data.append("kopfmund", 1);
      data.append("satisfaction", 1);
      data.append("time", 0.3);

      data.append(
        "step",
        "Sie haben Mund/Mundhoele/Rachen untersuchen unter Nicht Apparative Untersuchen: Kopf angekreuzt"
      );
      data.append("onlineuser", localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/holderbaum_api.php?action=countervariable",
          data
        )
        .then((res) => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
            this.clicks();
          }
        })
        .catch((err) => {
          console.log("Error", err);
        });
    },
    counterOhren() {
      var data = new FormData();

      data.append("economy", -2.632);
      data.append("kopfohren", 1);
      data.append("satisfaction", 1);
      data.append("time", 0.2);

      data.append(
        "step",
        "Sie haben Ohren untersuchen unter Nicht Apparative Untersuchen: Kopf angekreuzt"
      );
      data.append("onlineuser", localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/holderbaum_api.php?action=countervariable",
          data
        )
        .then((res) => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
            this.clicks();
          }
        })
        .catch((err) => {
          console.log("Error", err);
        });
    },
    counterLymph() {
      var data = new FormData();

      data.append("economy", -2.632);
      data.append("kopflymph", 1);
      data.append("satisfaction",0);
      data.append("time", 0.2);

      data.append(
        "step",
        "Sie haben Lymphknoten abtasten unter Nicht Apparative Untersuchen: Kopf angekreuzt"
      );
      data.append("onlineuser", localStorage.email);

      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/holderbaum_api.php?action=countervariable",
          data
        )
        .then((res) => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
            this.clicks();
          }
        })
        .catch((err) => {
          console.log("Error", err);
        });
    },
    counterSchild() {
      var data = new FormData();

      data.append("economy", -2.632);
      data.append("satisfaction", 1);
      data.append("kopfschild", 1);
      data.append("time", 0.2);

      data.append(
        "step",
        "Sie haben Schilddrüse untersuchen unter Nicht Apparative Untersuchen: Kopf angekreuzt"
      );
      data.append("onlineuser", localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/holderbaum_api.php?action=countervariable",
          data
        )
        .then((res) => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
            this.clicks();
          }
        })
        .catch((err) => {
          console.log("Error", err);
        });
    },
    counterHals() {
      var data = new FormData();

      data.append("economy", -2.632);
      data.append("satisfaction", 1);
      data.append("kopfhals", 1);
      data.append("time", 0.2);

      data.append(
        "step",
        "Sie haben Halswirbelsäule unter Nicht Apparative Untersuchen: Kopf angekreuzt"
      );
      data.append("onlineuser", localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/holderbaum_api.php?action=countervariable",
          data
        )
        .then((res) => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
            this.clicks();
          }
        })
        .catch((err) => {
          console.log("Error", err);
        });
    },
    counterOrient() {
      var data = new FormData();

      data.append("economy", -2.632);
      data.append("satisfaction", 1);
      data.append("kopforient", 1);
      data.append("time", 3.5);

      data.append(
        "step",
        "Sie haben orientierende neurologische Untersuchung / Funktionsprüfung unter Nicht Apparative Untersuchen: Kopf angekreuzt"
      );
      data.append("onlineuser", localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/holderbaum_api.php?action=countervariable",
          data
        )
        .then((res) => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
            this.clicks();
          }
        })
        .catch((err) => {
          console.log("Error", err);
        });
    },
    displayInspektion() {
      inspektionanswer.style.display = "block";
      inspektionquestion.style.opacity = "0.5";
      nasequestion.style.opacity = "1";
      mundquestion.style.opacity = "1";
      halsquestion.style.opacity = "1";
      schildquestion.style.opacity = "1";
      ohrenquestion.style.opacity = "1";
      orientquestion.style.opacity = "1";
      lymphquestion.style.opacity = "1";
      naseanswer.style.display = "none";
      mundanswer.style.display = "none";
      halsanswer.style.display = "none";
      lymphanswer.style.display = "none";
      ohrenanswer.style.display = "none";
      schildanswer.style.display = "none";
      orientanswer.style.display = "none";
    },
    displayNase() {
      naseanswer.style.display = "block";
      nasequestion.style.opacity = "0.5";
      inspektionanswer.style.display = "none";
      mundanswer.style.display = "none";
      halsanswer.style.display = "none";
      lymphanswer.style.display = "none";
      ohrenanswer.style.display = "none";
      schildanswer.style.display = "none";
      orientanswer.style.display = "none";
      inspektionquestion.style.opacity = "1";
      mundquestion.style.opacity = "1";
      halsquestion.style.opacity = "1";
      schildquestion.style.opacity = "1";
      ohrenquestion.style.opacity = "1";
      orientquestion.style.opacity = "1";
      lymphquestion.style.opacity = "1";
    },
    displayMund() {
      mundanswer.style.display = "block";
      mundquestion.style.opacity = "0.5";
      naseanswer.style.display = "none";
      inspektionanswer.style.display = "none";
      halsanswer.style.display = "none";
      lymphanswer.style.display = "none";
      ohrenanswer.style.display = "none";
      schildanswer.style.display = "none";
      orientanswer.style.display = "none";
      nasequestion.style.opacity = "1";
      inspektionquestion.style.opacity = "1";
      halsquestion.style.opacity = "1";
      schildquestion.style.opacity = "1";
      ohrenquestion.style.opacity = "1";
      orientquestion.style.opacity = "1";
      lymphquestion.style.opacity = "1";
    },
    displayHals() {
      halsanswer.style.display = "block";
      halsquestion.style.opacity = "0.5";
      naseanswer.style.display = "none";
      mundanswer.style.display = "none";
      inspektionanswer.style.display = "none";
      lymphanswer.style.display = "none";
      ohrenanswer.style.display = "none";
      schildanswer.style.display = "none";
      orientanswer.style.display = "none";
      nasequestion.style.opacity = "1";
      mundquestion.style.opacity = "1";
      inspektionquestion.style.opacity = "1";
      schildquestion.style.opacity = "1";
      ohrenquestion.style.opacity = "1";
      orientquestion.style.opacity = "1";
      lymphquestion.style.opacity = "1";
    },
    displayLymph() {
      lymphanswer.style.display = "block";
      lymphquestion.style.opacity = "0.5";
      naseanswer.style.display = "none";
      mundanswer.style.display = "none";
      halsanswer.style.display = "none";
      inspektionanswer.style.display = "none";
      ohrenanswer.style.display = "none";
      schildanswer.style.display = "none";
      orientanswer.style.display = "none";
      nasequestion.style.opacity = "1";
      mundquestion.style.opacity = "1";
      halsquestion.style.opacity = "1";
      schildquestion.style.opacity = "1";
      ohrenquestion.style.opacity = "1";
      orientquestion.style.opacity = "1";
      inspektionquestion.style.opacity = "1";
    },
    displayOhren() {
      ohrenanswer.style.display = "block";
      ohrenquestion.style.opacity = "0.5";
      naseanswer.style.display = "none";
      mundanswer.style.display = "none";
      halsanswer.style.display = "none";
      lymphanswer.style.display = "none";
      inspektionanswer.style.display = "none";
      schildanswer.style.display = "none";
      orientanswer.style.display = "none";
      nasequestion.style.opacity = "1";
      mundquestion.style.opacity = "1";
      halsquestion.style.opacity = "1";
      schildquestion.style.opacity = "1";
      inspektionquestion.style.opacity = "1";
      orientquestion.style.opacity = "1";
      lymphquestion.style.opacity = "1";
    },
    displaySchild() {
      schildanswer.style.display = "block";
      schildquestion.style.opacity = "0.5";
      naseanswer.style.display = "none";
      mundanswer.style.display = "none";
      halsanswer.style.display = "none";
      lymphanswer.style.display = "none";
      ohrenanswer.style.display = "none";
      inspektionanswer.style.display = "none";
      orientanswer.style.display = "none";
      nasequestion.style.opacity = "1";
      mundquestion.style.opacity = "1";
      halsquestion.style.opacity = "1";
      inspektionquestion.style.opacity = "1";
      ohrenquestion.style.opacity = "1";
      orientquestion.style.opacity = "1";
      lymphquestion.style.opacity = "1";
    },
    displayOrient() {
      orientanswer.style.display = "block";
      orientquestion.style.opacity = "0.5";
      naseanswer.style.display = "none";
      mundanswer.style.display = "none";
      halsanswer.style.display = "none";
      lymphanswer.style.display = "none";
      ohrenanswer.style.display = "none";
      schildanswer.style.display = "none";
      inspektionanswer.style.display = "none";
      nasequestion.style.opacity = "1";
      mundquestion.style.opacity = "1";
      halsquestion.style.opacity = "1";
      schildquestion.style.opacity = "1";
      ohrenquestion.style.opacity = "1";
      inspektionquestion.style.opacity = "1";
      lymphquestion.style.opacity = "1";
    },
  },

  setup() {
    const popupTriggers = ref({
      buttonTrigger: false,
    });
    const TogglePopup = (trigger) => {
      console.log(trigger, "trigger");
      popupTriggers.value[trigger] = !popupTriggers.value[trigger];
    };
    return {
      Popup,
      popupTriggers,
      TogglePopup,
    };
  },

  components: { Popup, Notepad, Kopf, Rumpf, Obere, Untere, Genital },
};
</script>

<style scoped>
h3 {
  background: rgb(5, 150, 105);
  padding: 20px;
  border-radius: 10px;
  margin: 10px auto;
  /* width: 50%; */
  cursor: pointer;
  color: rgb(255, 255, 255);
}

h3:hover {
  background: rgb(5, 150, 105);
}
.button {
  background: black;
  margin-right: 5%;
  margin-left: 1%;
  margin-top: 1%;
  color: white;
  padding: 2%;
  border-radius: 20px;

  width: 85%;
  /* width: 20%; */
  cursor: pointer;
  /* color: #444   */
}
.submitbutton {
  background: #be123c;
  color: white;
  padding: 20px;
  border-radius: 10px;
  margin: 5px auto;
  width: 400px;
  /* width: 20%; */
  cursor: pointer;
  /* color: #444   */
}
.h1 {
  font-size: large;
}

.tooltip {
  position: relative;
  display: inline-block;
  /* border-bottom: 1px dotted black; */
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 100;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 100;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}
</style>
