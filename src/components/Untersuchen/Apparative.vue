<template>
  <div class="grid grid-cols-1 gap-2">
     <div class="sticky top-0 bg-emerald-600">

    <h1 class="h1 text-white " style=";"> <strong>Wählen Sie aus, was Sie für 'Apparative Untersuchen' sehen möchten : </strong> </h1>
    </div>
    <br>
    


       <div class="flex justify-center ">
        <button id="inspektionquestion"  class="button"
           @click.prevent="counterInspektion();displayInspektion();">
         Körpertemperatur messen </button>

         
          <button id="nasequestion" class="button"
            @click.prevent="counterNase();displayNase();">
          Blutzucker messen
          </button>
             
          <button id="halsquestion" class="button"
            @click.prevent="counterHals();displayHals();">
          Blutdruck messen
          </button>
         
          </div>
 <div class="flex  justify-center ">
       
           <button  color="#42b983" class="button"
            @click.prevent="counterSono();TogglePopup('untereTrigger')">
          Sonografie durchführen
          </button>
            

          <Popup v-if="popupTriggers.untereTrigger" :TogglePopup="() => TogglePopup('untereTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                >
                <Sonography />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>
           <button class="button"
            @click.prevent="counterEKG();TogglePopup('genitalTrigger')">
           EKG durchführen lassen
          </button>
            

          <Popup v-if="popupTriggers.genitalTrigger" :TogglePopup="() => TogglePopup('genitalTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                >
                <Ekg />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>
          
              <button class="button"
            @click.prevent="counterLung();TogglePopup('genitTrigger')">
           Lungenfunktionstest durchführen lassen
          </button>
            

          <Popup v-if="popupTriggers.genitTrigger" :TogglePopup="() => TogglePopup('genitTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                >
                <Lung />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>
          
         
          </div> 
         <h3 id="inspektionanswer" style="display:none"> 37.2 °C</h3> 
         <h3 id="naseanswer" style="display:none">125 mg/dl</h3> 
        <h3 id="halsanswer" style="display:none">135/80 mmHg</h3>       
  </div>
</template>

<script>
import Popup from '@/components/Popup.vue';
import { ref } from 'vue';
import Notepad from '@/components/Notepad.vue';
import Sonography from '@/components/Untersuchen/Sonography.vue';
import Ekg from '@/components/Untersuchen/Ekg.vue';
import Lung from '@/components/Untersuchen/Lung.vue';
import axios from 'axios';

export default {
 name:"Untersuchens",
  data() {
    return {
      counters: {
        safety: null,
        satisfaction: null,
        time: null,
        economy: null,
        step:''
      },
      showTooltip: false,
      showNotepad: false
    };
  },
methods:{
    counterInspektion() {
      var data = new FormData();
  
      data.append("economy",0);
      data.append("satisfaction",0);
      data.append("time",0.3);
      data.append("safety",100);
      data.append("step","Sie haben Körpertemperatur messen unter Apparative Untersuchen angekreuzt");
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

    counterNase() {
      var data = new FormData();
  
      data.append("economy",0);
      data.append("satisfaction",0);
      data.append("time",1);
       data.append("safety",100);
        data.append("step","Sie haben Blutzucker  messen unter Apparative Untersuchen angekreuzt");
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
   
    counterHals() {
      var data = new FormData();
  
      data.append("economy",0);
      data.append("satisfaction",0);
      data.append("time",1);
      data.append("safety",100);
       data.append("step","Sie haben Blutdruk messen unter Apparative Untersuchen angekreuzt");
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
    counterSono() {
      var data = new FormData();
  
      data.append("economy",0);
      data.append("satisfaction",1);
      data.append("time",1);
     data.append("safety",100);
      data.append("step","Sie haben Sonografie durchführen unter Apparative Untersuchen angekreuzt");
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
    counterEKG() {
      var data = new FormData();
  
      data.append("economy",0);
      data.append("satisfaction",1);
      data.append("time",10);
      data.append("safety",100);
       data.append("step","Sie haben EKG durchführen unter Apparative Untersuchen angekreuzt");
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
    counterLung() {
      var data = new FormData();
  
      data.append("economy",0);
      data.append("satisfaction",0);
      data.append("time",10);
      data.append("safety",100);
      data.append("step","Sie haben Lungenfunktionstest durchführen  unter Apparative Untersuchen angekreuzt");
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


displayInspektion(){  if (inspektionanswer.style.display !== "none") {
        inspektionanswer.style.display = "none";
        inspektionquestion.style.opacity="1";
      } else {
        inspektionanswer.style.display = "block";
        inspektionquestion.style.opacity="0.5";
        nasequestion.style.opacity="1";
        naseanswer.style.display = "none";
        halsquestion.style.opacity="1";
        halsanswer.style.display = "none";
       
      }},
displayNase(){  if (naseanswer.style.display !== "none") {
        naseanswer.style.display = "none";
        nasequestion.style.opacity="1";
      } else {
        naseanswer.style.display = "block";
        nasequestion.style.opacity="0.5";
        inspektionanswer.style.display = "none";
        inspektionquestion.style.opacity="1";
        halsquestion.style.opacity="1";
        halsanswer.style.display = "none";
      }},
displayHals(){  if (halsanswer.style.display !== "none") {
        halsanswer.style.display = "none";
        halsquestion.style.opacity="1";
      } else {
        halsanswer.style.display = "block";
        halsquestion.style.opacity="0.5";
        inspektionanswer.style.display = "none";
        inspektionquestion.style.opacity="1";
        nasequestion.style.opacity="1";
        naseanswer.style.display = "none";
      }},

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
  
  components: { Popup, Notepad,Sonography, Ekg, Lung}
}
</script>

<style scoped>
h3 {
  background:rgb(39, 190, 107);
  padding: 20px;
  border-radius: 10px;
  margin: 10px auto;
;
    /* width: 50%; */
  cursor: pointer;
  color: #444
}

h3:hover {
  background: rgb(39, 190, 107)
}
.button {
  background: black;
  color: white;
  padding: 20px;
  border-radius: 10px;
  margin:10px ;

 
  cursor: pointer;
 
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
