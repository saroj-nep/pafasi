<template>
  <div>
    <div>
      
          <h2 style="font-size:1.5em; " class="h1 text-white text-left" >Die von Ihnen angeforderten Laborwerte werden veranlasst. Die Ergebnis-Rückmeldung vom Labor erfolgt üblicherweise am nächsten Tag (d.h. nach Beendigung der heutigen Vorstellung). Fahren Sie nun fort mit dem, was Sie heute mit Ihrem Patienten noch tun möchten.</h2>
         <div class= "flex justify-center">
            

         <button style="margin-right: 50px; margin-left: 100px"  type="button" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-2xl"
            @click="goToEvents()">
        zum Hauptmenü gehen
         </button>
        </div>
      </div>
    </div>
  
</template>

<script>
import Popup from '@/components/Popup.vue';
import { ref } from 'vue';
import Notepad from '@/components/Notepad.vue';


export default {
 methods: {
        goToEvents: function () {
               document. location. reload()
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
</style>