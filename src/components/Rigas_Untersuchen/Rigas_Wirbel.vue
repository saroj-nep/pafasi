<template>
  <div class="grid grid-cols-1 gap-2">
    <div class="bg-emerald-600">
      <h1 style="font-size: 1.5em" class="h1 text-white text-center">
        <b
          >Wählen Sie aus, welche nicht apparativen Untersuchungen Sie an der
          Wirbelsäule durchführen möchten.</b
        >
      </h1>
    </div>
    <br />

    <div v-for="click in clickz">
      <div v-if="click.user == email" class="flex justify-center">
        <button
          v-if="click.wirbelinspektion == 1"
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
          v-if="click.wirbelfunktion == 1"
          id="nasequestion"
          class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
          @click.prevent="
            countertimeNase();
            displayNase();
          "
        >
          Funktionsuntersuchung
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
          Funktionsuntersuchung
        </button>

        <button
          v-if="click.wirbelhals == 1"
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
      </div>
    </div>
  </div>
  <h3 id="inspektionanswer" style="display: none">
    Kein Schulter- oder Beckenschiefstand, paravertebrale Muskulatur weich,
    mäßiger Klopfschmerz, am ehesten Flankenklopfschmerz links.
  </h3>
  <h3 id="naseanswer" style="display: none">
    Ante-, Retro-, Lateroflexion sowie Rotation mit normaler Beweglichkeit und
    schmerzfrei möglich, bei Vorbeugung kein Hinweis auf ausgeprägte Skoliose,
    kein Vorlaufphänomen, keine Schmerzen beim Vorbeugen oder Hochkommen, kein
    Rüttelschmerz, Lasègue bds. negativ, kein Meningismus.
  </h3>
  <h3 id="halsanswer" style="display: none">
    Kopfhaltung gerade, Kopfbewegung in alle Richtungen gut und schmerzfrei
    möglich, keine muskulären Resistenzen, Wirbelkörperfortsätze in einer Linie
    tastbar, kein Meningismus.
  </h3>
</template>

<script>
import Popup from "@/components/Popup.vue";
import { ref } from "vue";
import Notepad from "@/components/Rigas_Notepad.vue";
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
      showNotepad: true,
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
        .get("./Api/rigas_api.php?action=getclicks")

        .then((response) => {
          this.clickz = response.data;
        });
    },
    countertimeInspektion() {
      var data = new FormData();

      data.append("time", 0.2);

      data.append(
        "step",
        "Sie haben Inspektion und Palpation unter Nicht Apparative Untersuchen: Rumpf-Wirbelsauele angekreuzt"
      );
      data.append("onlineuser", localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/rigas_api.php?action=countertimevariable",
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

      data.append("time", 1.5);

      data.append(
        "step",
        "Sie haben Funktionsuntersuchung unter Nicht Apparative Untersuchen: Rumpf-Wirbelsauele angekreuzt"
      );
      data.append("onlineuser", localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/rigas_api.php?action=countertimevariable",
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
        "Sie haben Halswirbelsäule unter Nicht Apparative Untersuchen: Rumpf-Wirbelsauele angekreuzt"
      );
      data.append("onlineuser", localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/rigas_api.php?action=countertimevariable",
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

      data.append("economy", -3.125);
      data.append("wirbelinspektion", 1);
      data.append("satisfaction", 1);
      data.append("time", 0.2);

      data.append(
        "step",
        "Sie haben Inspektion und Palpation unter Nicht Apparative Untersuchen: Rumpf-Wirbelsauele angekreuzt"
      );
      data.append("onlineuser", localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/rigas_api.php?action=countervariable",
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

      data.append("economy", -3.125);
      data.append("wirbelfunktion", 1);
      data.append("satisfaction", 1);
      data.append("time", 1.5);

      data.append(
        "step",
        "Sie haben Funktionsuntersuchung unter Nicht Apparative Untersuchen: Rumpf-Wirbelsauele angekreuzt"
      );
      data.append("onlineuser", localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/rigas_api.php?action=countervariable",
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

      data.append("economy", -3.125);
      data.append("wirbelhals", 1);
      data.append("satisfaction", 1);
      data.append("time", 0.2);

      data.append(
        "step",
        "Sie haben Halswirbelsäule unter Nicht Apparative Untersuchen: Rumpf-Wirbelsauele angekreuzt"
      );
      data.append("onlineuser", localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/rigas_api.php?action=countervariable",
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
      naseanswer.style.display = "none";
      halsquestion.style.opacity = "1";
      halsanswer.style.display = "none";
    },
    displayNase() {
      naseanswer.style.display = "block";
      nasequestion.style.opacity = "0.5";
      inspektionanswer.style.display = "none";
      inspektionquestion.style.opacity = "1";
      halsquestion.style.opacity = "1";
      halsanswer.style.display = "none";
    },
    displayHals() {
      halsanswer.style.display = "block";
      halsquestion.style.opacity = "0.5";
      inspektionanswer.style.display = "none";
      inspektionquestion.style.opacity = "1";
      nasequestion.style.opacity = "1";
      naseanswer.style.display = "none";
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

  components: { Popup, Notepad },
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
