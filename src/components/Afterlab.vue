<template>
  <div style="">
    <div class= "grid justify-center">
      <div class="bg-emerald-600">
          <h2 style="font-size:1.2em; " class="h1 text-white text-center" >Was möchten Sie jetzt tun?</h2>
      </div>
          <br> <br><br><br> <div class= "grid grid-cols-2  gap-2">
            
        

         <button  class="button  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click="() => TogglePopup('nichtsTrigger')">
           <h3 style="font-size:1em;">Nichts Weiter</h3>
         </button>

         
          <Popup2 v-if="popupTriggers.nichtsTrigger" :TogglePopup="() => TogglePopup('nichtsTrigger')">
           
            <div class="grid grid-cols-3 gap-4" style="margin-top: 20px;">
              <div v-bind:class="`${showNotepad ? 'col-span-2' : 'col-span-3'}`"
                style="height: 40rem;  overflow: auto">
                <Specialties />
              </div>
              <div class="col-span-1">
               
              </div>
            </div>
          </Popup2>
          <button  class="button  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click="() => TogglePopup('krankenTrigger')">
           <h3 style="font-size:1em;">Patienten sofort kontaktieren und ins Krankenhaus einweisen</h3>
         </button>

         
          <Popup2 v-if="popupTriggers.krankenTrigger" :TogglePopup="() => TogglePopup('krankenTrigger')">
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
                <Print />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup2>

          <button  class="button  btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click="() => TogglePopup('andernTrigger')">
           <h3 style="font-size:1em;">Arbeitsdiagnose ändern?</h3>
         </button>

         
          <Popup v-if="popupTriggers.andernTrigger" :TogglePopup="() => TogglePopup('andernTrigger')">
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
               <Submit2 />
              </div>
              <div class="col-span-1">
                <div v-if="showNotepad">
                  <Notepad />
                </div>
              </div>
            </div>
          </Popup>


         <button style="font-size:1em;"  type="button" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-2xl"
            @click="goToEvents()">
          Patienten nochmal einbestellen
         </button>
        </div>
      </div>
    </div>
  
</template>

<script>
import Popup from '@/components/Popup.vue';
import Popup2 from '@/components/Popup2.vue';
import { ref } from 'vue';
import Notepad from '@/components/Notepad.vue';
import Print from '@/components/Prints.vue';
import Submit2 from './Submit2.vue';
import Specialties from './Facharzt/Specialties.vue';




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
  
  components: { Notepad, Popup, Print, Popup2, Submit2, Specialties }
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
  padding: 5%;
  border-radius: 20px;
  margin-right: 5%;
  margin-left:10%;
  margin-top:5%;
  width:70%;
  /* width: 20%; */
  cursor: pointer;
  /* color: #444   */
}
</style>