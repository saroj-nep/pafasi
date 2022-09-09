
<template>
  <div>
     <div class="sticky top-0 bg-emerald-600">

    <h1 class="h1 text-white " > <strong>Wählen Sie aus, was Sie für 'Laboranordnungen' sehen möchten  </strong> </h1>
    </div>
    <br>
    <br>
       <button style="margin-right: 50px; margin-left:100px" color="#42b983" class="button"
            @click.prevent="TogglePopup('bloodTrigger')">
         Blutentnahme
         </button>

          <Popup v-if="popupTriggers.bloodTrigger" :TogglePopup="() => TogglePopup('bloodTrigger')">
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
                <Blood />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>
  
         <br> <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
          @click.prevent="TogglePopup('urineTrigger')">
            Urindiagnostik
          </button>

          <Popup v-if="popupTriggers.urineTrigger" :TogglePopup="() => TogglePopup('urineTrigger')">
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
                <Urine />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>

          
         <br> <button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
          @click.prevent="TogglePopup('stoolTrigger')">
          Stuhlprobe
          </button>

          <Popup v-if="popupTriggers.stoolTrigger" :TogglePopup="() => TogglePopup('stoolTrigger')">
            <div class="tooltip" style="float: right; cursor: pointer">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false" style="width: 30px" />
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" style="width: 50px" v-else />
              <div v-if="showNotepad" class="tooltiptext">Notizblock ausblenden</div>
              <div v-else class="tooltiptext">Notizblock anzeigen</div>
            </div>
            <div class="grid grid-cols-3 gap-2" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                >
                <Stool />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>


        

         <br> <button style="margin-right: 50px; margin-left:100px" class="submitbutton btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] ease-out hover:translate-y-1 transition-all rounded shadow-2xl"
           @click="() => TogglePopup('nextdayTrigger')">
           Ergebnisse des bestellten Tests
         </button>

          <Popup v-if="popupTriggers.nextdayTrigger" :TogglePopup="() => TogglePopup('nextdayTrigger')">
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
                <TotalNextday />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>
    </div>
 
</template>

<script>
import Popup from '@/components/Popup.vue';
import { ref } from 'vue';
import Notepad from '@/components/Notepad.vue';
import Blood from "./Labaratory/Blood.vue";
import Urine from "./Labaratory/Urine.vue";
import Stool from "./Labaratory/Stool.vue";
import TotalNextday from './Labaratory/TotalNextday.vue';

export default {
 
  data() {
    return {
      
      showTooltip: false,
      showNotepad: true
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
  
  components: {Urine,Stool,Blood, Notepad, Popup, TotalNextday }
}
</script>

<style scoped>
.submitbutton{
  background: #be123c;
  color: white;
  padding: 20px;
  border-radius: 10px;
  margin: 10px auto;
  min-height: 50px;
  width:200px;
  cursor: pointer;
  align-self: center;
  justify-self: center;
  /* color: #444   */
}
.button {
  background: black;
  color: white;
  padding: 20px;
  border-radius: 10px;
  margin: 10px auto;
  width:200px;
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
