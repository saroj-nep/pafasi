<template>
  <div class="" >
     <div class="sticky top-0 bg-emerald-600">

    <h1 class="h1 text-white " style=";"> <strong>Wählen Sie aus, was Sie für 'ausführlichere Anamnese führen' sehen möchten  </strong> </h1>
    </div>
    <br>
    <form action="" class="form" method="POST">
    <div class="grid grid-cols-2  gap-2">
    <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
           @click.prevent="beschreibencounter(),TogglePopup('beschreibenTrigger')">
         Beschreiben Sie Ihre Symptome genauer! (Charakter, Auslösung, Zeit, ...)
         </button>

          <Popup v-if="popupTriggers.beschreibenTrigger" :TogglePopup="() => TogglePopup('beschreibenTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Beschreiben />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>
          <form action="" class="form" method="POST">
          <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click.prevent="akutescounter(),TogglePopup('akutesTrigger')">
            akutes Ereignis?/Aenderung der Lebensumstaende?
          </button>
            </form>

          <Popup v-if="popupTriggers.akutesTrigger" :TogglePopup="() => TogglePopup('akutesTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Akutes />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>

          
          <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
           @click.prevent="medikamencounter(),TogglePopup('medikTrigger')">
          Medikamentenanamnese
          </button>

          <Popup v-if="popupTriggers.medikTrigger" :TogglePopup="() => TogglePopup('medikTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Medikamen />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>

          
          <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click.prevent="gewohncounter(),TogglePopup('gewohnTrigger')">
          Gewohnheiten, Lebensstil (sport, Ernaehrung,...))
         </button>

          <Popup v-if="popupTriggers.gewohnTrigger" :TogglePopup="() => TogglePopup('gewohnTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Gewohn />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>
        
         <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click.prevent="nikotincounter(),TogglePopup('nikotinTrigger')">
           Nikotin, Alkohol, Drogen?
         </button>

          <Popup v-if="popupTriggers.nikotinTrigger" :TogglePopup="() => TogglePopup('nikotinTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Nikotin />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>

         <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click.prevent="allergincounter(),TogglePopup('allergienTrigger')">
          Allergien
         </button>

          <Popup v-if="popupTriggers.allergienTrigger" :TogglePopup="() => TogglePopup('allergienTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Allergin />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>

          
         <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click.prevent="vegetativecounter(),TogglePopup('vegetativeTrigger')">
          vegetative Anamnese (Appetit, Schlaf, Verdauung etc))
         </button>

          <Popup v-if="popupTriggers.vegetativeTrigger" :TogglePopup="() => TogglePopup('vegetativeTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Vegetative />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>

          
         <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
           @click.prevent="gynocounter(),TogglePopup('gynoTrigger')">
          Gynokologische/Urologische/Sexualanamnese
         </button>

          <Popup v-if="popupTriggers.gynoTrigger" :TogglePopup="() => TogglePopup('gynoTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Gyno />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>

          
        <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click.prevent="psychecounter(),TogglePopup('psycheTrigger')">
          Psyche
         </button>

          <Popup v-if="popupTriggers.psycheTrigger" :TogglePopup="() => TogglePopup('psycheTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Psyche />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>

          
         <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click.prevent="familiencounter(),TogglePopup('familienTrigger')">
          Familien- und Sozialanamnese (Beruf, Wohnsituation)
         </button>

          <Popup v-if="popupTriggers.familienTrigger" :TogglePopup="() => TogglePopup('familienTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Familien />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>
          </div>
          </form>
  </div>
</template>

<script>
import Popup from '@/components/Popup.vue';
import { ref } from 'vue';
import Notepad from '@/components/Notepad.vue';
import Anamnese from '@/components/Anamnese.vue';
import Patientenakte from '@/components/Patientenakte.vue';
import Untersuchen from '@/components/Untersuchen.vue';
import Labaratory from '@/components/Labaratory.vue';
import Facharzt from '@/components/Facharzt.vue';
import Submit from '@/components/Submit.vue';
import Beschreiben from './Anamnese/Beschreiben.vue';
import Akutes from './Anamnese/Akutes.vue';
import Medikamen from './Anamnese/Medikamen.vue';
import Nikotin from './Anamnese/Nikotin.vue';
import Allergin from './Anamnese/Allergin.vue';
import Gyno from './Anamnese/Gyno.vue';
import Psyche from './Anamnese/Psyche.vue';
import Gewohn from './Anamnese/Gewohn.vue';
import Vegetative from './Anamnese/vegetative.vue';
import Familien from './Anamnese/Familien.vue';
import axios from "axios";


export default {
 name:"Anamneses",
  data() {
    return {counters: {
        safety: null,
        satisfaction: null,
        time: null,
        economy: null
      },
      
      showTooltip: false,
      showNotepad: true
    };
  },

 methods: {
 akutescounter() {
      var data = new FormData();
  
      data.append("economy",1);
      data.append("satisfaction",1);
      data.append("time",0.3);
      data.append("safety",0);
      data.append("step","Sie haben akutes Ergebnis unter ausführlichere Anamnese angekreuzt");
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/api.php?action=countervariable",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
    },
allergincounter() {
      var data = new FormData();
  
      data.append("economy",-0.5);
      data.append("satisfaction",0);
      data.append("time",0.3);
      data.append("safety",0);
      data.append("step","Sie haben akutes Allergin unter ausführlichere Anamnese angekreuzt");
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/api.php?action=countervariable",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
    },
beschreibencounter() {
      var data = new FormData();
  
      data.append("economy",1);
      data.append("satisfaction",1);
      data.append("time",2);
      data.append("safety",0);
      data.append("step","Sie haben Beschreiben Sie Ihre Symptome genauer! unter ausführlichere Anamnese angekreuzt");
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/api.php?action=countervariable",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
    },
familiencounter() {
      var data = new FormData();
  
      data.append("economy",-0.5);
      data.append("satisfaction",0);
      data.append("time",1);
      data.append("safety",0);
      data.append("step","Sie haben Familien- und Sozialanamnese  unter ausführlichere Anamnese angekreuzt");
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/api.php?action=countervariable",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
    },
gewohncounter() {
      var data = new FormData();
  
      data.append("economy",1);
      data.append("satisfaction",1);
      data.append("time",1);
      data.append("safety",0);
      data.append("step","Sie haben Gewohnheiten, Lebensstil  unter ausführlichere Anamnese angekreuzt");
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/api.php?action=countervariable",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
    },
gynocounter() {
      var data = new FormData();
  
      data.append("economy",-0.5);
      data.append("satisfaction",0);
      data.append("time",2);
      data.append("safety",0);
      data.append("step","Sie haben Gynokologische/Urologische/Sexualanamnese unter ausführlichere Anamnese angekreuzt")
       data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/api.php?action=countervariable",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
    },
medikamencounter() {
      var data = new FormData();
  
      data.append("economy",-0.5);
      data.append("satisfaction",1);
      data.append("time",0.5);
      data.append("safety",0);
      data.append("step","Sie haben Medikamentenanamnese unter ausführlichere Anamnese angekreuzt");
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/api.php?action=countervariable",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
    },
nikotincounter() {
      var data = new FormData();
  
      data.append("economy",-0.5);
      data.append("satisfaction",0);
      data.append("time",1);
      data.append("safety",0);
      data.append("step","Sie haben Nikotin, Alkohol, Drogen? unter ausführlichere Anamnese angekreuzt");
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/api.php?action=countervariable",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
    },
psychecounter() {
      var data = new FormData();
  
      data.append("economy",-0.5);
      data.append("satisfaction",0);
      data.append("time",1);
      data.append("safety",0);
      data.append("step","Sie haben Psyche unter ausführlichere Anamnese angekreuzt");
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/api.php?action=countervariable",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
    },
vegetativecounter() {
      var data = new FormData();
  
      data.append("economy",1);
      data.append("satisfaction",1);
      data.append("time",2);
      data.append("safety",0);
      data.append("step","Sie haben vegetative Anamnese  unter ausführlichere Anamnese angekreuzt");
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/api.php?action=countervariable",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
    },
  },



  setup() {
    const popupTriggers = ref({
      buttonTrigger: false
    })
    const TogglePopup = (trigger) => {
      console.log(trigger, 'trigger')
      popupTriggers.value[trigger] = !popupTriggers.value[trigger]
    }
    return {
      Popup,
      popupTriggers,
      TogglePopup
    }
  },
  
  components: { Popup, Notepad, Anamnese, Patientenakte, Untersuchen, Labaratory, Facharzt, Submit, Beschreiben, Akutes, Medikamen, Nikotin, Allergin, Gyno, Psyche, Gewohn, Vegetative, Familien }
}
</script>

<style scoped>

.button {
  background: black;
  color: white;
  padding: 20px;
  border-radius: 10px;
  margin: 5px auto;
  width:400px;
  min-height: 0px;
  /* width: 20%; */
  cursor: pointer;
  /* color: #444   */
}
.submitbutton{
  background: #be123c;
  color: white;
  padding: 20px;
  border-radius: 10px;
  margin: 5px auto;
  width:400px;
  /* width: 20%; */
  cursor: pointer;
  /* color: #444   */
}
.h1{
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
