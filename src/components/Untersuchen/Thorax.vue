<template>
  <div class="grid grid-cols-1 gap-2">
     <div class="sticky top-0 bg-emerald-600">

    <h1 class="h1 text-white " style=";"> <strong>Wählen Sie aus, was Sie für 'Nicht Apparative Untersuchen: Rumpf-Thorax' sehen möchten  </strong> </h1>
    </div>
    <br>
    


        <div class="flex justify-center ">
        <button id="inspektionquestion"  class="button"
          @click.prevent="counterInspektion(); displayInspektion();">
         Inspektion und Palpation </button>

         
          <button id="nasequestion" class="button"
            @click.prevent="counterNase();displayNase();">
           Auskultation & Perkussion
          </button>
            
         
          </div> 
        <h3 id="inspektionanswer" style="display:none"> Haut: o.p.B., Halsvenen nicht gestaut, Thorax: symmetrisch, keine Thoraxdeformitäten, Rippen durchgängig tastbar, keine Konturunterbrechung, keine Thoraxinstabilität, seitengleiche Atemexkursionen, Atemfrequenz etwa 12/min, Herzspitzenstoß regelrecht tastbar</h3> 
         <h3 id="naseanswer" style="display:none">Herz:  rhythmisch, leises, bandförmiges Systolikum mit p.m. im 5. ICR links medioclaviculär, Fortleitung in Axilla, Herzfrequenz ca. 68/min, leichte Strömungsgeräusche über den Carotiden, Lunge: vesikuläre Atemgeräusche bds., keine Nebengeräusche, thorakal bds. sonorer Klopfschall, Lungengrenzen etwa bei BWK 10-11, normale Atemverschieblichkeit</h3> 
          
  </div>
</template>

<script>
import Popup from '@/components/Popup.vue';
import { ref } from 'vue';
import Notepad from '@/components/Notepad.vue';
import axios from 'axios';

export default {
 name:"Untersuchens",
  data() {
    return {counters: {
        safety: null,
        satisfaction: null,
        time: null,
        economy: null,
        step:''
      },
      
      showTooltip: false,
      showNotepad: true
    };
  },

methods:{
     counterInspektion() {
      var data = new FormData();
  
      data.append("economy",0);
      data.append("satisfaction",1);
      data.append("time",0.5);
      data.append("safety",100);
      data.append("step","Sie haben Inspektion & Palpation unter Nicht Apparative Untersuchen: Rumpf-Thorax angekreuzt")
    data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/api.php?action=countervariable",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
    },

    counterNase() {
      var data = new FormData();
  
      data.append("economy",0);
      data.append("satisfaction",1);
      data.append("time",2);
      data.append("safety",100);
      data.append("step","Sie haben Auskultation & Perkussion unter Nicht Apparative Untersuchen: Rumpf-Thorax angekreuzt")
     data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/api.php?action=countervariable",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
    },
displayInspektion(){  if (inspektionanswer.style.display !== "none") {
        inspektionanswer.style.display = "none";
        inspektionquestion.style.opacity="1";
      } else {
        inspektionanswer.style.display = "block";
        inspektionquestion.style.opacity="0.5";
        nasequestion.style.opacity="1";
        naseanswer.style.display = "none";
       
      }},
displayNase(){  if (naseanswer.style.display !== "none") {
        naseanswer.style.display = "none";
        nasequestion.style.opacity="1";
      } else {
        naseanswer.style.display = "block";
        nasequestion.style.opacity="0.5";
        inspektionanswer.style.display = "none";
        inspektionquestion.style.opacity="1";
       
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
