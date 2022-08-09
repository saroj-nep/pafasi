<template>
<div>
<div class="border-4">
  <div class="sticky top-0 bg-emerald-600">
    <h1 class="h1 text-white" style=";"> Die von Ihnen angeforderten Laborwerte werden veranlasst. Das Labor meldet die Ergebnisse der Urin-Kultur in der Regel in 2 Tagen zurück (d.h. nach dem Ende der heutigen Präsentation). Fahren Sie nun mit dem fort, was Sie heute mit Ihrem Patienten machen wollen. </h1>
    </div>
   
           <!-- <br><button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click="">
             Copy to Notepad
         </button> -->         
         <div class= "grid grid-cols-3 content-center justify-items-center ">
      
          <h2 class="w-200 h-20 " id="urine_options1_title"> U-Stix</h2> 
          <img class="w-20 h-20 self-center justify-self-center" src="@/assets/arrow.png" alt=""/>
           <h3 id="urine_options1_result"> </h3>
          
          <h2 class="w-200 h-20 " id="urine_options1_title"> Urin-Sediment </h2> 
          <img class="w-20 h-20 self-center justify-self-center" src="@/assets/arrow.png" alt=""/>
           <h3 id="urine_options1_result"> Unauffälliger Mikroskopiebefund. Keine Bakterien, keine Leukozyten- oder Eiweiß-Zylinder.</h3>
          
          
           </div>
       </div>
 
           
<br><br>
<div class= "grid grid-cols-2" >

            <button style=""  class="submitbutton btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-2xl"
           @click="() => TogglePopup('nextdayTrigger')">
          2 Tage auslassen, um die Ergebnisse zu erhalten
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
                style="max-height: 20rem; overflow: auto">
                <Nextday />
              </div>
              
            </div>
          </Popup>

         <button style=""  type="button" class="submitbutton btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-2xl"
            @click="goToEvents()">
        zum Hauptmenü gehen
         </button>
</div>
        
      </div>
   
  
</template>

<script>
import Popup from '@/components/Popup.vue';
import { ref } from 'vue';
import Notepad from '@/components/Notepad.vue';
import Nextday from './Nextday.vue';

export default {
 methods: {
        goToEvents: function () {
            location.href = "/patients/1";
        }},
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
  
  components: { Notepad, Popup }
}



</script>

<style scoped>

h3 {
  background: #7fb78f;
  padding: 20px;
  border-radius: 10px;
  margin: 10px auto;
  max-width: 20 px;
    /* width: 50%; */
  cursor: pointer;
  color: #444
}

h3:hover {
  background: rgb(39, 190, 107)
}
h2 {
  background: #c67e7e;
  padding: 20px;
  border-radius: 10px;
  margin: 10px auto;
  min-width: 200 px;
    width: 50%; 
  cursor: pointer;
  color: #444
}

h2:hover {
  background: rgb(234, 25, 39)
}
.button {
  background: black;
  color: white;
 
  border-radius: 10px;
 align-self: center;
  height:50%;
  width: 20%; 
  min-width: 100px;
  cursor: pointer;
  /* color: #444   */
}
.submitbutton{
  background: #be123c;
  color: white;
  padding: 10px;
  border-radius: 10px;
  margin: 5px auto;
  min-height: 50px;
  width: 80%; 
  cursor: pointer;
  /* color: #444   */
}
</style>