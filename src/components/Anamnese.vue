<template>
  <div class="" >
     <div class="sticky top-0 bg-emerald-600">

    <h1 class="h1 text-white" > <strong>Wählen Sie aus, was Sie für 'ausführlichere Anamnese führen' sehen möchten  </strong> </h1>
    </div>
    <br>
    <form action="" class="form" method="POST">
    <div class="grid grid-cols-3  gap-2">
    <button id="beschreibenquestion"  color="#42b983" class="button"
           @click.prevent="beschreibencounter(),displayBeschreiben();">
         Beschreiben Sie Ihre Symptome genauer! (Charakter, Auslösung, Zeit, ...)
         </button>

    <button id="akutesquestion"   color="#42b983" class="button"
            @click.prevent="akutescounter(),displayAkutes();">
            akutes Ereignis?/Aenderung der Lebensumstaende?
          </button>
             
    <button id="medikamenquestion" color="#42b983" class="button"
           @click.prevent="medikamencounter(),displayMedikamen();">
          Medikamentenanamnese
          </button>
          
    <button id="gewohnquestion"  color="#42b983" class="button"
            @click.prevent="gewohncounter(),displayGewohn();">
          Gewohnheiten, Lebensstil (sport, Ernaehrung,...))
         </button>
        
    <button id="nikotinquestion" color="#42b983" class="button"
            @click.prevent="nikotincounter(),displayNikotin();">
           Nikotin, Alkohol, Drogen?
         </button>

    <button id="allerginquestion"  color="#42b983" class="button"
            @click.prevent="allergincounter(),displayAllergin();">
          Allergien
         </button>
          
    <button id="vegetativequestion"  color="#42b983" class="button"
            @click.prevent="vegetativecounter(),displayVegetative();">
          vegetative Anamnese (Appetit, Schlaf, Verdauung etc))
         </button>
          
     <button id="gynoquestion"  color="#42b983" class="button"
           @click.prevent="gynocounter(),displayGyno();">
          Gynokologische/Urologische/Sexualanamnese
         </button>
          
    <button id="psychequestion" color="#42b983" class="button"
            @click.prevent="psychecounter(),displayPsyche();">
          Psyche
         </button>
         
     <button id="familienquestion"   color="#42b983" class="button"
            @click.prevent="familiencounter(),displayFamilien();">
          Familien- und Sozialanamnese (Beruf, Wohnsituation)
         </button>

          </div>
          </form>
    <h3 id="akutesanswer" style="display:none"> Er habe ja immer Rückenschmerzen, aber so schlimm sei es seit der Gartenarbeit am Wochenende. Auf genaueres Nachfragen: kein Sturz, hat Unkraut gerupft, ruckartig bewegt, was den Schmerz ausgelöst hatte</h3> 
    <h3 id="allerginanswer" style="display:none">keine Bekannt</h3> 
    <h3 id="beschreibenanswer" style="display:none">  Schmerzlokalisation: Patient weist auf lumbalen Bereich mit Ausstrahlung ins linke Bein, Dauer: er habe ja immer Rückenschmerzen, aber so schlimm sei es seit dem vergangenen Wochenende </h3> 
    <h3 id="familienanswer" style="display:none">Pensionierter Lehrer. Lebt mit seiner Ehefrau in einem Einfamilienhaus in ruhiger Wohngegend, zwei erwachsene Kinder</h3> 
    <h3 id="gewohnanswer" style="display:none">  kein Sport </h3> 
    <h3 id="gynoanswer" style="display:none"> Kann seit OP Urin nicht mehr so gut halten, seit OP Impotenz</h3> 
    <h3 id="medikamenanswer" style="display:none"> ASS 100, Atorvastatin</h3> 
    <h3 id="nikotinanswer" style="display:none">Ex-Raucher seit 20 Jahren, davor 35J geraucht (mal mehr, mal weniger)(0,5-1Pck), 1Bier/Tag, gelegentlich Rotwein mit seiner Frau beim Essen, andere Drogen werden verneint</h3> 
    <h3 id="psycheanswer" style="display:none"> Patient ist nikotiniert und angepasst, psychische Belastung durch körperl. Einschränkung angemessen, ansonsten ausgeglichen. Konzentration, Aufmerksamkeit, Gedächtnis, Sprache o.p.B.</h3> 
    <h3 id="vegetativeanswer" style="display:none">er schlafe eh in letzter Zeit schlecht, aber jetzt könne er kaum noch liegen. Auf genaueres Nachfragen gibt er an, dass er in letzter Zeit nachts (die Hitz) hätte und schwitze, nun sei aufgrund der Schmerzen die Rückenlage kaum erträglich.</h3> 
  </div>
</template>

<script>
import Popup from '@/components/Popup.vue';
import { ref } from 'vue';
import Notepad from '@/components/Notepad.vue';
import Submit from '@/components/Submit.vue';
import axios from "axios";


export default {
 name:"Anamneses",
  data() {
    return {counters: {
        safety: null,
        satisfaction: null,
        time: null,
        economy: null
      },
      
      showTooltip: false,
      showNotepad: true
    };
  },

 methods: {

 displayAkutes(){  if (akutesanswer.style.display !== "none") {
        akutesanswer.style.display = "none";
        akutesquestion.style.opacity="1";
      } else {
        akutesanswer.style.display = "block";
        akutesquestion.style.opacity="0.5";
        allerginquestion.style.opacity="1";
        beschreibenquestion.style.opacity="1";
        familienquestion.style.opacity="1";
        medikamenquestion.style.opacity="1";
        gynoquestion.style.opacity="1";
        nikotinquestion.style.opacity="1";
        gewohnquestion.style.opacity="1";
        allerginanswer.style.display = "none";
        beschreibenanswer.style.display = "none";
        familienanswer.style.display = "none";
        gewohnanswer.style.display = "none";
        gynoanswer.style.display = "none";
        medikamenanswer.style.display = "none";
        nikotinanswer.style.display = "none";
        vegetativeanswer.style.display = "none";
        vegetativequestion.style.opacity="1";
        psycheanswer.style.display = "none";
        psychequestion.style.opacity="1";
      }},
displayAllergin(){  if (allerginanswer.style.display !== "none") {
        allerginanswer.style.display = "none";
        allerginquestion.style.opacity="1";
      } else {
        allerginanswer.style.display = "block";
        allerginquestion.style.opacity="0.5";
         akutesanswer.style.display = "none";
        beschreibenanswer.style.display = "none";
        familienanswer.style.display = "none";
        gewohnanswer.style.display = "none";
        gynoanswer.style.display = "none";
        medikamenanswer.style.display = "none";
        nikotinanswer.style.display = "none";
        akutesquestion.style.opacity="1";
        beschreibenquestion.style.opacity="1";
        familienquestion.style.opacity="1";
        medikamenquestion.style.opacity="1";
        gynoquestion.style.opacity="1";
        nikotinquestion.style.opacity="1";
        gewohnquestion.style.opacity="1";
        vegetativeanswer.style.display = "none";
        vegetativequestion.style.opacity="1";
        psycheanswer.style.display = "none";
        psychequestion.style.opacity="1";
      }},
displayBeschreiben(){  if (beschreibenanswer.style.display !== "none") {
        beschreibenanswer.style.display = "none";
        beschreibenquestion.style.opacity="1";

      } else {
        beschreibenanswer.style.display = "block";
        beschreibenquestion.style.opacity="0.5";
          allerginanswer.style.display = "none";
       akutesanswer.style.display = "none";
        familienanswer.style.display = "none";
        gewohnanswer.style.display = "none";
        gynoanswer.style.display = "none";
        medikamenanswer.style.display = "none";
        nikotinanswer.style.display = "none";
        allerginquestion.style.opacity="1";
        akutesquestion.style.opacity="1";
        familienquestion.style.opacity="1";
        medikamenquestion.style.opacity="1";
        gynoquestion.style.opacity="1";
        nikotinquestion.style.opacity="1";
        gewohnquestion.style.opacity="1";
        vegetativeanswer.style.display = "none";
        vegetativequestion.style.opacity="1";
        psycheanswer.style.display = "none";
        psychequestion.style.opacity="1";
      }},
displayFamilien(){  if (familienanswer.style.display !== "none") {
        familienanswer.style.display = "none";
        familienquestion.style.opacity="1";
      } else {
        familienanswer.style.display = "block";
        familienquestion.style.opacity="0.5";
        allerginanswer.style.display = "none";
        beschreibenanswer.style.display = "none";
        akutesanswer.style.display = "none";
        gewohnanswer.style.display = "none";
        gynoanswer.style.display = "none";
        medikamenanswer.style.display = "none";
        nikotinanswer.style.display = "none";
        allerginquestion.style.opacity="1";
        beschreibenquestion.style.opacity="1";
        akutesquestion.style.opacity="1";
        medikamenquestion.style.opacity="1";
        gynoquestion.style.opacity="1";
        nikotinquestion.style.opacity="1";
        gewohnquestion.style.opacity="1";
        vegetativeanswer.style.display = "none";
        vegetativequestion.style.opacity="1";
        psycheanswer.style.display = "none";
        psychequestion.style.opacity="1";
      }},
displayGewohn(){  if (gewohnanswer.style.display !== "none") {
        gewohnanswer.style.display = "none";
        gewohnquestion.style.opacity="1";
      } else {
        gewohnanswer.style.display = "block";
        gewohnquestion.style.opacity="0.5";
          allerginanswer.style.display = "none";
        beschreibenanswer.style.display = "none";
        familienanswer.style.display = "none";
        akutesanswer.style.display = "none";
        gynoanswer.style.display = "none";
        medikamenanswer.style.display = "none";
        nikotinanswer.style.display = "none";
        allerginquestion.style.opacity="1";
        beschreibenquestion.style.opacity="1";
        familienquestion.style.opacity="1";
        medikamenquestion.style.opacity="1";
        gynoquestion.style.opacity="1";
        nikotinquestion.style.opacity="1";
        akutesquestion.style.opacity="1";
        vegetativeanswer.style.display = "none";
        vegetativequestion.style.opacity="1";
        psycheanswer.style.display = "none";
        psychequestion.style.opacity="1";
      }},
displayGyno(){  if (gynoanswer.style.display !== "none") {
        gynoanswer.style.display = "none";
         gynoquestion.style.opacity="1";
      } else {
       akutesanswer.style.display = "none";
        akutesquestion.style.opacity="1";
        allerginquestion.style.opacity="1";
        beschreibenquestion.style.opacity="1";
        familienquestion.style.opacity="1";
        medikamenquestion.style.opacity="1";
        gynoquestion.style.opacity="0.5";
        nikotinquestion.style.opacity="1";
        gewohnquestion.style.opacity="1";
        allerginanswer.style.display = "none";
        beschreibenanswer.style.display = "none";
        familienanswer.style.display = "none";
        gewohnanswer.style.display = "none";
        gynoanswer.style.display = "block";
        medikamenanswer.style.display = "none";
        nikotinanswer.style.display = "none";
        vegetativeanswer.style.display = "none";
        vegetativequestion.style.opacity="1";
        psycheanswer.style.display = "none";
        psychequestion.style.opacity="1";
      }},
displayMedikamen(){  if (medikamenanswer.style.display !== "none") {
        medikamenanswer.style.display = "none";
        medikamenquestion.style.opacity="1";
      } else {
        medikamenanswer.style.display = "block";
        medikamenquestion.style.opacity="0.5";
          allerginanswer.style.display = "none";
        beschreibenanswer.style.display = "none";
        familienanswer.style.display = "none";
        gewohnanswer.style.display = "none";
        gynoanswer.style.display = "none";
       akutesanswer.style.display = "none";
        nikotinanswer.style.display = "none";
        allerginquestion.style.opacity="1";
        beschreibenquestion.style.opacity="1";
        familienquestion.style.opacity="1";
        akutesquestion.style.opacity="1";
        gynoquestion.style.opacity="1";
        nikotinquestion.style.opacity="1";
        gewohnquestion.style.opacity="1";
        vegetativeanswer.style.display = "none";
        vegetativequestion.style.opacity="1";
        psycheanswer.style.display = "none";
        psychequestion.style.opacity="1";
      }},
displayNikotin(){  if (nikotinanswer.style.display !== "none") {
        nikotinanswer.style.display = "none";
         nikotinquestion.style.opacity="1";
      } else {
        nikotinanswer.style.display = "block";
        nikotinquestion.style.opacity="0.5";
          allerginanswer.style.display = "none";
        beschreibenanswer.style.display = "none";
        familienanswer.style.display = "none";
        gewohnanswer.style.display = "none";
        gynoanswer.style.display = "none";
        medikamenanswer.style.display = "none";
        akutesanswer.style.display = "none";
        allerginquestion.style.opacity="1";
        beschreibenquestion.style.opacity="1";
        familienquestion.style.opacity="1";
        medikamenquestion.style.opacity="1";
        gynoquestion.style.opacity="1";
       akutesquestion.style.opacity="1";
        gewohnquestion.style.opacity="1";
        vegetativeanswer.style.display = "none";
        vegetativequestion.style.opacity="1";
        psycheanswer.style.display = "none";
        psychequestion.style.opacity="1";
      }}, 
displayPsyche(){  if (psycheanswer.style.display !== "none") {
        psycheanswer.style.display = "none";
        psychequestion.style.opacity="1";
      } else {
        psycheanswer.style.display = "block";
        psychequestion.style.opacity="0.5";
        allerginanswer.style.display = "none";
        beschreibenanswer.style.display = "none";
        familienanswer.style.display = "none";
        gewohnanswer.style.display = "none";
        gynoanswer.style.display = "none";
        medikamenanswer.style.display = "none";
        akutesanswer.style.display = "none";
        nikotinanswer.style.display = "none";
        allerginquestion.style.opacity="1";
        nikotinquestion.style.opacity="1";
        beschreibenquestion.style.opacity="1";
        familienquestion.style.opacity="1";
        medikamenquestion.style.opacity="1";
        gynoquestion.style.opacity="1";
        akutesquestion.style.opacity="1";
        gewohnquestion.style.opacity="1";
        vegetativeanswer.style.display = "none";
        vegetativequestion.style.opacity="1";
      }}, 
displayVegetative(){  if (vegetativeanswer.style.display !== "none") {
        vegetativeanswer.style.display = "none";
        vegetativequestion.style.opacity="1";
      } else {
        vegetativeanswer.style.display = "block";
        vegetativequestion.style.opacity="0.5";
        allerginanswer.style.display = "none";
        beschreibenanswer.style.display = "none";
        familienanswer.style.display = "none";
        gewohnanswer.style.display = "none";
        gynoanswer.style.display = "none";
        medikamenanswer.style.display = "none";
        akutesanswer.style.display = "none";
        nikotinanswer.style.display = "none";
        psycheanswer.style.display = "none";
        psychequestion.style.opacity="1";
        allerginquestion.style.opacity="1";
        nikotinquestion.style.opacity="1";
        beschreibenquestion.style.opacity="1";
        familienquestion.style.opacity="1";
        medikamenquestion.style.opacity="1";
        gynoquestion.style.opacity="1";
        akutesquestion.style.opacity="1";
        gewohnquestion.style.opacity="1";
      }}, 


 akutescounter() {
      var data = new FormData();
  
      data.append("economy",1);
      data.append("satisfaction",1);
      data.append("time",0.3);
      data.append("safety",0);
      data.append("step","Sie haben akutes Ergebnis unter ausführlichere Anamnese angekreuzt");
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
allergincounter() {
      var data = new FormData();
  
      data.append("economy",-0.5);
      data.append("satisfaction",0);
      data.append("time",0.3);
      data.append("safety",0);
      data.append("step","Sie haben akutes Allergin unter ausführlichere Anamnese angekreuzt");
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
beschreibencounter() {
      var data = new FormData();
  
      data.append("economy",1);
      data.append("satisfaction",1);
      data.append("time",2);
      data.append("safety",0);
      data.append("step","Sie haben Beschreiben Sie Ihre Symptome genauer! unter ausführlichere Anamnese angekreuzt");
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
familiencounter() {
      var data = new FormData();
  
      data.append("economy",-0.5);
      data.append("satisfaction",0);
      data.append("time",1);
      data.append("safety",0);
      data.append("step","Sie haben Familien- und Sozialanamnese  unter ausführlichere Anamnese angekreuzt");
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
gewohncounter() {
      var data = new FormData();
  
      data.append("economy",1);
      data.append("satisfaction",1);
      data.append("time",1);
      data.append("safety",0);
      data.append("step","Sie haben Gewohnheiten, Lebensstil  unter ausführlichere Anamnese angekreuzt");
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
gynocounter() {
      var data = new FormData();
  
      data.append("economy",-0.5);
      data.append("satisfaction",0);
      data.append("time",2);
      data.append("safety",0);
      data.append("step","Sie haben Gynokologische/Urologische/Sexualanamnese unter ausführlichere Anamnese angekreuzt")
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
medikamencounter() {
      var data = new FormData();
  
      data.append("economy",-0.5);
      data.append("satisfaction",1);
      data.append("time",0.5);
      data.append("safety",0);
      data.append("step","Sie haben Medikamentenanamnese unter ausführlichere Anamnese angekreuzt");
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
nikotincounter() {
      var data = new FormData();
  
      data.append("economy",-0.5);
      data.append("satisfaction",0);
      data.append("time",1);
      data.append("safety",0);
      data.append("step","Sie haben Nikotin, Alkohol, Drogen? unter ausführlichere Anamnese angekreuzt");
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
psychecounter() {
      var data = new FormData();
  
      data.append("economy",-0.5);
      data.append("satisfaction",0);
      data.append("time",1);
      data.append("safety",0);
      data.append("step","Sie haben Psyche unter ausführlichere Anamnese angekreuzt");
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
vegetativecounter() {
      var data = new FormData();
  
      data.append("economy",1);
      data.append("satisfaction",1);
      data.append("time",2);
      data.append("safety",0);
      data.append("step","Sie haben vegetative Anamnese  unter ausführlichere Anamnese angekreuzt");
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
  
  components: { Popup, Notepad, Submit }
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
  padding: 10px;
  border-radius: 10px;
  width:300px;
  margin: 5px auto;
  
  min-height: 0px;
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
