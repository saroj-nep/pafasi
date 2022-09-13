<template>
  <div class="grid grid-cols-1 gap-2">
     <div class="sticky top-0 bg-emerald-600">

    <h1 class="h1 text-white " style=";"> <strong>Wählen Sie aus, was Sie für 'Nicht Apparative Untersuchen: untere Extremität' sehen möchten  </strong> </h1>
    </div>
    <br>
    


        <div class="flex justify-center ">
        <button id="inspektionquestion"  class="button"
           @click.prevent="counterInspektion(); displayInspektion();">
         Inspektion und Palpation </button>

         
          <button id="nasequestion" class="button"
           @click.prevent="counterNase();displayNase();">
            Prüfung der Beweglichkeit
          </button>
            
           <button id="mundquestion" class="button"
                  @click.prevent="counterMund();displayMund();">
            neurolog. Untersuchung: Prüfung von Reflexen, Kraft und Sensibilität
          </button>
        

      
           <button  id="ohrenquestion" class="button"
            @click.prevent="counterOhren();displayOhren();">
           Prüfung der peripheren Durchblutung
          </button>
            </div>
            <div class="flex justify-center ">

          
          </div> 
        <h3 id="inspektionanswer" style="display:none"> Haut bds. o.p.B., beide Beine mäßig blass, leichte Varkosis: Corona Phlebetica paraplantaris, mehrere Besenreißervarizen an Fuß- und Kniegelenken; keine Ödeme, Atrophien oder Faszikulationen; keine Nagelveränderungen; keine Fußdeformitäten; Beckenstand gerade, keine Beinlängendifferenz; keine trophischen Störungen, Femoralispulse bds gut palpabel, Popliteal- und Fußpulse bds. schwach palpabel, Puls ca. 68/min, beide Füße eher kalt, Rekapilarisationszeit bds. &lt;2Sek. Schmerzausstrahlung bis lateralem Fußrand linker Fuß</h3> 
        <h3 id="naseanswer" style="display:none">normale und beschwerdefreie Beweglichkeit in Hüft-, Knie- und Fußgelenken</h3> 
        <h3 id="mundanswer" style="display:none">Sensibilität: Hypästhesien links dorsal und lateral, Rest o.p.B.. Tonus unauffällig. Muskelkraft bei Kniestreckung (M. quadriceps (L4)) bds gleich, bei Plantar- und Dorsalflexion des Fußes und der Großzehen (L5/S1) li &lt;re, Kraftgrad 4/5. Reflexe: Patellarsehnenreflex (PSR) bds regelrecht, Achillessehnenreflex (ASR) links abgeschwächt, Babinski bds. negativ. Beinvorhalteversuch(Anwinkeln im 90° Winkel): kein Absinken. Knie-Hacke-Versuch zielsicher, Romberg- und Unterberger-Versuch unauffällig. Einbeinstand etwas wackelig aufgrund der einsetzenden Rückenschmerzen, Fersen- und Zehenspitzengang wackelig, Lasègue rechts negativ, links schnell einschießende Schmerzen in das ipsilaterale Bein mit Ausstrahlung bis an die Fußaußenseite. Rütteltest fraglich positiv.</h3> 
        <h3 id="ohrenanswer" style="display:none">beide Beine mäßig blass, leichte Varkosis: Corona Phlebetica paraplantaris, mehrere Besenreißervarizen an Fuß- und Kniegelenken; keine Ödeme, keine trophischen Störungen, leichte Strömungsgeräusche über den Femoralisarterien bds., Femoralispulse bds gut palpabel, Popliteal- und Fußpulse bds. schwach palpabel, Puls ca. 68/min, beide Füße eher kalt, Rekapilarisationszeit bds. &lt;2Sek.</h3> 
           
  </div>
</template>

<script>
import Popup from '@/components/Popup.vue';
import { ref } from 'vue';
import Notepad from '@/components/Notepad.vue';
import Kopf from '@/components/Untersuchen/Kopf.vue';
import Rumpf from '@/components/Untersuchen/Rumpf.vue';
import Obere from '@/components/Untersuchen/Obere.vue';
import Untere from '@/components/Untersuchen/Untere.vue';
import Genital from '@/components/Untersuchen/Genital.vue';
import axios from 'axios';

export default {
 name:"Untersuchens",
  data() {
    return {counters: {
        safety: null,
        satisfaction: null,
        time: null,
        economy: null
      },
      
      showTooltip: false,
      showNotepad: false
    };
  },

methods:{
   counterInspektion() {
      var data = new FormData();
  
      data.append("economy",1);
      data.append("satisfaction",1);
      data.append("time",0.5);
      data.append("safety",100);
      data.append("step","Sie haben Inspektion & Palpation unter Nicht Apparative Untersuchen: untere Extremität angekreuzt");
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
  
      data.append("economy",1);
      data.append("satisfaction",1);
      data.append("time",2);
      data.append("safety",100);
      data.append("step","Sie haben Prüfung der Beweglichkeit unter Nicht Apparative Untersuchen: untere Extremität angekreuzt")
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
   
    counterMund() {
      var data = new FormData();
  
      data.append("economy",1);
      data.append("satisfaction",1);
      data.append("time",5);
      data.append("safety",100);
      data.append("step","Sie haben neurolog Untersuchung: Prüfung von Reflexen, Kraft und Sensibilität unter Nicht Apparative Untersuchen: untere Extremität angekreuzt")
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
    counterOhren() {
      var data = new FormData();
  
      data.append("economy",1);
      data.append("satisfaction",1);
      data.append("time",1.5);
     data.append("safety",100);
     data.append("step","Sie haben Prüfung der peripheren Durchblutung unter Nicht Apparative Untersuchen: obere Extremität angekreuzt")
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
        mundquestion.style.opacity="1";
        ohrenquestion.style.opacity="1";
        naseanswer.style.display = "none";
        mundanswer.style.display = "none";
        ohrenanswer.style.display = "none";
        
      }},
displayNase(){  if (naseanswer.style.display !== "none") {
        naseanswer.style.display = "none";
        nasequestion.style.opacity="1";
      } else {
        naseanswer.style.display = "block";
        nasequestion.style.opacity="0.5";
        inspektionanswer.style.display = "none";
        mundanswer.style.display = "none";
        ohrenanswer.style.display = "none";
        inspektionquestion.style.opacity="1";
        mundquestion.style.opacity="1";
        ohrenquestion.style.opacity="1";
        
      }},
displayMund(){  if (mundanswer.style.display !== "none") {
        mundanswer.style.display = "none";
        mundquestion.style.opacity="1";

      } else {
        mundanswer.style.display = "block";
        mundquestion.style.opacity="0.5";
        naseanswer.style.display = "none";
        inspektionanswer.style.display = "none";
        ohrenanswer.style.display = "none";
        nasequestion.style.opacity="1";
        inspektionquestion.style.opacity="1";
        ohrenquestion.style.opacity="1";
        
      }},
displayOhren(){  if (ohrenanswer.style.display !== "none") {
        ohrenanswer.style.display = "none";
        ohrenquestion.style.opacity="1";
      } else {
        ohrenanswer.style.display = "block";
        ohrenquestion.style.opacity="0.5";
        naseanswer.style.display = "none";
        mundanswer.style.display = "none";
        inspektionanswer.style.display = "none";
        nasequestion.style.opacity="1";
        mundquestion.style.opacity="1";
        inspecktionquestion.style.opacity="1";
        
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
  
  components: { Popup, Notepad, Kopf,Rumpf,Obere,Untere,Genital}
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
