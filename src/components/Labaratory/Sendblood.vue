<template>
  <div>
    <div>
      
          <h2>Die von Ihnen angeforderten Laborwerte werden veranlasst. Die Ergebnis-Rückmeldung vom Labor erfolgt üblicherweise am nächsten Tag (d.h. nach Beendigung der heutigen Vorstellung). Fahren Sie nun fort mit dem, was Sie heute mit Ihrem Patienten noch tun möchten.</h2>
         <div class= "flex justify-center">
            
            

         <button style=""  type="button" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-2xl"
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
  
  components: { Notepad, Popup}
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
 
  border-radius: 10px;
  align-self: center;
  height:50%;
 padding:20px;
  margin-bottom: 100px;
  margin-top:80px;
 
  cursor: pointer;
  /* color: #444   */
}
</style>