<template>
<div style="height:80vh; overflow:auto">

  <div class=" bg-emerald-600">
  <h1 style="font-size:1.5em; " class="h1 text-white text-center" >Die von Ihnen angeforderten Laborergebnisse werden veranlasst. Wenn Sie eine Urinkultur angefordert haben, wird das Labor die Ergebnisse der Urinkultur in der Regel innerhalb von 2 Tagen (d. h. nach dem Ende der heutigen Präsentation) zurückmelden. Fahren Sie nun mit dem fort, was Sie heute mit Ihrem Patienten tun wollen. </h1>
    </div>
   
           <!-- <br><button style="margin-right: 50px; margin-left: 100px" color="#42b983" class="button"
            @click="">
             Copy to Notepad
        </button> -->  
        <br>      
 <div v-for="urine in urines">
<div v-if="urine.user===email">
   <table class=" border-separate border-spacing-8 border border-emerald-500 " >
    <thead class="sticky bg-emerald-200 top-0">
      <tr>
        <th class="border border-emerald-600 " >Auswahl </th>
        <th class="border border-emerald-600 ">Parameter</th>
        <th class="border border-emerald-600 ">Befund</th>
        <th class="border border-emerald-600 " >Normbereich</th>
      
      </tr>
    </thead>
    <tbody v-if="urine.stix==1"  class="border border-emerald-600  "  >
      <tr class="border border-emerald-600 ">
        <td style="text-align: center" class="bg-emerald-100 border border-emerald-600 ">U-Stix</td>
        <td></td>
        <td></td>
        <td></td>
       
      </tr>
      <tr style="text-align: center;">
        <td></td>
        <td >Erythrozyten</td>
        <td >-</td>
        <td>-</td>
       
      </tr>
      <tr style="text-align: center">
        <td></td>
        <td>Leukozyten</td>
        <td>-</td>
        <td>-</td>
       
      </tr>
      <tr style="text-align: center">
        <td></td>
        <td>Nitrit</td>
        <td>-</td>
        <td>-</td>
        
      </tr>
      <tr style="text-align: center">
        <td></td>
        <td>Protein</td>
        <td>-</td>
        <td>-</td>
       
      </tr>
      <tr style="text-align: center">
        <td></td>
        <td>pH</td>
        <td>5</td>
        <td>&lt;6</td>
        
      </tr>
      <tr style="text-align: center">
        <td></td>
        <td>Glucose</td>
        <td>-</td>

        <td>&lt;30 mg/dl</td>
      </tr>
      <tr style="text-align: center">
        <td></td>
        <td>Ketone</td>
        <td>-</td>
     
        <td>-</td>
      </tr>
    </tbody>
    <tbody  v-if="urine.sediment==1">
      <tr>
        <td style="text-align: center" class="bg-emerald-100 border border-emerald-600 ">Urin-Sediment</td>
       
        <td>Standardbefund:</td>
        <td>Unauffälliger Mikroskopiebefund. Keine Bakterien Keine Leukozyten- oder Eiweiß-Zylinder.</td>
      </tr>
    </tbody>
    </table><br><br>
    </div>
</div> 
          
         
      
 
<div class= "flex justify-center" >

    <button style=""  class="submitbutton btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-2xl"
           @click="allurines()">
          die heutigen Ergebnisse abrufen
         </button>
            

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

import axios from "axios";

export default {
   name:"Allurines",
 
  data() {
    return {
      urines: [],
      showTooltip: false,
      showNotepad: false,
      email:localStorage.email,
    };
  },
  
  methods: {
    allurines() {
        

    axios.get( "./Api/api.php?action=geturine",)
    
    .then((response) => {this.urines=response.data })
    
  },



        goToEvents: function () {
              document. location. reload()
        }},
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
  margin-right: 5%;
  margin-left:10%;
  margin-top:1%;
  color: white;
  padding: 2%;
  border-radius: 20px;

  width:30%;
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