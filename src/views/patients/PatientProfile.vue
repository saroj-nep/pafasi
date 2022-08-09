<template>
<Header />
  <div v-if="patient">

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

      <div class="col-span-3">
        <div style="display:flex;  background-color: #dcfce7; padding: 20px; border-radius: 10px;">
          <div class="patient" style="width: 25%;">
            <div class="flex content-start  ">
              <img src= "../../assets/Schneider.jpg" class="object-contain h-48 " alt="Patient Image" style="top: 20px;" />   
          </div>
            <div><h1><strong>  {{ patient.title }}</strong></h1></div>
              <div>Alter: {{ patient.age }}</div>
              <div>Gesclecht: {{ patient.sex }}</div>
           
           
          </div>
          <div class="fallbeschreibung" style="width: 75%">
            <!-- Should be replaced by a widget -->
            <h3 style=""><strong>Fallbeschreibung</strong></h3>
            <br>
            <p style="border-radius: 5px">{{ patient.details }}</p>
            <!-- </div> -->
            <!-- <div class="column left"> -->
            <!-- </div> -->
          </div>
        </div>
        <div>
          <h1 class="h1" style="margin-top: 20px;margin-top: 20px; margin-left:400px;"> <strong>Was werden Sie als
              nächstes tun? </strong> </h1><br>


          <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click="() => TogglePopup('anamneseTrigger')">
          ausführlichere Anamnese führen
         </button>

          <Popup v-if="popupTriggers.anamneseTrigger" :TogglePopup="() => TogglePopup('anamneseTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="../../assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="../../assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Anamnese />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>
  
          <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click="() => TogglePopup('untersuchenTrigger')">
            Untersuchen
          </button>

          <Popup v-if="popupTriggers.untersuchenTrigger" :TogglePopup="() => TogglePopup('untersuchenTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="../../assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="../../assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Untersuchen />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>

          
          <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click="() => TogglePopup('patientenakteTrigger')">
           einen Blick in die Patientenakte werfenn
          </button>

          <Popup v-if="popupTriggers.patientenakteTrigger" :TogglePopup="() => TogglePopup('patientenakteTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="../../assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="../../assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Patientenakte />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>

          
          <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click="() => TogglePopup('laboranordnungenTrigger')">
           Laboranordnungen
         </button>

          <Popup v-if="popupTriggers.laboranordnungenTrigger" :TogglePopup="() => TogglePopup('laboranordnungenTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="../../assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="../../assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Labaratory />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>
        
         <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click="() => TogglePopup('facharztTrigger')">
           Facharzt
         </button>

          <Popup v-if="popupTriggers.facharztTrigger" :TogglePopup="() => TogglePopup('facharztTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="../../assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="../../assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
                <Facharzt />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>

         <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="submitbutton"
            @click="() => TogglePopup('beendenTrigger')">
          Heutige Vorstellung beenden und (be-)handeln
         </button>

          <Popup v-if="popupTriggers.beendenTrigger" :TogglePopup="() => TogglePopup('beendenTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="../../assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="../../assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="max-height: 20rem; overflow: auto">
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
      <div class="col-span-1">
        <!-- <div class="column right"> -->
        <div class="Notepad">
          <!-- Should be replaced by a widget -->
          <Notepad />
        </div>
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

export default {
  props: ["id"],
  data() {
    return {
      patient: null,
      showTooltip: false,
      showNotepad: false
    };
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
  mounted() {
    fetch("http://localhost:3000/patients/" + this.id) //json server to be replaced by database later
      .then(res => res.json())
      .then(data => this.patient = data)
      .catch(err => console.log(err.message));
  },
  components: {Header,  Popup, Notepad, Anamnese, Patientenakte, Untersuchen, Labaratory, Facharzt, Submit }
}
</script>
<style scoped>
* {
  box-sizing: border-box;
}
.column {
  float: left;
  padding: 10px;
  overflow: auto;
  max-height: calc(100vh - 800px);
}
.left {
  width: 75%;
}
.column right {
  width: 25%;
}
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
  height: 600px;
  padding-left: 10px;
}
.button {
  background: black;
  color: white;
  padding: 20px;
  border-radius: 10px;
  margin: 5px auto;
  width:400px;
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
