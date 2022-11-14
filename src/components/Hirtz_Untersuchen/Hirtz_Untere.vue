<template>
  <div class="grid grid-cols-1 gap-2">
     <div class="bg-emerald-600">

    <h1 style="font-size:1.5em; " class="h1 text-white text-center" ><b>Wählen Sie aus, welche nicht apparativen Untersuchungen an der unteren Extremität Sie durchführen möchten.</b> </h1>
    </div>
    <br>
    


        <div v-for="click in clickz">
        <div v-if="click.user==email"  class="flex justify-center ">

       <button v-if="click.untereinspektion==1" id="inspektionquestion"  class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
           @click.prevent=" countertimeInspektion();displayInspektion();">
         Inspektion und Palpation </button>

         
        <button v-else id="inspektionquestion"  class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
           @click.prevent="counterInspektion(); displayInspektion();">
         Inspektion und Palpation </button>

          <button v-if="click.unterebeweg==1" id="nasequestion" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
           @click.prevent="countertimeNase();displayNase();">
            Prüfung der Beweglichkeit
          </button>

          <button v-else id="nasequestion" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
           @click.prevent="counterNase();displayNase();">
            Prüfung der Beweglichkeit
          </button>
            
           <button v-if="click.untereneurolog==1" id="mundquestion" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
                  @click.prevent="countertimeMund();displayMund();">
            Neurolog. Untersuchung: Prüfung von Reflexen, Kraft und Sensibilität
          </button>

           <button v-else id="mundquestion" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
                  @click.prevent="counterMund();displayMund();">
            Neurolog. Untersuchung: Prüfung von Reflexen, Kraft und Sensibilität
          </button>
        

      
           <button v-if="click.unteredurch==1" id="ohrenquestion" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="countertimeOhren();displayOhren();">
           Prüfung der peripheren Durchblutung
          </button>

            <button v-else id="ohrenquestion" class="button btn shadow-[0_9px_0_rgb(0,0,0)] hover:shadow-[0_4px_0px_rgb(0,0,0)] text-black bg-white ease-out hover:translate-y-1 transition-all rounded shadow-xl"
            @click.prevent="counterOhren();displayOhren();">
           Prüfung der peripheren Durchblutung
          </button>
            </div>
            </div>
            <div class="flex justify-center ">

          
          </div> 
      
           
  </div>
    <h3 id="inspektionanswer" style="display:none"> Haut bds. o.p.B., beide Beine mäßig blass, leichte Varkosis: Corona Phlebetica paraplantaris, mehrere Besenreißervarizen an Fuß- und Kniegelenken; keine Ödeme, Atrophien oder Faszikulationen; keine Nagelveränderungen; keine Fußdeformitäten; Beckenstand gerade, keine Beinlängendifferenz; keine trophischen Störungen, Femoralispulse bds gut palpabel, Popliteal- und Fußpulse bds. schwach palpabel, Puls ca. 68/min, beide Füße eher kalt, Rekapilarisationszeit bds. &lt;2Sek. Schmerzausstrahlung bis lateralem Fußrand linker Fuß.</h3> 
        <h3 id="naseanswer" style="display:none">Normale und beschwerdefreie Beweglichkeit in Hüft-, Knie- und Fußgelenken.</h3> 
        <h3 id="mundanswer" style="display:none">Sensibilität: Hypästhesien links dorsal und lateral, Rest o.p.B.. Tonus unauffällig. Muskelkraft bei Kniestreckung (M. quadriceps (L4)) bds gleich, bei Plantar- und Dorsalflexion des Fußes und der Großzehen (L5/S1) li &lt;re, Kraftgrad 4/5. Reflexe: Patellarsehnenreflex (PSR) bds regelrecht, Achillessehnenreflex (ASR) links abgeschwächt, Babinski bds. negativ. Beinvorhalteversuch(Anwinkeln im 90° Winkel): kein Absinken. Knie-Hacke-Versuch zielsicher, Romberg- und Unterberger-Versuch unauffällig. Einbeinstand etwas wackelig aufgrund der einsetzenden Rückenschmerzen, Fersen- und Zehenspitzengang wackelig, Lasègue rechts negativ, links schnell einschießende Schmerzen in das ipsilaterale Bein mit Ausstrahlung bis an die Fußaußenseite. Rütteltest fraglich positiv.</h3> 
        <h3 id="ohrenanswer" style="display:none">Beide Beine mäßig blass, leichte Varkosis: Corona Phlebetica paraplantaris, mehrere Besenreißervarizen an Fuß- und Kniegelenken; keine Ödeme, keine trophischen Störungen, leichte Strömungsgeräusche über den Femoralisarterien bds., Femoralispulse bds gut palpabel, Popliteal- und Fußpulse bds. schwach palpabel, Puls ca. 68/min, beide Füße eher kalt, Rekapilarisationszeit bds. &lt;2Sek.</h3> 
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
      showNotepad: false,
          clickz:[],
      email:localStorage.email,
    };
  },
  created(){this.clicks(); },

  methods: {
    clicks(){

  axios.get( "./Api/api.php?action=getclicks",)
    
    .then((response) => {this.clickz=response.data })

},
countertimeInspektion() {
      var data = new FormData();
  
      data.append("time",0.5);
    
      data.append("step","Sie haben Inspektion & Palpation unter Nicht Apparative Untersuchen: untere Extremität angekreuzt");
   data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/api.php?action=countertimevariable",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
            this.clicks();
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
    },

    countertimeNase() {
      var data = new FormData();
 
      data.append("time",2);

      data.append("step","Sie haben Prüfung der Beweglichkeit unter Nicht Apparative Untersuchen: untere Extremität angekreuzt")
    data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/api.php?action=countertimevariable",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
             this.clicks();
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
    },
   
    countertimeMund() {
      var data = new FormData();
  
    
      data.append("time",5);

      data.append("step","Sie haben neurolog Untersuchung: Prüfung von Reflexen, Kraft und Sensibilität unter Nicht Apparative Untersuchen: untere Extremität angekreuzt")
      data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/api.php?action=countertimevariable",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
             this.clicks();
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
    },
    countertimeOhren() {
      var data = new FormData();

      data.append("time",1.5);

     data.append("step","Sie haben Prüfung der peripheren Durchblutung unter Nicht Apparative Untersuchen: untere Extremität angekreuzt")
    data.append("onlineuser",localStorage.email);
      axios
        .post(
          // "./Api/api.php?action=countervariable",
          "./Api/api.php?action=countertimevariable",
          data
        )
        .then(res => {
          if (res.data.error) {
            console.log("Error", res.data);
            alert(res.data.message);
          } else {
            console.log("Success", res.data.message);
             this.clicks();
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
    },

   counterInspektion() {
      var data = new FormData();
  
      data.append("economy",6.25);
      data.append("satisfaction",1);
       data.append("untereinspektion",1);
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
            this.clicks();
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
    },

    counterNase() {
      var data = new FormData();
  
      data.append("economy",6.25);
      data.append("satisfaction",1);
         data.append("unterebeweg",1);
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
             this.clicks();
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
    },
   
    counterMund() {
      var data = new FormData();
  
      data.append("economy",6.25);
      data.append("satisfaction",1);
       data.append("untereneurolog",1);
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
             this.clicks();
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
    },
    counterOhren() {
      var data = new FormData();
  
      data.append("economy",6.25);
      data.append("satisfaction",1);
         data.append("unteredurch",1);
      data.append("time",1.5);
     data.append("safety",100);
     data.append("step","Sie haben Prüfung der peripheren Durchblutung unter Nicht Apparative Untersuchen: untere Extremität angekreuzt")
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
             this.clicks();
          }
        })
        .catch(err => {
          console.log("Error", err);
        });
    },



displayInspektion(){
        inspektionanswer.style.display = "block";
        inspektionquestion.style.opacity="0.5";
        nasequestion.style.opacity="1";
        mundquestion.style.opacity="1";
        ohrenquestion.style.opacity="1";
        naseanswer.style.display = "none";
        mundanswer.style.display = "none";
        ohrenanswer.style.display = "none";
        
      },
displayNase(){
        naseanswer.style.display = "block";
        nasequestion.style.opacity="0.5";
        inspektionanswer.style.display = "none";
        mundanswer.style.display = "none";
        ohrenanswer.style.display = "none";
        inspektionquestion.style.opacity="1";
        mundquestion.style.opacity="1";
        ohrenquestion.style.opacity="1";
        
      },
displayMund(){ 
        mundanswer.style.display = "block";
        mundquestion.style.opacity="0.5";
        naseanswer.style.display = "none";
        inspektionanswer.style.display = "none";
        ohrenanswer.style.display = "none";
        nasequestion.style.opacity="1";
        inspektionquestion.style.opacity="1";
        ohrenquestion.style.opacity="1";
        
      },
displayOhren(){ 
        ohrenanswer.style.display = "block";
        ohrenquestion.style.opacity="0.5";
        naseanswer.style.display = "none";
        mundanswer.style.display = "none";
        inspektionanswer.style.display = "none";
        nasequestion.style.opacity="1";
        mundquestion.style.opacity="1";
        inspektionquestion.style.opacity="1";
        
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
}.button {
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
