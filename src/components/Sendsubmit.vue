<template>
  <div>
    <div class= "grid justify-center">
      
          <h2 style="font-size:1.2em; " class="h1 text-white text-center" >Möchten Sie die heutige Prüfung abschließen? Sie werden nicht mehr zurückgehen können.</h2>
         <div class= "flex justify-center">
            
        

         <button  class="button  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="() => TogglePopup('beendenTrigger')">
           <h3 style="font-size:1em;">Ja, ich bin bereit, die heutige Prüfung abzuschließen.</h3>
         </button>

         
          <Popup v-if="popupTriggers.beendenTrigger" :TogglePopup="() => TogglePopup('beendenTrigger')">
             <div class="tooltip" style="float: right; cursor: pointer ; margin-right: 1%;">
              <img v-if="showNotepad" src="@/assets/Collapse.png" alt="" @mouseover="showTooltip = true"
                @mouseleave="showTooltip = false" @click="showNotepad = false"  class="w-10 h-10"/>
              <img src="@/assets/Expand.png" alt="" @click="showNotepad = true" class="w-10 h-10" v-else />
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


         <button style="font-size:1em;"  type="button" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-2xl"
            @click.prevent="goToEvents()">
          Nein! Zurück zum Hauptmenü.
         </button>
        </div>
      </div>
    </div>
  
</template>

<script>
import Popup from '@/components/Popup.vue';
import { ref } from 'vue';
import Notepad from '@/components/Notepad.vue';
import Submit from '@/components/Submit.vue';


export default {
 methods: {
        goToEvents: function () {
           document. location. reload()
         
        },
   
    
    },
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
  
  components: { Notepad, Popup, Submit}
}



</script>

<style scoped>

h2 {
  background: rgb(5, 150, 105);
  padding: 20px;
  border-radius: 10px;
  margin: 10px auto;
  
    /* width: 50%; */
  
  color: rgb(255, 255, 255)
}


.button {
   background: #be123c;
  color: white;
  padding: 2%;
  border-radius: 20px;
  margin-right: 5%;
  margin-left:10%;
  margin-top:1%;
  width:30%;
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