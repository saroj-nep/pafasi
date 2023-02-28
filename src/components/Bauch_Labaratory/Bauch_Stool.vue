<template>
  <div style="height: 80vh; overflow: auto">
    <div class="grid grid-cols-1 gap-2">
      <div class="sticky top-0 bg-emerald-600">
        <h1 style="font-size: 1.5em" class="h1 text-white text-center">
          <b>Stuhlprobe </b>
        </h1>
        <br />
        <h1 style="font-size: 1.2em" class="h1 text-white text-left">
          Wählen Sie aus der Liste aus, was Sie durchführen lassen möchten
          (Mehrauswahl möglich). Klicken Sie danach auf "Abschicken". ​
        </h1>
      </div>
      <br />

      <div class="grid grid-cols-1 gap-2">
        <ul
          class="w-400 text-sm font-medium text-white rounded-lg border border-emerald-200 bg-emerald-600 dark:bg-emerald-600 dark:border-gray-600 dark:text-white"
        >
          <div class="grid grid-cols-4 gap-1">
            <li
              class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
            >
              <div class="flex items-center pl-3">
                <input
                  @click="savevalue()"
                  id="vue-checkbox1"
                  type="checkbox"
                  value=""
                  class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                />
                <label
                  for="vue-checkbox1"
                  class="py-3 ml-2 w-full text-sm font-medium text-white dark:text-white"
                  >Stuhlprobe</label
                >
              </div>
            </li>
            <li
              class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
            >
              <div class="flex items-center pl-3">
                <input
                  @click="savevalue()"
                  id="vue-checkbox2"
                  type="checkbox"
                  value=""
                  class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                />
                <label
                  for="react-checkbox2"
                  class="py-3 ml-2 w-full text-sm font-medium text-white dark:text-white"
                  >Stuhlkultur</label
                >
              </div>
            </li>
            <li
              class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
            >
              <div class="flex items-center pl-3">
                <input
                  @click="savevalue()"
                  id="vue-checkbox3"
                  type="checkbox"
                  value=""
                  class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                />
                <label
                  for="vue-checkbox3"
                  class="py-3 ml-2 w-full text-sm font-medium text-white dark:text-white"
                  >Untersuchung auf Parasiten</label
                >
              </div>
            </li>
          </div>
        </ul>
        <div v-for="click in clickz">
          <div
            v-if="click.user == email"
            class="flex flex-row justify-center items-center"
          >
            <button
              v-if="click.stool == 1"
              class="submitbutton btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
              @click.prevent="
                stooltimecounter();
                sendValue();
                TogglePopup('sendTrigger');
              "
            >
              Abschicken
            </button>
            <button
              v-else
              class="submitbutton btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
              @click.prevent="
                sendValue();
                stoolcounter();
                TogglePopup('sendTrigger');
              "
            >
              Abschicken
            </button>
          </div>
        </div>
        <Popup
          v-if="popupTriggers.sendTrigger"
          :TogglePopup="() => TogglePopup('sendTrigger')"
        >
          <div
            class="tooltip"
            style="float: right; cursor: pointer; margin-right: 1%"
          >
            <img
              v-if="showNotepad"
              src="../../assets/Collapse.png"
              alt=""
              @mouseover="showTooltip = true"
              @mouseleave="showTooltip = false"
              @click="showNotepad = false"
              class="w-10 h-10"
            />
            <img
              src="../../assets/Expand.png"
              alt=""
              @click="showNotepad = true"
              class="w-10 h-10"
              v-else
            />
            <div v-if="showNotepad" class="tooltiptext">
              Notizblock ausblenden
            </div>
            <div v-else class="tooltiptext">Notizblock anzeigen</div>
          </div>
          <div class="grid grid-cols-3 gap-4" style="margin-top: 20px">
            <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`">
              <Sendstool />
            </div>
            <div class="col-span-1">
              <div v-if="showNotepad">
                <Notepad />
              </div>
            </div>
          </div>
        </Popup>
      </div>
    </div>
  </div>
</template>

<script>
import Popup from "@/components/Popup2.vue";
import { ref } from "vue";
import Notepad from "@/components/Bauch_Notepad.vue";
import Sendblood from "./Bauch_Sendblood.vue";
import Sendstool from "./Bauch_Sendstool.vue";
import axios from "axios";

export default {
  name: "Stools",
  data() {
    return {
      counters: {
        safety: null,
        satisfaction: null,
        time: null,
        economy: null,
      },

      showTooltip: false,
      showNotepad: false,
      stools: [],
      clickz: [],
      email: localStorage.email,
    };
  },
  created() {
    this.showvalue();
    this.clicks();
  },
  methods: {
    sendthesteps() {
      var data = new FormData();
      data.append("step", "Der Benutzer hat Stuhltests angeordnet.");
      data.append("onlineuser", localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/bauch_api.php?action=sendthesteps",
          data
        )
        .then((res) => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
          }
        })
        .catch((err) => {
          console.log("Error", err);
        });
    },
    clicks() {
      axios
        .get("./Api/bauch_api.php?action=getclicks")

        .then((response) => {
          this.clickz = response.data;
        });
    },

    savevalue() {
      localStorage.setItem(
        "probe",
        document.getElementById("vue-checkbox1").checked
      );
      localStorage.setItem(
        "culture",
        document.getElementById("vue-checkbox2").checked
      );
      localStorage.setItem(
        "suchen",
        document.getElementById("vue-checkbox3").checked
      );
    },

    showvalue() {
      console.log(localStorage.probe);
      setTimeout(function () {
        if (localStorage.probe == "true") {
          document.getElementById("vue-checkbox1").checked = true;
        } else {
          document.getElementById("vue-checkbox1").checked = false;
        }
        if (localStorage.culture == "true") {
          document.getElementById("vue-checkbox2").checked = true;
        } else {
          document.getElementById("vue-checkbox2").checked = false;
        }
        if (localStorage.suchen == "true") {
          document.getElementById("vue-checkbox3").checked = true;
        } else {
          document.getElementById("vue-checkbox3").checked = false;
        }
      }, 500);
    },
    sendValue() {
      var data = new FormData();
      const a = document.querySelector("#vue-checkbox1");
      const b = document.querySelector("#vue-checkbox2");
      const c = document.querySelector("#vue-checkbox3");

      localStorage.setItem(
        "probe",
        document.getElementById("vue-checkbox1").checked
      );
      localStorage.setItem(
        "culture",
        document.getElementById("vue-checkbox2").checked
      );
      localStorage.setItem(
        "suchen",
        document.getElementById("vue-checkbox3").checked
      );

      data.append("stoolprobe", a.checked);
      data.append("stoolculture", b.checked);
      data.append("untersuchen", c.checked);
      data.append("onlineuser", localStorage.email);

      axios
        .post(
          // "./Api/api.php?action=login",
          "./Api/bauch_api.php?action=sendstool",
          data
        )
        .then((res) => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
            this.sendthesteps();
          }
        })
        .catch((err) => {
          console.log("Error", err);
        });
    },

    stooltimecounter() {
      var data = new FormData();
      const a = document.querySelector("#vue-checkbox1");
      const b = document.querySelector("#vue-checkbox2");
      const c = document.querySelector("#vue-checkbox3");

      if (c.checked == 1) {
        data.append("time", 2880);
        data.append(
          "step",
          "Sie haben einen Untersuchung auf Parasiten fur Stuhlprobe beantragt"
        );
        data.append("onlineuser", localStorage.email);

        axios
          .post(
            // "./Api/api.php?action=countervariable",
            "./Api/bauch_api.php?action=countertimevariable",
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
      } else if (b.checked == 1) {
        data.append("time", 2880);
        data.append("step", "Sie haben einen Stuhlkultur  beantragt");
        data.append("onlineuser", localStorage.email);
        axios
          .post(
            // "./Api/api.php?action=countervariable",
            "./Api/bauch_api.php?action=countertimevariable",
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
      } else if (a.checked == 1) {
        data.append("time", 1440);
        data.append("step", "Sie haben einen  Stuhlprobe beantragt");
        data.append("onlineuser", localStorage.email);
        axios
          .post(
            // "./Api/api.php?action=countervariable",
            "./Api/bauch_api.php?action=countertimevariable",
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
      }
    },
    stoolcounter() {
      var data = new FormData();
      const a = document.querySelector("#vue-checkbox1");
      const b = document.querySelector("#vue-checkbox2");
      const c = document.querySelector("#vue-checkbox3");

      if (c.checked == 1) {
        data.append("economy", -5.55);
        data.append("stool", 1);
        data.append("satisfaction", 0);
        data.append("time", 2880);
        data.append(
          "step",
          "Sie haben einen Untersuchung auf Parasiten fur Stuhlprobe beantragt"
        );
        data.append("onlineuser", localStorage.email);

        axios
          .post(
            // "./Api/api.php?action=countervariable",
            "./Api/bauch_api.php?action=countervariable",
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
      } else if (b.checked == 1) {
        data.append("economy", -5.55);
        data.append("stool", 1);
        data.append("satisfaction", 0);
        data.append("time", 2880);
        data.append("step", "Sie haben einen Stuhlkultur  beantragt");
        data.append("onlineuser", localStorage.email);
        axios
          .post(
            // "./Api/api.php?action=countervariable",
            "./Api/bauch_api.php?action=countervariable",
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
      } else if (a.checked == 1) {
        data.append("economy", -5.55);
        data.append("stool", 1);
        data.append("satisfaction", 0);
        data.append("time", 1440);
        data.append("step", "Sie haben einen  Stuhlprobe beantragt");
        data.append("onlineuser", localStorage.email);
        axios
          .post(
            // "./Api/api.php?action=countervariable",
            "./Api/bauch_api.php?action=countervariable",
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
      }
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

  components: { Notepad, Popup, Sendblood, Sendstool },
};
</script>

<style scoped>
<style scoped > h3 {
  background: rgb(5, 150, 105);
  padding: 20px;
  border-radius: 10px;
  margin: 10px auto;
  max-width: 20 px;
  /* width: 50%; */
  cursor: pointer;
  color: rgb(255, 255, 255);
}
.submitbutton {
  background: #be123c;
  color: white;
  padding: 1%;
  border-radius: 20px;
  margin-right: 5%;
  margin-left: 10%;
  margin-top: 1%;
  width: 15%;
  /* width: 20%; */
  cursor: pointer;
  /* color: #444   */
}

.tooltip {
  position: relative;
  display: inline-block;
  /* border-bottom: 1px dotted black; */
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 500%;
  background-color: rgb(97, 96, 96);
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 100;
  right: 0;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}
</style>
