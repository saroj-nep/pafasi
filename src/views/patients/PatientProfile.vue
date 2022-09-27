<template>
 <div style="position: sticky" class="sticky top-0">
<Header />
</div
>
  <div >

    <!-- <div class="grid grid-cols-4 gap-4">
  <div>01</div>
  <div>09</div>
</div> -->


    <!-- <div class="row"> -->
    <div class="grid grid-cols-4 gap-4">
      <!-- <div class="column left"> -->
      <!-- <div class="col-span-1">
        <div class="patient">
          <div>
            <h1><strong> Case {{ patient.id }}: {{ patient.title }}</strong></h1>
          </div>
        </div>
      </div> -->
      
      <div style="" class="col-span-3 ">
        <div class="shadow-xl shadow-slate-600" style="display:flex;  background-color: #dcfce7; padding: 20px; margin-left:10px; padding-left: 40px; border-radius: 10px;">
          <div class="patient " style="width: 25%;">
            <div class="flex content-start  ">
              <img src= "../../assets/Schneider.jpg" class="object-contain h-48 " alt="Patient Image" style="top: 20px;" />   
          </div>
            <div><h1><b> Hr. Wolfgang Schneider</b></h1></div>
              <div>Alter: 78</div>
              <div>Geschlecht: Männlich</div>
           
           
          </div>
          <div class="fallbeschreibung" style="width: 75%">
            <!-- Should be replaced by a widget -->
            <h3 style="font-size:3ex; "><b>Fallbeschreibung</b></h3>
            <br>
            <p style="border-radius: 5px">Herr Wolfgang Schneider, leicht adipöser EZ, AZ gut. Herr Schneider bewegt sich schwerfällig, leicht gebeugt und leicht humpelnd durchs Zimmer, stützt sich stöhnend auf Ihrem Schreibtisch ab, als er sich hinsetzt. Auf die Frage, was ihm fehle: „Es ist das Kreuz! Ich kann mich bald nicht mehr bewegen! Der Herr Dr. Weber, der hatte mir immer diese Kortisonspritzen gegeben. Bitte, können Sie das bei mir wieder machen? Das ist das Einzige was bei mir hilft. Sie wissen ja, mit den alten Knochen da hat man nur Probleme!“.</p>
            <!-- </div> -->
            <!-- <div class="column left"> -->
            <!-- </div> -->
          </div>
        </div>
        <br>
        <div>
          <div class=" text-center bg-emerald-600 mx-5">

    <h1 style="font-size:1.5em; " class="h1 text-white text-center" > <b>Was werden Sie als
              Nächstes tun? </b> </h1>
    </div>
<br>
         
          <button  color="#42b983" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click="() => TogglePopup('anamneseTrigger')">
           <h3 style="font-size:1em; "> ausführlichere Anamnese führen</h3>
          </button>

          <Popup v-if="popupTriggers.anamneseTrigger" :TogglePopup="() => TogglePopup('anamneseTrigger')">
             <div class="tooltip" style="float: right; cursor: pointer ; margin-right: 1%;">
              <img v-if="showNotepad" src="../../assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false"  class="w-10 h-10"/>
              <img src="../../assets/Expand.png"  alt="" @click="showNotepad = true" class="w-10 h-10" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext" >Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="height: 40rem;  ; overflow: auto">
                <Anamnese />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>
  
          <button  color="#42b983" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click="() => TogglePopup('untersuchenTrigger')">
            <h3 style="font-size:1em; ">Untersuchen</h3>
          </button>

          <Popup v-if="popupTriggers.untersuchenTrigger" :TogglePopup="() => TogglePopup('untersuchenTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer ; margin-right: 1%;">
              <img v-if="showNotepad" src="../../assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false"  class="w-10 h-10"/>
              <img src="../../assets/Expand.png" alt="" @click="showNotepad = true" class="w-10 h-10" v-else />
              <div v-if="showNotepad" class="tooltiptext" style= " white-space: pre-wrap;">Notizblock ausblenden</div>
              <div v-else class="tooltiptext" style= " white-space: pre-wrap;">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="height: 40rem;   overflow: auto">
                <Untersuchen />
              </div>
              <div >
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>

         
          <button method="POST"  color="#42b983" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="patientenaktecounter(),TogglePopup('patientenakteTrigger')">
           <h3 style="font-size:1em;">einen Blick in die Patientenakte werfen</h3></button>
        
 
          
          <Popup v-if="popupTriggers.patientenakteTrigger" :TogglePopup="() => TogglePopup('patientenakteTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer ; margin-right: 1%;">
              <img v-if="showNotepad" src="../../assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false"  class="w-10 h-10"/>
              <img src="../../assets/Expand.png" alt="" @click="showNotepad = true" class="w-10 h-10" v-else />
              <div v-if="showNotepad" class="tooltiptext" style= " white-space: pre-wrap;">Notizblock ausblenden</div>
              <div v-else class="tooltiptext" style= " white-space: pre-wrap;">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="height: 40rem;  overflow: auto">
                <Patientenakte />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>

         
          <button color="#42b983" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click="() => TogglePopup('laboranordnungenTrigger')">
            <h3 style="font-size:1em;">Laboranordnungen</h3>
         </button>

          <Popup v-if="popupTriggers.laboranordnungenTrigger" :TogglePopup="() => TogglePopup('laboranordnungenTrigger')">
             <div class="tooltip" style="float: right; cursor: pointer ; margin-right: 1%;">
              <img v-if="showNotepad" src="../../assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false"  class="w-10 h-10"/>
              <img src="../../assets/Expand.png" alt="" @click="showNotepad = true" class="w-10 h-10" v-else />
              <div v-if="showNotepad" class="tooltiptext" style= " white-space: pre-wrap;">Notizblock ausblenden</div>
              <div v-else class="tooltiptext" style= " white-space: pre-wrap;">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="height: 40rem;  overflow: auto">
                <Labaratory />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>
        
         <button color="#42b983" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click="() => TogglePopup('facharztTrigger')">
            <h3 style="font-size:1em;">eine Überweisung zum Facharzt ausstellen</h3>
         </button>

          <Popup v-if="popupTriggers.facharztTrigger" :TogglePopup="() => TogglePopup('facharztTrigger')">
             <div class="tooltip" style="float: right; cursor: pointer ; margin-right: 1%;">
              <img v-if="showNotepad" src="../../assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false"  class="w-10 h-10"/>
              <img src="../../assets/Expand.png" alt="" @click="showNotepad = true" class="w-10 h-10" v-else />
              <div v-if="showNotepad" class="tooltiptext" style= " white-space: pre-wrap;">Notizblock ausblenden</div>
              <div v-else class="tooltiptext" style= " white-space: pre-wrap;">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="height: 40rem;  overflow: auto">
                <Facharzt />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>

         <button color="#42b983" class="submitbutton  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click="() => TogglePopup('beendenTrigger')">
           <h3 style="font-size:1em;">Heutige Vorstellung beenden und (be-)handeln</h3>
         </button>

          <Popup v-if="popupTriggers.beendenTrigger" :TogglePopup="() => TogglePopup('beendenTrigger')">
             <div class="tooltip" style="float: right; cursor: pointer ; margin-right: 1%;">
              <img v-if="showNotepad" src="../../assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false"  class="w-10 h-10"/>
              <img src="../../assets/Expand.png" alt="" @click="showNotepad = true" class="w-10 h-10" v-else />
              <div v-if="showNotepad" class="tooltiptext" style= " white-space: pre-wrap;">Notizblock ausblenden</div>
              <div v-else class="tooltiptext" style= " white-space: pre-wrap;">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="height: 40rem;  overflow: auto">
                <Submit />
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
     
        <!-- <div class="column right"> -->
        <div>
          <!-- Should be replaced by a widget -->
          <Notepad />
        </div>
      
    </div>
    <!-- </div> -->
  
  </div>

</template>

<script>

import Schneider from '../../assets/Schneider.jpg';
import Popup from '../../components/Popup.vue';
import { ref } from 'vue';
import Notepad from '@/components/Notepad.vue';
import Anamnese from '@/components/Anamnese.vue';
import Patientenakte from '../../components/Patientenakte.vue';
import Untersuchen from '../../components/Untersuchen.vue';
import Labaratory from '../../components/Labaratory.vue';
import Facharzt from '../../components/Facharzt.vue';
import Submit from '../../components/Submit.vue';
import Header from '@/components/DefaultLayout.vue';
// import Tooltip from '@/components/Tooltip.vue';
import axios from "axios";
export default {
  name:"Patient1",

  data() {
    return {counters: {
        safety: null,
        satisfaction: null,
        time: null,
        economy: null,
        step:""
       
      },
      patients:[],
      patient: null,
      showTooltip: false,
      showNotepad: false
    };
  },
methods: {
    patientenaktecounter() {
      var data = new FormData();
      
      data.append("economy",1);
      data.append("satisfaction",0);
      data.append("time",1);
      data.append("safety",0);
      data.append("step","Sie haben einen Blick in die Patientenakte geworfen")
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
    },},

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
  mounted() {
    fetch("https://database-pafasi.herokuapp.com/patients/") //json server to be replaced by database later
      .then(res => res.json())
      .then(data => this.patients = data)
      .catch(err => console.log(err.message));
  },
  components: {Header,  Popup, Notepad, Anamnese, Patientenakte, Untersuchen, Labaratory, Facharzt, Submit }
}
</script>
<style scoped>


.fallbeschreibung {
  /* border: 1px solid green; */
  text-align: left;
  /* margin-left: 200px; */
  padding-left: 10px;
  margin-right: 50px;
}
.Notepad {
  border: 1px solid green;
  text-align: left;
  height: 50%;
  width:50%;
  padding-left: 10px;
}
.button {
  background: black;
  margin-right: 5%;
  margin-left:5%;
  margin-top:1%;
   
  color: white;
  padding: 2%;
  border-radius: 20px;

  width:40%;
  /* width: 20%; */
  cursor: pointer;
  /* color: #444   */
}
.submitbutton{
  background: #be123c;
  color: white;
  padding: 2%;
  border-radius: 20px;
  margin-right: 5%;
  margin-left:5%;
  margin-top:1%;
  
  width:40%;
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
  width: 400%;
  background-color: rgba(0, 0, 0, 0.689);
  color: #fff;
  text-align: center;
  font-size: small;
  padding: 1px 0;


  /* Position the tooltip */
  position: absolute;
  z-index: 100;
  right:0
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  
}

</style>
