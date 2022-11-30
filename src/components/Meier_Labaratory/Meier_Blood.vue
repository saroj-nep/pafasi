<template>
  <div style="height: 80vh; overflow: auto">
    <div class="grid grid-cols-1 gap-2">
      <div class="sticky top-0 bg-emerald-600">
        <h1 style="font-size: 1.5em" class="h1 text-white text-center">
          <b>Blutentnahme </b>
        </h1>
        <br />
        <h1 style="font-size: 1.2em" class="h1 text-white text-left">
          Wählen Sie aus der Liste aus, was Sie durchführen lassen möchten
          (Mehrauswahl möglich). Klicken Sie danach auf "Abschicken".
        </h1>
      </div>
      <br />

      <div class="grid grid-cols-1 gap-2">
        <div>
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
                    value="1"
                    class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for="vue-checkbox"
                    class="py-3 ml-2 w-full text-sm font-medium text-white dark:text-white"
                    >Kleines Blutbild</label
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
                    value="1"
                    class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for="react-checkbox"
                    class="py-3 ml-2 w-full text-sm font-medium text-white dark:text-white"
                    >Großes Blutbild</label
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
                    value="1"
                    class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for="vue-checkbox"
                    class="py-3 ml-2 w-full text-sm font-medium text-white dark:text-white"
                    >Gerinnung</label
                  >
                </div>
              </li>
              <li
                class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
              >
                <div class="flex items-center pl-3">
                  <input
                    @click="savevalue()"
                    id="vue-checkbox4"
                    type="checkbox"
                    value="1"
                    class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for="react-checkbox"
                    class="py-3 ml-2 w-full text-sm font-medium text-white dark:text-white"
                    >Entzündungsparameter</label
                  >
                </div>
              </li>
              <li
                class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
              >
                <div class="flex items-center pl-3">
                  <input
                    @click="savevalue()"
                    id="vue-checkbox5"
                    type="checkbox"
                    value="1"
                    class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for="react-checkbox"
                    class="py-3 ml-2 w-full text-sm font-medium text-white dark:text-white"
                    >Glucosestoffwechsel</label
                  >
                </div>
              </li>
              <li
                class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
              >
                <div class="flex items-center pl-3">
                  <input
                    @click="savevalue()"
                    id="vue-checkbox6"
                    type="checkbox"
                    value="1"
                    class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for="vue-checkbox"
                    class="py-3 ml-2 w-full text-sm font-medium text-white dark:text-white"
                    >Fettstoffwechsel</label
                  >
                </div>
              </li>
              <li
                class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
              >
                <div class="flex items-center pl-3">
                  <input
                    @click="savevalue()"
                    id="vue-checkbox7"
                    type="checkbox"
                    value="1"
                    class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for="react-checkbox"
                    class="py-3 ml-2 w-full text-sm font-medium text-white dark:text-white"
                    >Eisenstoffwechsel</label
                  >
                </div>
              </li>
              <li
                class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
              >
                <div class="flex items-center pl-3">
                  <input
                    @click="savevalue()"
                    id="vue-checkbox8"
                    type="checkbox"
                    value="1"
                    class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for="react-checkbox"
                    class="py-3 ml-2 w-full text-sm font-medium text-white dark:text-white"
                    >Leber/Galle</label
                  >
                </div>
              </li>
              <li
                class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
              >
                <div class="flex items-center pl-3">
                  <input
                    @click="savevalue()"
                    id="vue-checkbox9"
                    type="checkbox"
                    value="1"
                    class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for="vue-checkbox"
                    class="py-3 ml-2 w-full text-sm font-medium text-white dark:text-white"
                    >Pankreas</label
                  >
                </div>
              </li>
              <li
                class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
              >
                <div class="flex items-center pl-3">
                  <input
                    @click="savevalue()"
                    id="vue-checkbox10"
                    type="checkbox"
                    value="1"
                    class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for="react-checkbox"
                    class="py-3 ml-2 w-full text-sm font-medium text-white dark:text-white"
                    >Niere</label
                  >
                </div>
              </li>
              <li
                class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
              >
                <div class="flex items-center pl-3">
                  <input
                    @click="savevalue()"
                    id="vue-checkbox11"
                    type="checkbox"
                    value="1"
                    class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for="vue-checkbox"
                    class="py-3 ml-2 w-full text-sm font-medium text-white dark:text-white"
                    >Elektrolyte</label
                  >
                </div>
              </li>
              <li
                class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
              >
                <div class="flex items-center pl-3">
                  <input
                    @click="savevalue()"
                    id="vue-checkbox12"
                    type="checkbox"
                    value="1"
                    class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for="react-checkbox"
                    class="py-3 ml-2 w-full text-sm font-medium text-white dark:text-white"
                    >Schilddrüse/Nebenschilddrüse</label
                  >
                </div>
              </li>
              <li
                class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
              >
                <div class="flex items-center pl-3">
                  <input
                    @click="savevalue()"
                    id="vue-checkbox13"
                    type="checkbox"
                    value="1"
                    class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for="vue-checkbox"
                    class="py-3 ml-2 w-full text-sm font-medium text-white dark:text-white"
                    >Herz</label
                  >
                </div>
              </li>
              <li
                class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
              >
                <div class="flex items-center pl-3">
                  <input
                    @click="savevalue()"
                    id="vue-checkbox14"
                    type="checkbox"
                    value="1"
                    class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for="react-checkbox"
                    class="py-3 ml-2 w-full text-sm font-medium text-white dark:text-white"
                    >B-Vitamine & Folsäure</label
                  >
                </div>
              </li>
              <li
                class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
              >
                <div class="flex items-center pl-3">
                  <input
                    @click="savevalue()"
                    id="vue-checkbox15"
                    type="checkbox"
                    value="1"
                    class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for="react-checkbox"
                    class="py-3 ml-2 w-full text-sm font-medium text-white dark:text-white"
                    >LDH</label
                  >
                </div>
              </li>
              <li
                class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
              >
                <div class="flex items-center pl-3">
                  <input
                    @click="savevalue()"
                    id="vue-checkbox16"
                    type="checkbox"
                    value="1"
                    class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for="vue-checkbox"
                    class="py-3 ml-2 w-full text-sm font-medium text-white dark:text-white"
                    >Harnsäure</label
                  >
                </div>
              </li>
              <li
                class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
              >
                <div class="flex items-center pl-3">
                  <input
                    @click="savevalue()"
                    id="vue-checkbox17"
                    type="checkbox"
                    value="1"
                    class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for="react-checkbox"
                    class="py-3 ml-2 w-full text-sm font-medium text-white dark:text-white"
                    >PSA</label
                  >
                </div>
              </li>
              <li
                class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
              >
                <div class="flex items-center pl-3">
                  <input
                    @click="savevalue()"
                    id="vue-checkbox18"
                    type="checkbox"
                    value="1"
                    class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for="react-checkbox"
                    class="py-3 ml-2 w-full text-sm font-medium text-white dark:text-white"
                    >Beta-HCG</label
                  >
                </div>
              </li>
              <li
                class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
              >
                <div class="flex items-center pl-3">
                  <input
                    @click="savevalue()"
                    id="vue-checkbox19"
                    type="checkbox"
                    value="1"
                    class="w-8 h-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for="vue-checkbox"
                    class="py-3 ml-2 w-full text-sm font-medium text-white dark:text-white"
                    >Serumelektrophorese</label
                  >
                </div>
              </li>
            </div>
          </ul>
        </div>
        <div v-for="click in clickz">
          <div
            v-if="click.user == email"
            class="flex flex-row justify-center items-center"
          >
            <button
              v-if="click.blood == 1"
              class="submitbutton btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
              @click.prevent="
                bloodtimecounter();
                sendvalue();
                TogglePopup('sendTrigger');
              "
            >
              Abschicken
            </button>
            <button
              v-else
              class="submitbutton btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
              @click.prevent="
                bloodcounter();
                sendvalue();
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
            <div
              v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
              x
            >
              <Sendblood />
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
import Notepad from "@/components/Meier_Notepad.vue";
import Sendblood from "./Meier_Sendblood.vue";
import axios from "axios";

export default {
  name: "Bloods",
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
      bloods: [],
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
      data.append("step", "Der Benutzer hat eine Blutuntersuchung angeordnet.");
      data.append("onlineuser", localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/meier_api.php?action=sendthesteps",
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
        .get("./Api/meier_api.php?action=getclicks")

        .then((response) => {
          this.clickz = response.data;
        });
    },

    savevalue() {
      localStorage.setItem(
        "kleines",
        document.getElementById("vue-checkbox1").checked
      );
      localStorage.setItem(
        "grosses",
        document.getElementById("vue-checkbox2").checked
      );
      localStorage.setItem(
        "gerin",
        document.getElementById("vue-checkbox3").checked
      );
      localStorage.setItem(
        "entz",
        document.getElementById("vue-checkbox4").checked
      );
      localStorage.setItem(
        "glucose",
        document.getElementById("vue-checkbox5").checked
      );
      localStorage.setItem(
        "fetts",
        document.getElementById("vue-checkbox6").checked
      );
      localStorage.setItem(
        "eisen",
        document.getElementById("vue-checkbox7").checked
      );
      localStorage.setItem(
        "leber",
        document.getElementById("vue-checkbox8").checked
      );
      localStorage.setItem(
        "pankreas",
        document.getElementById("vue-checkbox9").checked
      );
      localStorage.setItem(
        "niere",
        document.getElementById("vue-checkbox10").checked
      );
      localStorage.setItem(
        "elektrolyte",
        document.getElementById("vue-checkbox11").checked
      );
      localStorage.setItem(
        "schild",
        document.getElementById("vue-checkbox12").checked
      );
      localStorage.setItem(
        "herz",
        document.getElementById("vue-checkbox13").checked
      );
      localStorage.setItem(
        "bvitamin",
        document.getElementById("vue-checkbox14").checked
      );
      localStorage.setItem(
        "ldh",
        document.getElementById("vue-checkbox15").checked
      );
      localStorage.setItem(
        "harn",
        document.getElementById("vue-checkbox16").checked
      );
      localStorage.setItem(
        "psa",
        document.getElementById("vue-checkbox17").checked
      );
      localStorage.setItem(
        "hcg",
        document.getElementById("vue-checkbox18").checked
      );
      localStorage.setItem(
        "serum",
        document.getElementById("vue-checkbox19").checked
      );
    },

    showvalue() {
      setTimeout(function () {
        if (localStorage.kleines == "true") {
          document.getElementById("vue-checkbox1").checked = true;
        } else {
          document.getElementById("vue-checkbox1").checked = false;
        }
        if (localStorage.grosses == "true") {
          document.getElementById("vue-checkbox2").checked = true;
        } else {
          document.getElementById("vue-checkbox2").checked = false;
        }
        if (localStorage.gerin == "true") {
          document.getElementById("vue-checkbox3").checked = true;
        } else {
          document.getElementById("vue-checkbox3").checked = false;
        }
        if (localStorage.entz == "true") {
          document.getElementById("vue-checkbox4").checked = true;
        } else {
          document.getElementById("vue-checkbox4").checked = false;
        }
        if (localStorage.glucose == "true") {
          document.getElementById("vue-checkbox5").checked = true;
        } else {
          document.getElementById("vue-checkbox5").checked = false;
        }
        if (localStorage.fetts == "true") {
          document.getElementById("vue-checkbox6").checked = true;
        } else {
          document.getElementById("vue-checkbox6").checked = false;
        }
        if (localStorage.eisen == "true") {
          document.getElementById("vue-checkbox7").checked = true;
        } else {
          document.getElementById("vue-checkbox7").checked = false;
        }
        if (localStorage.leber == "true") {
          document.getElementById("vue-checkbox8").checked = true;
        } else {
          document.getElementById("vue-checkbox8").checked = false;
        }
        if (localStorage.pankreas == "true") {
          document.getElementById("vue-checkbox9").checked = true;
        } else {
          document.getElementById("vue-checkbox9").checked = false;
        }
        if (localStorage.niere == "true") {
          document.getElementById("vue-checkbox10").checked = true;
        } else {
          document.getElementById("vue-checkbox10").checked = false;
        }
        if (localStorage.elektrolyte == "true") {
          document.getElementById("vue-checkbox11").checked = true;
        } else {
          document.getElementById("vue-checkbox11").checked = false;
        }
        if (localStorage.schild == "true") {
          document.getElementById("vue-checkbox12").checked = true;
        } else {
          document.getElementById("vue-checkbox12").checked = false;
        }
        if (localStorage.herz == "true") {
          document.getElementById("vue-checkbox13").checked = true;
        } else {
          document.getElementById("vue-checkbox13").checked = false;
        }
        if (localStorage.bvitamin == "true") {
          document.getElementById("vue-checkbox14").checked = true;
        } else {
          document.getElementById("vue-checkbox14").checked = false;
        }
        if (localStorage.ldh == "true") {
          document.getElementById("vue-checkbox15").checked = true;
        } else {
          document.getElementById("vue-checkbox15").checked = false;
        }
        if (localStorage.harn == "true") {
          document.getElementById("vue-checkbox16").checked = true;
        } else {
          document.getElementById("vue-checkbox16").checked = false;
        }
        if (localStorage.psa == "true") {
          document.getElementById("vue-checkbox17").checked = true;
        } else {
          document.getElementById("vue-checkbox17").checked = false;
        }
        if (localStorage.hcg == "true") {
          document.getElementById("vue-checkbox18").checked = true;
        } else {
          document.getElementById("vue-checkbox18").checked = false;
        }
        if (localStorage.serum == "true") {
          document.getElementById("vue-checkbox19").checked = true;
        } else {
          document.getElementById("vue-checkbox19").checked = false;
        }
      }, 500);
    },

    sendvalue() {
      var data = new FormData();
      const a = document.querySelector("#vue-checkbox1");
      const b = document.querySelector("#vue-checkbox2");
      const c = document.querySelector("#vue-checkbox3");
      const d = document.querySelector("#vue-checkbox4");
      const e = document.querySelector("#vue-checkbox5");
      const f = document.querySelector("#vue-checkbox6");
      const g = document.querySelector("#vue-checkbox7");
      const h = document.querySelector("#vue-checkbox8");
      const i = document.querySelector("#vue-checkbox9");
      const j = document.querySelector("#vue-checkbox10");
      const k = document.querySelector("#vue-checkbox11");
      const l = document.querySelector("#vue-checkbox12");
      const m = document.querySelector("#vue-checkbox13");
      const n = document.querySelector("#vue-checkbox14");
      const o = document.querySelector("#vue-checkbox15");
      const p = document.querySelector("#vue-checkbox16");
      const q = document.querySelector("#vue-checkbox17");
      const r = document.querySelector("#vue-checkbox18");
      const s = document.querySelector("#vue-checkbox19");

      localStorage.setItem(
        "kleines",
        document.getElementById("vue-checkbox1").checked
      );
      localStorage.setItem(
        "grosses",
        document.getElementById("vue-checkbox2").checked
      );
      localStorage.setItem(
        "gerin",
        document.getElementById("vue-checkbox3").checked
      );
      localStorage.setItem(
        "entz",
        document.getElementById("vue-checkbox4").checked
      );
      localStorage.setItem(
        "glucose",
        document.getElementById("vue-checkbox5").checked
      );
      localStorage.setItem(
        "fetts",
        document.getElementById("vue-checkbox6").checked
      );
      localStorage.setItem(
        "eisen",
        document.getElementById("vue-checkbox7").checked
      );
      localStorage.setItem(
        "leber",
        document.getElementById("vue-checkbox8").checked
      );
      localStorage.setItem(
        "pankreas",
        document.getElementById("vue-checkbox9").checked
      );
      localStorage.setItem(
        "niere",
        document.getElementById("vue-checkbox10").checked
      );
      localStorage.setItem(
        "elektrolyte",
        document.getElementById("vue-checkbox11").checked
      );
      localStorage.setItem(
        "schild",
        document.getElementById("vue-checkbox12").checked
      );
      localStorage.setItem(
        "herz",
        document.getElementById("vue-checkbox13").checked
      );
      localStorage.setItem(
        "bvitamin",
        document.getElementById("vue-checkbox14").checked
      );
      localStorage.setItem(
        "ldh",
        document.getElementById("vue-checkbox15").checked
      );
      localStorage.setItem(
        "harn",
        document.getElementById("vue-checkbox16").checked
      );
      localStorage.setItem(
        "psa",
        document.getElementById("vue-checkbox17").checked
      );
      localStorage.setItem(
        "hcg",
        document.getElementById("vue-checkbox18").checked
      );
      localStorage.setItem(
        "serum",
        document.getElementById("vue-checkbox19").checked
      );

      data.append("bloodkleines", a.checked);
      data.append("bloodgrosses", b.checked);
      data.append("bloodgerin", c.checked);
      data.append("bloodentz", d.checked);
      data.append("bloodglucose", e.checked);
      data.append("bloodfetts", f.checked);
      data.append("bloodeisen", g.checked);
      data.append("bloodleber", h.checked);
      data.append("bloodpankreas", i.checked);
      data.append("bloodniere", j.checked);
      data.append("bloodelektrolyte", k.checked);
      data.append("bloodschild", l.checked);
      data.append("bloodherz", m.checked);
      data.append("bloodbvitamin", n.checked);
      data.append("bloodldh", o.checked);
      data.append("bloodharn", p.checked);
      data.append("bloodpsa", q.checked);
      data.append("bloodhcg", r.checked);
      data.append("bloodserum", s.checked);
      data.append("onlineuser", localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=login",
          "./Api/meier_api.php?action=sendblood",
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
    removevalue() {
      var data = new FormData();

      data.append("bloodkleines", 0);
      data.append("bloodgrosses", 0);
      data.append("bloodgerin", 0);
      data.append("bloodentz", 0);
      data.append("bloodglucose", 0);
      data.append("bloodfetts", 0);
      data.append("bloodeisen", 0);
      data.append("bloodleber", 0);
      data.append("bloodpankreas", 0);
      data.append("bloodniere", 0);
      data.append("bloodelektrolyte", 0);
      data.append("bloodschild", 0);
      data.append("bloodherz", 0);
      data.append("bloodbvitamin", 0);
      data.append("bloodldh", 0);
      data.append("bloodharn", 0);
      data.append("bloodpsa", 0);
      data.append("bloodhcg", 0);
      data.append("bloodserum", 0);
      data.append("onlineuser", localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=login",
          "./Api/meier_api.php?action=sendblood",
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
    bloodtimecounter() {
      var data = new FormData();

      data.append("time", 1440);
      data.append("step", "Sie haben einen Bluttest beantragt");
      data.append("onlineuser", localStorage.email);

      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/meier_api.php?action=countertimevariable",
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

    bloodcounter() {
      var data = new FormData();

      data.append("economy", -5.55);
      data.append("satisfaction", 0);
      data.append("blood", 1);
      data.append("time", 1440);
      data.append("step", "Sie haben einen Bluttest beantragt");
      data.append("onlineuser", localStorage.email);

      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/meier_api.php?action=countervariable",
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

  components: { Notepad, Popup, Sendblood },
};
</script>

<style scoped>
h3 {
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
