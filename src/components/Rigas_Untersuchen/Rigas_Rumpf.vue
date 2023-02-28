<template>
  <div class="grid grid-cols-1 gap-2">
     <div class="sticky top-0 bg-emerald-600">

    <h1 style="font-size:1.5em; " class="h1 text-white text-center" ><b>Wählen Sie aus, welche nicht apparativen Untersuchungen am Rumpf Sie durchführen möchten.​

​</b> </h1>
    </div>
    <br>
    


        <div class="flex  justify-center ">
        <button  class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
           @click.prevent="TogglePopup('kopfTrigger')">
        Thorax (Herz & Lunge)  </button>

          <Popup v-if="popupTriggers.kopfTrigger" :TogglePopup="() => TogglePopup('kopfTrigger')">
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
                <Thorax />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>
         
          <button class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="TogglePopup('rumpfTrigger')">
          Wirbelsäule
          </button>
            

          <Popup v-if="popupTriggers.rumpfTrigger" :TogglePopup="() => TogglePopup('rumpfTrigger')">
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
                <Wirbel/>
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>
 <button class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="TogglePopup('obereTrigger')">
           Abdomen
          </button>
        

          <Popup v-if="popupTriggers.obereTrigger" :TogglePopup="() => TogglePopup('obereTrigger')">
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
                <Abdomen/>
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
</template>

<script>
import Popup from '@/components/Popup.vue';
import { ref } from 'vue';
import Notepad from '@/components/Rigas_Notepad.vue';
import Thorax from '@/components/Rigas_Untersuchen/Rigas_Thorax.vue';
import Wirbel from '@/components/Rigas_Untersuchen/Rigas_Wirbel.vue';
import Abdomen from '@/components/Rigas_Untersuchen/Rigas_Abdomen.vue';


export default {
 name:"Untersuchens",
  data() {
    return {
      
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
  
  components: { Popup, Notepad, Thorax,Abdomen, Wirbel}
}
</script>

<style scoped>

.button {
  background: black;
  margin-right: 5%;
  margin-left:1%;
  margin-top:1%;
  color: white;
  padding: 2%;
  border-radius: 20px;

  width:85%;
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
  width: 500%;
  background-color: rgb(97, 96, 96);
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 100;
  right:0
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}

</style>
