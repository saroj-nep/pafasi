<template>
  <div class="grid grid-cols-1 gap-2">
     <div class="sticky top-0 bg-emerald-600">

    <h1 style="font-size:1.5em; " class="h1 text-white text-center" ><b>Wählen Sie aus, was Sie für 'Nicht Apparative Untersuchen: Kopf' sehen möchten.  </b> </h1>
    </div>
    <br>
    


        <div class="flex justify-center ">
        <button id="inspektionquestion"  class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
           @click.prevent="counterInspektion(); displayInspektion();">
         Inspektion und Palpation </button>

         
          <button id="nasequestion" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="counterNase();displayNase();">
            Nase untersuchen
          </button>
            
           <button id="mundquestion" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="counterMund();displayMund();">
            Mund/Mundhöhle/ Rachen untersuchen
          </button>
        

      
           <button  id="ohrenquestion" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="counterOhren();displayOhren();">
           Ohren untersuchen
          </button>
            </div>
             <div class="flex justify-center ">

           <button id="lymphquestion" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="counterLymph();displayLymph();">
           Lymphknoten abtasten
          </button>
            

         
          <button id="schildquestion" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="counterSchild();displaySchild();">
           Schilddrüse untersuchen
          </button>
            

        
          <button id="halsquestion" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="counterHals();displayHals();">
           Halswirbelsäule
          </button>
          <button id="orientquestion" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="counterOrient();displayOrient();">
           Orientierende neurologische Untersuchung / Funktionsprüfung
          </button>
          </div> 
        <h3 id="inspektionanswer" style="display:none"> Gesichtshaut rosig, mehrere Lentigines seniles (Altersflecken) auf Schläfen, Stirn und Kopfhaut, lichtes weißes Haar mit androgetischem Haarausfall an Stirn und Scheitel, Augen normal geöffnet, keine Ptosis, Pupillen seitengleich groß, Skleren und Konjunktiven nicht gerötet, Trigeminus-Druckpunkte nicht schmerzhaft, Schädelknochen palpatorisch o.p.B, Halsvenen nicht gestaut.</h3> 
         <h3 id="naseanswer" style="display:none">Nasenrücken gerade, fest, keine Nasenseptumdeviation, kein Hämatom, keine Epistaxis.</h3> 
          <h3 id="mundanswer" style="display:none"> Lippen trocken, blass, keine Bläschen, keine Rhagarden, Mundöffnung gut durchführbar, Zähne: an mehreren Backenzähnen Brücken, 1 fehlender Backenzahn unten rechts, Munschleimhaut feucht, rosig, o.p.B, Rachenmandeln nicht vergrößert, keine Rötung, keine Beläge.</h3> 
           <h3 id="ohrenanswer" style="display:none">Ohrmuschel o.p.B., Gehörgänge bds reizlos, teilverlegt durch Cerumen, Trommelfelle bds. intakt, nicht gerötet.</h3> 
            <h3 id="lymphanswer" style="display:none">Bds. wenige leicht verschiebliche, weiche LK retroaurikulär tastbar.</h3> 
             <h3 id="schildanswer" style="display:none"> Keine Struma, keine Knoten, beweglich.</h3> 
              <h3 id="halsanswer" style="display:none"> Kopfhaltung gerade, Kopfbewegung in alle Richtungen gut und schmerzfrei möglich, keine muskulären Resistenzen, Wirbelkörperfortsätze in einer Linie tastbar, kein Meningismus.</h3> 
              <h3 id="orientanswer" style="display:none">Alle Hirnnerven o.p.B.</h3> 
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
        economy: null,
        step:''
      },
     
      
      showTooltip: false,
      showNotepad: false
    };
  },


  methods: {
    counterInspektion() {
      var data = new FormData();
  
      data.append("economy",0);
      data.append("satisfaction",0);
      data.append("time",0.1);
      data.append("safety",100);
      data.append("step","Sie haben Inspektion & Palpation unter Nicht Apparative Untersuchen: Kopf angekreuzt")
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
      data.append("satisfaction",0);
      data.append("time",0.1);
       data.append("safety",100);
       data.append("step","Sie haben Nase Untersuchen unter Nicht Apparative Untersuchen: Kopf angekreuzt")
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
  
      data.append("economy",0);
      data.append("satisfaction",0);
      data.append("time",0.3);
      data.append("safety",100);
      data.append("step","Sie haben Mund/Mundhoele/Rachen untersuchen unter Nicht Apparative Untersuchen: Kopf angekreuzt")
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
  
      data.append("economy",0);
      data.append("satisfaction",0);
      data.append("time",0.2);
     data.append("safety",100);
     data.append("step","Sie haben Ohren untersuchen unter Nicht Apparative Untersuchen: Kopf angekreuzt")
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
    counterLymph() {
      var data = new FormData();
  
      data.append("economy",0);
      data.append("satisfaction",0);
      data.append("time",0.1);
       data.append("safety",100);
       data.append("step","Sie haben Lymphknoten abtasten unter Nicht Apparative Untersuchen: Kopf angekreuzt")
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
    counterSchild() {
      var data = new FormData();
  
      data.append("economy",0);
      data.append("satisfaction",0);
      data.append("time",0.2);
     data.append("safety",100);
     data.append("step","Sie haben Schilddrüse untersuchen unter Nicht Apparative Untersuchen: Kopf angekreuzt")
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
    counterHals() {
      var data = new FormData();
  
      data.append("economy",0);
      data.append("satisfaction",1);
      data.append("time",0.2);
      data.append("safety",100);
      data.append("step","Sie haben Halswirbelsäule unter Nicht Apparative Untersuchen: Kopf angekreuzt")
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
    counterOrient() {
      var data = new FormData();
  
      data.append("economy",0);
      data.append("satisfaction",0);
      data.append("time",3.5);
      data.append("safety",100);
      data.append("step","Sie haben orientierende neurologische Untersuchung / Funktionsprüfung unter Nicht Apparative Untersuchen: Kopf angekreuzt")
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
        halsquestion.style.opacity="1";
        schildquestion.style.opacity="1";
        ohrenquestion.style.opacity="1";
        orientquestion.style.opacity="1";
        lymphquestion.style.opacity="1";
        naseanswer.style.display = "none";
        mundanswer.style.display = "none";
        halsanswer.style.display = "none";
        lymphanswer.style.display = "none";
        ohrenanswer.style.display = "none";
        schildanswer.style.display = "none";
        orientanswer.style.display = "none";
      }},
displayNase(){  if (naseanswer.style.display !== "none") {
        naseanswer.style.display = "none";
        nasequestion.style.opacity="1";
      } else {
        naseanswer.style.display = "block";
        nasequestion.style.opacity="0.5";
         inspektionanswer.style.display = "none";
        mundanswer.style.display = "none";
        halsanswer.style.display = "none";
        lymphanswer.style.display = "none";
        ohrenanswer.style.display = "none";
        schildanswer.style.display = "none";
        orientanswer.style.display = "none";
        inspektionquestion.style.opacity="1";
        mundquestion.style.opacity="1";
        halsquestion.style.opacity="1";
        schildquestion.style.opacity="1";
        ohrenquestion.style.opacity="1";
        orientquestion.style.opacity="1";
        lymphquestion.style.opacity="1";
      }},
displayMund(){  if (mundanswer.style.display !== "none") {
        mundanswer.style.display = "none";
        mundquestion.style.opacity="1";

      } else {
        mundanswer.style.display = "block";
        mundquestion.style.opacity="0.5";
          naseanswer.style.display = "none";
       inspektionanswer.style.display = "none";
        halsanswer.style.display = "none";
        lymphanswer.style.display = "none";
        ohrenanswer.style.display = "none";
        schildanswer.style.display = "none";
        orientanswer.style.display = "none";
        nasequestion.style.opacity="1";
        inspektionquestion.style.opacity="1";
        halsquestion.style.opacity="1";
        schildquestion.style.opacity="1";
        ohrenquestion.style.opacity="1";
        orientquestion.style.opacity="1";
        lymphquestion.style.opacity="1";
      }},
displayHals(){  if (halsanswer.style.display !== "none") {
        halsanswer.style.display = "none";
        halsquestion.style.opacity="1";
      } else {
        halsanswer.style.display = "block";
        halsquestion.style.opacity="0.5";
          naseanswer.style.display = "none";
        mundanswer.style.display = "none";
        inspektionanswer.style.display = "none";
        lymphanswer.style.display = "none";
        ohrenanswer.style.display = "none";
        schildanswer.style.display = "none";
        orientanswer.style.display = "none";
        nasequestion.style.opacity="1";
        mundquestion.style.opacity="1";
        inspektionquestion.style.opacity="1";
        schildquestion.style.opacity="1";
        ohrenquestion.style.opacity="1";
        orientquestion.style.opacity="1";
        lymphquestion.style.opacity="1";
      }},
displayLymph(){  if (lymphanswer.style.display !== "none") {
        lymphanswer.style.display = "none";
        lymphquestion.style.opacity="1";
      } else {
        lymphanswer.style.display = "block";
        lymphquestion.style.opacity="0.5";
          naseanswer.style.display = "none";
        mundanswer.style.display = "none";
        halsanswer.style.display = "none";
        inspektionanswer.style.display = "none";
        ohrenanswer.style.display = "none";
        schildanswer.style.display = "none";
        orientanswer.style.display = "none";
        nasequestion.style.opacity="1";
        mundquestion.style.opacity="1";
        halsquestion.style.opacity="1";
        schildquestion.style.opacity="1";
        ohrenquestion.style.opacity="1";
        orientquestion.style.opacity="1";
        inspektionquestion.style.opacity="1";
      }},
displayOhren(){  if (ohrenanswer.style.display !== "none") {
        ohrenanswer.style.display = "none";
         ohrenquestion.style.opacity="1";
      } else {
        ohrenanswer.style.display = "block";
        ohrenquestion.style.opacity="0.5";
          naseanswer.style.display = "none";
        mundanswer.style.display = "none";
        halsanswer.style.display = "none";
        lymphanswer.style.display = "none";
       inspektionanswer.style.display = "none";
        schildanswer.style.display = "none";
        orientanswer.style.display = "none";
        nasequestion.style.opacity="1";
        mundquestion.style.opacity="1";
        halsquestion.style.opacity="1";
        schildquestion.style.opacity="1";
        inspecktionquestion.style.opacity="1";
        orientquestion.style.opacity="1";
        lymphquestion.style.opacity="1";
      }},
displaySchild(){  if (schildanswer.style.display !== "none") {
        schildanswer.style.display = "none";
        schildquestion.style.opacity="1";
      } else {
        schildanswer.style.display = "block";
        schildquestion.style.opacity="0.5";
          naseanswer.style.display = "none";
        mundanswer.style.display = "none";
        halsanswer.style.display = "none";
        lymphanswer.style.display = "none";
        ohrenanswer.style.display = "none";
       inspektionanswer.style.display = "none";
        orientanswer.style.display = "none";
        nasequestion.style.opacity="1";
        mundquestion.style.opacity="1";
        halsquestion.style.opacity="1";
        inspektionquestion.style.opacity="1";
        ohrenquestion.style.opacity="1";
        orientquestion.style.opacity="1";
        lymphquestion.style.opacity="1";
      }},
displayOrient(){  if (orientanswer.style.display !== "none") {
        orientanswer.style.display = "none";
         orientquestion.style.opacity="1";
      } else {
        orientanswer.style.display = "block";
        orientquestion.style.opacity="0.5";
          naseanswer.style.display = "none";
        mundanswer.style.display = "none";
        halsanswer.style.display = "none";
        lymphanswer.style.display = "none";
        ohrenanswer.style.display = "none";
        schildanswer.style.display = "none";
        inspektionanswer.style.display = "none";
        nasequestion.style.opacity="1";
        mundquestion.style.opacity="1";
        halsquestion.style.opacity="1";
        schildquestion.style.opacity="1";
        ohrenquestion.style.opacity="1";
       inspektionquestion.style.opacity="1";
        lymphquestion.style.opacity="1";
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
  background: rgb(5,150,105);
  padding: 20px;
  border-radius: 10px;
  margin: 10px auto;
;
    /* width: 50%; */
  cursor: pointer;
  color: rgb(255, 255, 255)
}

h3:hover {
  background: rgb(5,150,105)
}
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
