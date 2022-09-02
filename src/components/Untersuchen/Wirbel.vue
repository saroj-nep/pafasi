<template>
  <div class="grid grid-cols-1 gap-2">
     <div class="sticky top-0 bg-emerald-600">

    <h1 class="h1 text-white " style=";"> <strong>Wählen Sie aus, was Sie für 'Nicht Apparative Untersuchen: Rumpf-Wirbel' sehen möchten  </strong> </h1>
    </div>
    <br>
    


        <div class="flex justify-center ">
        <button id="inspektionquestion"  class="button"
           @click.prevent="displayInspektion();">
         Inspektion und Palpation </button>

         
          <button id="nasequestion" class="button"
            @click.prevent="displayNase();">
          Funktionsuntersuchung
          </button>
             
          <button id="halsquestion" class="button"
            @click.prevent="displayHals();">
          Halswirbelsäule
          </button>
         
          </div> 
        <h3 id="inspektionanswer" style="display:none"> adipöser EZ, gebeugte Haltung, Muskelverhärtungen paravertebral v.a. lumbal, WS-Klopfschmerz</h3> 
         <h3 id="naseanswer" style="display:none">Ante-, Retro-, Lateroflexion sowie Rotation mit erheblichen Schmerzen verbunden, bei Vorbeugung kein Hinweis auf ausgeprägte Skoliose, kein Vorlaufphänomen. Der Patient gibt Schmerzen beim Vorbeugen sowie Hochkommen an, Rüttelschmerz fraglich positiv, Lasègue rechts negativ, links schnell einschießende Schmerzen in das ipsilaterale Bein mit Ausstrahlung bis an die Fußaußenseite, kein Meningismus</h3> 
       <h3 id="halsanswer" style="display:none">Kopfhaltung gerade, Kopfbewegung in alle Richtungen gut und schmerzfrei möglich, keine muskulären Resistenzen, Wirbelkörperfortsätze in einer Linie tastbar, kein Meningismus</h3>    
  </div>
</template>

<script>
import Popup from '@/components/Popup.vue';
import { ref } from 'vue';
import Notepad from '@/components/Notepad.vue';


export default {
 name:"Untersuchens",
  data() {
    return {
      
      showTooltip: false,
      showNotepad: false
    };
  },

methods:{
displayInspektion(){  if (inspektionanswer.style.display !== "none") {
        inspektionanswer.style.display = "none";
        inspektionquestion.style.opacity="1";
      } else {
        inspektionanswer.style.display = "block";
        inspektionquestion.style.opacity="0.5";
        nasequestion.style.opacity="1";
        naseanswer.style.display = "none";
        halsquestion.style.opacity="1";
        halsanswer.style.display = "none";
       
      }},
displayNase(){  if (naseanswer.style.display !== "none") {
        naseanswer.style.display = "none";
        nasequestion.style.opacity="1";
      } else {
        naseanswer.style.display = "block";
        nasequestion.style.opacity="0.5";
        inspektionanswer.style.display = "none";
        inspektionquestion.style.opacity="1";
        halsquestion.style.opacity="1";
        halsanswer.style.display = "none";
      }},
displayHals(){  if (halsanswer.style.display !== "none") {
        halsanswer.style.display = "none";
        halsquestion.style.opacity="1";
      } else {
        halsanswer.style.display = "block";
        halsquestion.style.opacity="0.5";
        inspektionanswer.style.display = "none";
        inspektionquestion.style.opacity="1";
        nasequestion.style.opacity="1";
        naseanswer.style.display = "none";
      }},

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
  
  components: { Popup, Notepad}
}
</script>

<style scoped>
 h3 {
  background:rgb(39, 190, 107);
  padding: 20px;
  border-radius: 10px;
  margin: 10px auto;
;
    /* width: 50%; */
  cursor: pointer;
  color: #444
}

h3:hover {
  background: rgb(39, 190, 107)
}
.button {
  background: black;
  color: white;
  padding: 20px;
  border-radius: 10px;
  margin:10px ;

 
  cursor: pointer;
 
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
